<?php

namespace App\Http\Pager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\Export;
use App\Imports\Import;
use App\Events\Loader;
use App\Models\Masterfile\CompanyDetails\CompanyProfile as CompanySetup;
use App\Helpers\LSTVPDF;
use App\Helpers\LSTVSpreadSheet;
// use App\Traits\HandlesDeleteConstraint; // TODO: Create this trait if needed

class PagerController extends Controller
{
    // use HandlesDeleteConstraint;

    public function store()
    {
        DB::beginTransaction();
        try {
            $modelClass = request()->get('model');
            if (!class_exists($modelClass)) {
                throw new \Exception("Model class {$modelClass} does not exist.");
            }

            $columns = request()->get('data');

            if (!$columns || !is_array($columns)) {
                throw new \Exception('Invalid columns data. Expecting an array.');
            }

            // Identify all *_desc fields from request
            $descFields = collect($columns)->filter(function ($value, $key) {
                return Str::endsWith($key, '_desc');
            });

            // Check for existing records with matching *_desc values
            if ($descFields->isNotEmpty()) {
                $query = $modelClass::query();

                foreach ($descFields as $field => $value) {
                    $query->where($field, $value);
                }

                if ($query->exists()) {
                    return response()->json([
                        'message' => 'Data already exists!',
                    ], 409);
                }
            }

            // Proceed to create the record
            $data = $modelClass::create($columns);

            DB::commit();
            return $data;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function show($record_id)
    {
        $modelClass = request()->get('model');
        if (!class_exists($modelClass)) {
            return response()->json(['error' => "Model {$modelClass} not found"], 404);
        }

        $data = $modelClass::find($record_id);

        if (!$data) {
            return response()->json(['error' => 'Record not found'], 404);
        }

        return response()->json($data);
    }

    public function update()
    {
        DB::beginTransaction();
        try {
            $modelClass = request()->get('model');
            if (!class_exists($modelClass)) {
                throw new \Exception("Model class {$modelClass} does not exist.");
            }

            $requestData = request()->get('data');
            $recordId = $requestData['record_id'] ?? null;

            if (!$recordId) {
                throw new \Exception("Missing record_id.");
            }

            $data = $modelClass::where('record_id', $recordId)->firstOrFail();

            // Find all fields ending in '_desc'
            $descFields = collect($requestData)->filter(function ($value, $key) {
                return Str::endsWith($key, '_desc');
            });

            // Check for duplicates
            foreach ($descFields as $field => $value) {
                $exists = $modelClass::where($field, $value)
                    ->where('record_id', '!=', $recordId)
                    ->exists();

                if ($exists) {
                    return response()->json([
                        'message' => "'{$value}' already exists in another record."
                    ], 422);
                }
            }

            $data->fill($requestData);
            $data->save();

            DB::commit();
            return $data;
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function delete($record_id)
    {
        DB::beginTransaction();
        try {
            $modelClass = request()->get('model');
            if (!class_exists($modelClass)) {
                throw new \Exception("Model class {$modelClass} does not exist.");
            }

            $data = $modelClass::where('record_id', $record_id)->delete();

            DB::commit();
            return $data;
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json([
                'error' => $e->getMessage(),
                'message' => method_exists($this, 'handleDelete') ? $this->handleDelete($e) : $e->getMessage(),
            ], 500);
        }
    }

    public function exportReport()
    {
        $header_caption = array_map(fn($item) => $item['caption'], request()->get('headers'));
        $select = array_map(fn($item) => $item['fieldName'], request()->get('headers'));
        $items = collect();

        if (request()->get('enableAdvancePager')) {
            $controller = request()->get('controller');
            $items = app($controller)->loadData(); // assume collection na ito
        } else {
            $modelClass = request()->get('model');

            // Extract selected columns and headers
            $header_caption = array_map(fn($item) => $item['caption'], request()->get('headers'));

            // Get all data rows
            $items = $modelClass::getQuery()
                ->selectRaw(implode(', ', $select))
                ->get();
        }

        // ✅ dito na pareho: both $items are collection

        // Calculate column widths based on longest string length per column
        $columnWidths = collect($select)->mapWithKeys(function ($column) use ($items) {
            $values = $items->pluck($column)->map(fn($v) => (string) $v);
            $maxLength = $values->max(fn($v) => strlen($v)) ?: 0;

            return [$column => $maxLength + 20]; // padding
        });


        // Determine export type
        $fileType = request()->get('type');
        $top = 10;
        $left = 10;
        $font_size = 10;
        $font_style = 'Helvetica';

        $paper_size = LSTVPDF::getPaperSize('A4'); // TODO: improve this
        $pdf = new LSTVPDF([
            'format' => $paper_size,
            'orientation' => 'P',
        ]);

        if ($fileType === 'excel') {
            $top = 0; //remove extra 2 row in excel
            $pdf = new LSTVSpreadSheet();
        }

        // Plot header
        $top = $this->plotHeader($pdf, $header_caption, $select, $columnWidths, $top, $left, $font_style, $font_size);
        // Plot data
        foreach ($items as $item) {
            $columnX = $left;
            $top += 5;

            foreach ($select as $header) {
                // Format boolean and nulls
                if ($item->{$header} === 0) {
                    $item->{$header} = 'No';
                } elseif ($item->{$header} === 1) {
                    $item->{$header} = 'Yes';
                }

                $item->{$header} = !$item->{$header} ? '' : $item->{$header};

                $pdf->plotData($columnX, $top, $item->{$header}, $font_style, $font_size, 'L');

                // Move to next column X position
                $columnX += $columnWidths[$header];
            }

            // Add new page when needed
            if ($top >= 260 && $fileType != 'excel' ) {
                $top = 5;
                $top = $this->plotHeader($pdf, $header_caption, $select, $columnWidths, $top, $left, $font_style, $font_size);
            }
        }
        if (ob_get_contents()) ob_end_clean();

        return $pdf->streamData('jabol_tv');
    }

    function plotHeader($pdf, $headers, $select, $columnWidths, $top, $left, $font_style, $font_size)
    {
        $pdf->AddPage();

        // $pdf->addImage(asset('images/'.Setup_theme::first()->logo_filename), 180, $top, 30, 20);
        $headerData = [
            CompanySetup::first()->company_desc,
            Session::get('active_route_name'),
            'Date Export: '. Carbon::now()->format('m-d-Y'),
        ];

        $columnX = $left;
        foreach ($headerData as $index => $header) {
            $pdf->plotData(10, $top, "<b>$header</b>", $font_style, 12, 'L');
            $top += 7;
        }
        $top += 2;
        foreach ($headers as $index => $header) {
            $column = $select[$index];
            $width = $columnWidths[$column];

            $pdf->plotData($columnX, $top, "<b>$header</b>", $font_style, $font_size, 'L');

            $columnX += $width;
        }

        return $top;
    }

    public function import(Request $request)
    {
        $config = json_decode($request->input('config'), true);

        $fields = $config['fields'] ?? json_decode($request->input('fields'), true);

        if (!$fields) {
            return response()->json([
                'success' => false,
                'errors' => [['message' => 'Import mapping (fields) is missing.']]
            ]);
        }

        // Now use $fields instead of $config['fields']
        foreach ($fields as $key => &$field) {
            if (!isset($field['messages'])) {
                $field['messages'] = [];
            }
            if (in_array('checkLength', $field['validate'] ?? [])) {
                $field['messages']['checkLength'] = $field['messages']['checkLength'] ?? 'Must not exceed 100 characters.';
            }
            if (!empty($field['required'])) {
                $field['messages']['required'] = $field['messages']['required'] ?? 'Required.';
            }
        }

        // Error session key
        $modelClass = $config['model'];
        $shortName = (new \ReflectionClass($modelClass))->getShortName();
        $sessionKey = 'import_errors_' . strtolower($shortName);

        session()->forget($sessionKey);
        $request->validate(['file' => 'required|file|mimes:xlsx,xls,csv']);
        $file = $request->file('file');
        if ($file->getSize() == 0) {
            return response()->json(['success' => false, 'errors' => [['message' => 'The uploaded file is empty.']]]);
        }

        $params = new \stdClass;
        $params->fields = $fields;

        broadcast(new Loader('Validating file'));

        try {

            $import = new Import($params, new $config['model']);
            Excel::import($import, $file);

            $errors = $import->getErrors();
            $validRows = $import->getValidRows();

            broadcast(new Loader('Importing File'));

            foreach ($errors as &$error) {
                if (!empty($error['row_data'])) {
                    foreach ($fields as $label => $fieldDef) { // <-- USE $fields

                        $key = $fieldDef['value'];
                        $error[$key] = $error['row_data'][$key] ?? '';
                    }
                }
            }

            broadcast(new Loader('Checking Errors'));
            if (!empty($errors)) {
                session([$sessionKey => $errors]);
                return response()->json(['success' => false, 'errors' => $errors]);
            }

            if (empty($validRows)) {

                return response()->json([
                    'success' => false,
                    'errors' => [['message' => 'No valid data rows found. Please check the template.']]
                ]);
            }

            broadcast(new Loader('Checking for existing records'));

            $uniqueField = null;

            if(!!optional(collect($fields)->first())['table']){
                $uniqueField = optional(collect($fields)->first())['key'] ?? null;
            }else{
                $uniqueField = optional(collect($fields)->first())['value'] ?? null;
            }

            if (!$uniqueField) {

                throw new \Exception('No unique field defined in the field mapping.');
            }

            // Find duplicates in the file
            // This will filter out rows that have already been seen once, leaving only duplicates
            $seen = [];
            // $duplicates_infile = collect($validRows)
            //     ->mapWithKeys(function ($row, $index) {

            //         return [$index => $row]; // Preserve original index
            //     })
            //     ->filter(function ($row) use (&$seen, $uniqueField) {
            //         $value = $row[$uniqueField];
            //         if (in_array($value, $seen)) {
            //             return true; // Already seen once before — it's a duplicate
            //         }

            //         $seen[] = $value; // First time seeing this value — skip
            //         return false;
            //     });


            // Find all duplicates (rows that already exist in DB)
            $duplicates = collect($validRows)->filter(function ($row) use ($config, $uniqueField) {
                return $config['model']::where($row)->exists();
            });

            // \Log::info($duplicates);
            // If any duplicates exist, abort import and return error
            if ($duplicates->isNotEmpty()) {
                if ($duplicates->isNotEmpty()) {
                    foreach ($duplicates as $index => $row) {
                        $errors[] = [
                            'row_number' => $row['row_number'] ?? ($index + 2),
                            'message' => 'Duplicate entry ',
                            'row_data' => $row,
                            'field' => ''
                        ];
                    }
                }

                // \Log::info($duplicates_infile);
                // if ($duplicates_infile->isNotEmpty()) {
                //     foreach ($duplicates_infile as $index => $row) {
                //         $rowNumber = $row['row_number'] ?? ($index + 2);

                //         $alreadyExists = collect($errors)->contains('row_number', $rowNumber);
                //         if ($alreadyExists) {
                //             continue;
                //         }

                //         $errors[] = [
                //             'row_number' => $rowNumber,
                //             'message' => 'Duplicate entry: ' . $row[$uniqueField],
                //             'row_data' => $row,
                //         ];
                //     }
                // }

                session([$sessionKey => $errors]);
                return response()->json([
                    'success' => false,
                    'errors' => $errors,
                    'message' => 'Duplicate data found. No records were saved.'
                ]);
            }

            DB::beginTransaction();
            foreach ($validRows as $key => $row) {
                broadcast(new Loader($row[array_key_first($row)]));
                $config['model']::create($row);
            }
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Data imported successfully.']);

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e);
            return response()->json([
                'success' => false,
                'errors' => [['message' => $e->getMessage()]]
            ]);
        }
    }

    public function exportTemplateHeader(Request $request)
    {
        $modelClass = $request->get('model');
        $headers = $request->get('headers');

        // If headers is a JSON string, decode it
        if (is_string($headers)) {
            $headers = json_decode($headers, true);
        }

        if (!$headers || !is_array($headers)) {
            return response()->json(['error' => 'Headers are required.'], 400);
        }

        $headings = array_map(
            fn($item) => $item['type'] === 'boolean'
                ? $item['caption'] . ' (Y/N)'
                : $item['caption'],
            $headers
        );

        $params = new \stdClass;
        $params->headings = $headings;
        $params->color = 'ADD8E6';
        $params->mode = 'template';

        $shortName = $modelClass ? (new \ReflectionClass($modelClass))->getShortName() : 'template';
        $filename = strtolower($shortName) . '_import_template.xlsx';
        if (ob_get_contents()) ob_end_clean();
        return Excel::download(new Export($params), $filename);
    }

    public function exportErrors(Request $request)
    {
        $headings = $request->get('headings', ['Error Line No.', 'Description']);
        $filename = $request->get('filename', 'import_errors.xlsx');

        $modelClass = $request->get('model');
        $shortName = (new \ReflectionClass($modelClass))->getShortName();
        $sessionKey = 'import_errors_' . strtolower($shortName);
        $errorLogs = session($sessionKey, []);

        $exportData = [];
        if (!empty($errorLogs)) {
            foreach ($errorLogs as $error) {
                $exportData[] = [
                    $error['row_number'] ?? 'N/A',
                    $error['value'] ?? 'Blank',
                ];
            }
        }

        $paramsExport = new \stdClass();
        $paramsExport->data = $exportData;
        $paramsExport->headings = $headings;
        $paramsExport->color = 'FFEE9090';
        $paramsExport->mode = 'array';

        return Excel::download(new \App\Exports\Export($paramsExport), $filename);
    }
}
