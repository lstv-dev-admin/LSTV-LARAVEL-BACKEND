<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfNonPayrollBenefitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'non_payroll_benefit_desc' => ['required', Rule::unique('mf_non_payroll_benefits', 'non_payroll_benefit_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'non_payroll_benefit_desc.required' => 'Non payroll benefit description is required',
            'non_payroll_benefit_desc.unique' => 'Non payroll benefit description already exists',
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
