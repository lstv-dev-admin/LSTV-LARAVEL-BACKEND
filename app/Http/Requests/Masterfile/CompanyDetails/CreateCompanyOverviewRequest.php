<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCompanyOverviewRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'is_company_overview_public' => 'nullable|boolean',
            'company_overview' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'is_company_overview_public.boolean' => 'Company overview public must be a boolean',
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

