<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\CompanyDetailsInterface;

use Illuminate\Support\Facades\Storage;

use App\Helpers\{
    MasterfileRecordIdHelper,
    PaginationHelper
};

use App\Models\Masterfile\CompanyDetails\{
    MfCompanyForm,
    MfHrForm,
    MfOrganizationalChart,
    MfCompanyInformation,
};

class CompanyDetailsRepository implements CompanyDetailsInterface
{
    public function createMfCompanyForm($data)
    {
        $file = $data['file_attachment'];
        $path = $file->store('files/masterfile/employees/company_forms', 'public');

        $companyFormId = MasterfileRecordIdHelper::getNextSeries(MfCompanyForm::getMasterfileCode());

        return MfCompanyForm::create([
            'company_form_id' => $companyFormId,
            'company_form_desc' => $data['company_form_desc'],
            'company_form_file_name' => $file->getClientOriginalName(),
            'company_form_file_path' => $path
        ]);
    }

    public function getMfCompanyForms($filters)
    {
        $searchableColumns = ['company_form_desc', 'company_form_file_name'];

        return PaginationHelper::render(MfCompanyForm::class, $filters, $searchableColumns);
    }

    public function deleteMfCompanyForm($id)
    {
        $model = MfCompanyForm::findOrFail($id);

        if (!empty($model->company_form_file_path) && Storage::disk('public')->exists($model->company_form_file_path)) {
            Storage::disk('public')->delete($model->company_form_file_path);
        }

        return $model->delete();
    }

    public function downloadMfCompanyForm($id)
    {
        $companyForm = MfCompanyForm::findOrFail($id);

        $disk = Storage::disk('public');

        $path = $companyForm->company_form_file_path;
        $name = $companyForm->company_form_file_name;

        if (!$path || !$disk->exists($path)) 
            return null;

        return [
            'path' => $disk->path($path),
            'name' => $name
        ];
    }

    public function createMfHrForm($data)
    {
        $file = $data['file_attachment'];
        $path = $file->store('files/masterfile/employees/hr_forms', 'public');

        $hrFormId = MasterfileRecordIdHelper::getNextSeries(MfHrForm::getMasterfileCode());

        return MfHrForm::create([
            'hr_form_id' => $hrFormId,
            'hr_form_desc' => $data['hr_form_desc'],
            'hr_form_file_name' => $file->getClientOriginalName(),
            'hr_form_file_path' => $path
        ]);
    }

    public function getMfHrForms($filters)
    {
        $searchableColumns = ['hr_form_desc', 'hr_form_file_name'];

        return PaginationHelper::render(MfHrForm::class, $filters, $searchableColumns);
    }

    public function deleteMfHrForm($id)
    {
        $model = MfHrForm::findOrFail($id);

        if (!empty($model->hr_form_file_path) && Storage::disk('public')->exists($model->hr_form_file_path)) {
            Storage::disk('public')->delete($model->hr_form_file_path);
        }

        return $model->delete();
    }

    public function downloadMfHrForm($id)
    {
        $hrForm = MfHrForm::findOrFail($id);

        $disk = Storage::disk('public');

        $path = $hrForm->hr_form_file_path;
        $name = $hrForm->hr_form_file_name;

        if (!$path || !$disk->exists($path)) 
            return null;

        return [
            'path' => $disk->path($path),
            'name' => $name
        ];
    }

    public function createMfOrganizationalChart($data)
    {
        $data['organizational_chart_id'] = MasterfileRecordIdHelper::getNextSeries(MfOrganizationalChart::getMasterfileCode());
        return MfOrganizationalChart::create($data);
    }

    public function getMfOrganizationalCharts($filters)
    {
        $searchableColumns = ['organizational_chart_desc'];
        return PaginationHelper::render(MfOrganizationalChart::class, $filters, $searchableColumns);
    }

    public function updateMfOrganizationalChart($id, $data)
    {
        MfOrganizationalChart::findOrFail($id)->update($data);
        return MfOrganizationalChart::findOrFail($id);
    }

    public function deleteMfOrganizationalChart($id)
    {
        return MfOrganizationalChart::findOrFail($id)->delete();
    }

    public function isOrganizationalChartDescExist($desc)
    {
        return MfOrganizationalChart::where('organizational_chart_desc', $desc)->exists();
    }

    public function createCompanyInformation($data)
    {
        return MfCompanyInformation::create($data);
    }

    public function createCompanySnapshot($data)
    {
        return MfCompanyInformation::create($data);
    }

    public function createCompanyOverview($data)
    {
        return MfCompanyInformation::create($data);
    }

    public function createCompanyPayrollInformation($data)
    {
        return MfCompanyInformation::create($data);
    }
}