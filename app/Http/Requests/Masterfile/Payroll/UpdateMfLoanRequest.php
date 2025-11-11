<?php

namespace App\Http\Requests\Masterfile\Payroll;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * @method mixed route(?string $name = null, mixed $default = null)
 */
class UpdateMfLoanRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'loan_desc.required' => 'Loan description is required',
            'loan_desc.string' => 'Loan description must be a string',
            'loan_desc.max' => 'Loan description must not exceed 50 characters',
            'loan_desc.unique' => 'Loan description already exists',
            'is_active.boolean' => 'Active indicator must be true or false',
            'is_government_loan.boolean' => 'Government loan indicator must be true or false',
        ];
    }

    public function messages(): array
    {
        return [
            'loan_desc.required' => 'Loan description is required',
            'loan_desc.string' => 'Loan description must be a string',
            'loan_desc.max' => 'Loan description must not exceed 50 characters',
            'loan_desc.unique' => 'Loan description already exists',
            'is_active.boolean' => 'Active indicator must be true or false',
            'is_government_loan.boolean' => 'Government loan indicator must be true or false',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'  => 'error',
                'message' => $validator->errors(),
            ], 422)
        );
    }
}

