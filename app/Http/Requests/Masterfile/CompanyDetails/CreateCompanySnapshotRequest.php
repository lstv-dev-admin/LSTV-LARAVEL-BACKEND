<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCompanySnapshotRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'is_company_snapshot_public' => 'nullable|boolean',
            'average_processing_time' => 'nullable|string',
            'website' => 'nullable|string|url',
            'working_hours' => 'nullable|string',
            'dress_code' => 'nullable|string',
            'industry' => 'nullable|string',
            'company_size' => 'nullable|string',
            'benefits' => 'nullable',
            'spoken_language' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'is_company_snapshot_public.boolean' => 'Company snapshot public must be a boolean',
            'average_processing_time.string' => 'Average processing time must be a string',
            'website.string' => 'Website must be a string',
            'website.url' => 'Website must be a valid URL',
            'working_hours.string' => 'Working hours must be a string',
            'dress_code.string' => 'Dress code must be a string',
            'industry.string' => 'Industry must be a string',
            'company_size.string' => 'Company size must be a string',
            'spoken_language.string' => 'Spoken language must be a string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ], 422)
        );
    }
}

