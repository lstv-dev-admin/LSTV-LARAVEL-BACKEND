<?php

namespace App\Http\Requests\Masterfile\Payroll;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfPieceRateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'piece_rate_desc' => 'required|string|max:50|unique:mf_piece_rates,piece_rate_desc',
            'tax_class' => 'required|string|max:3',
            'amount' => 'required|numeric|min:0',
            'bir_2316_setup' => 'nullable|string|max:20',
            'is_active' => 'nullable|boolean',
            'is_included_in_13th_month' => 'nullable|boolean',
            'is_included_in_philhealth' => 'nullable|boolean',
            'is_included_in_pagibig' => 'nullable|boolean',
            'is_included_in_sss' => 'nullable|boolean',
            'is_included_in_gsis' => 'nullable|boolean',
            'is_included_in_tax' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'piece_rate_desc.required' => 'Piece rate description is required',
            'piece_rate_desc.string' => 'Piece rate description must be a string',
            'piece_rate_desc.max' => 'Piece rate description must not exceed 50 characters',
            'piece_rate_desc.unique' => 'Piece rate description already exists',
            'tax_class.required' => 'Tax class is required',
            'tax_class.string' => 'Tax class must be a string',
            'tax_class.max' => 'Tax class must not exceed 3 characters',
            'amount.required' => 'Amount is required',
            'amount.numeric' => 'Amount must be numeric',
            'amount.min' => 'Amount must not be negative',
            'bir_2316_setup.string' => 'BIR 2316 setup must be a string',
            'bir_2316_setup.max' => 'BIR 2316 setup must not exceed 20 characters',
            'is_active.boolean' => 'Active indicator must be true or false',
            'is_included_in_13th_month.boolean' => '13th month indicator must be true or false',
            'is_included_in_philhealth.boolean' => 'PhilHealth indicator must be true or false',
            'is_included_in_pagibig.boolean' => 'Pag-IBIG indicator must be true or false',
            'is_included_in_sss.boolean' => 'SSS indicator must be true or false',
            'is_included_in_gsis.boolean' => 'GSIS indicator must be true or false',
            'is_included_in_tax.boolean' => 'Tax indicator must be true or false',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 422)
        );
    }
}

