<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCompanyPayrollInformationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'nullable|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'employer_name' => 'nullable|string',
            'employer_code' => 'nullable|string',
            'sss_number' => 'nullable|string',
            'locator' => 'nullable|string',
            'sss_employer_type' => 'nullable|string',
            'phic_employer_number' => 'nullable|string',
            'phic_employer_type' => 'nullable|string',
            'type_of_report' => 'nullable|string',
            'hdmf_employer_number' => 'nullable|string',
            'tin' => 'nullable|string',
            'rdo_code' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.string' => 'First name must be a string',
            'middle_name.string' => 'Middle name must be a string',
            'last_name.string' => 'Last name must be a string',
            'employer_name.string' => 'Employer name must be a string',
            'employer_code.string' => 'Employer code must be a string',
            'sss_number.string' => 'SSS number must be a string',
            'locator.string' => 'Locator must be a string',
            'sss_employer_type.string' => 'SSS employer type must be a string',
            'phic_employer_number.string' => 'PHIC employer number must be a string',
            'phic_employer_type.string' => 'PHIC employer type must be a string',
            'type_of_report.string' => 'Type of report must be a string',
            'hdmf_employer_number.string' => 'HDMF employer number must be a string',
            'tin.string' => 'TIN must be a string',
            'rdo_code.string' => 'RDO code must be a string',
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

