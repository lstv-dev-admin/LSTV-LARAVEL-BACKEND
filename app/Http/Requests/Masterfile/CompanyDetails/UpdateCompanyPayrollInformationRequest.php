<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyPayrollInformationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'first_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'employers_name' => 'nullable|string|max:255',
            'employer_code' => 'nullable|string|max:255',
            'sss_number' => 'nullable|string|max:255',
            'locator' => 'nullable|string|max:255',
            'sss_employer_type' => 'nullable|string|max:255',
            'phic_employer_number' => 'nullable|string|max:255',
            'phic_employer_type' => 'nullable|string|max:255',
            'type_of_report' => 'nullable|string|max:255',
            'pagibig_infomration' => 'nullable|string|max:255',
            'tin' => 'nullable|string|max:255',
            'rdo_code' => 'nullable|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'first_name.max' => 'First name may not be greater than 255 characters.',
            'middle_name.max' => 'Middle name may not be greater than 255 characters.',
            'last_name.max' => 'Last name may not be greater than 255 characters.',
            'employers_name.max' => 'Employer\'s name may not be greater than 255 characters.',
            'employer_code.max' => 'Employer code may not be greater than 255 characters.',
            'sss_number.max' => 'SSS number may not be greater than 255 characters.',
            'locator.max' => 'Locator may not be greater than 255 characters.',
            'sss_employer_type.max' => 'SSS employer type may not be greater than 255 characters.',
            'phic_employer_number.max' => 'PHIC employer number may not be greater than 255 characters.',
            'phic_employer_type.max' => 'PHIC employer type may not be greater than 255 characters.',
            'type_of_report.max' => 'Type of report may not be greater than 255 characters.',
            'pagibig_infomration.max' => 'Pag-IBIG information may not be greater than 255 characters.',
            'tin.max' => 'TIN may not be greater than 255 characters.',
            'rdo_code.max' => 'RDO code may not be greater than 255 characters.',
        ];
    }
}
