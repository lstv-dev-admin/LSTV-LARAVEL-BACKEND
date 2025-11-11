<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMfPayrollGroupRequest extends FormRequest
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
            'payroll_group_desc' => 'required|unique:mf_payroll_groups,payroll_group_desc',
            'bank_id' => 'required|exists:mf_banks,bank_id',
            'currency_id' => 'required|exists:mf_currencies,currency_id',
        ];
    }

    public function messages(): array
    {
        return [
            'payroll_group_desc.required' => 'Payroll group description is required',
            'payroll_group_desc.unique' => 'Payroll group description already exists',
            'bank_id.required' => 'Bank is required',
            'bank_id.exists' => 'Bank not found',
            'currency_id.required' => 'Currency is required',
            'currency_id.exists' => 'Currency not found',
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
