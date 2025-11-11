<?php

namespace App\Http\Requests\Masterfile\Payroll;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

/**
 * @method mixed route(?string $name = null, mixed $default = null)
 */
class UpdateMfOtherEarningRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'other_earning_desc' => 'required|string|max:50|unique:mf_other_earnings,other_earning_desc',
            'deminimis_limit' => 'nullable|numeric|min:0',
            'deminimis_period' => 'nullable|string|max:50',
            'tax_class' => 'nullable|string|max:3',
            'bir_2316_setup' => 'nullable|string|max:20',
            'is_active' => 'nullable|boolean',
            'is_included_in_13th_month' => 'nullable|boolean',
            'is_included_in_tax' => 'nullable|boolean',
            'is_included_in_philhealth' => 'nullable|boolean',
            'is_included_in_pagibig' => 'nullable|boolean',
            'is_included_in_sss' => 'nullable|boolean',
            'is_included_in_gsis' => 'nullable|boolean',
            'is_project_base' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'other_earning_desc.required' => 'Other earning description is required',
            'other_earning_desc.string' => 'Other earning description must be a string',
            'other_earning_desc.max' => 'Other earning description must not exceed 50 characters',
            'other_earning_desc.unique' => 'Other earning description already exists',
            'deminimis_limit.numeric' => 'Deminimis limit must be numeric',
            'deminimis_limit.min' => 'Deminimis limit must not be negative',
            'deminimis_period.string' => 'Deminimis period must be a string',
            'deminimis_period.max' => 'Deminimis period must not exceed 50 characters',
            'tax_class.string' => 'Tax class must be a string',
            'tax_class.max' => 'Tax class must not exceed 3 characters',
            'bir_2316_setup.string' => 'BIR 2316 setup must be a string',
            'bir_2316_setup.max' => 'BIR 2316 setup must not exceed 20 characters',
            'is_active.boolean' => 'Active indicator must be true or false',
            'is_included_in_13th_month.boolean' => '13th month indicator must be true or false',
            'is_included_in_tax.boolean' => 'Tax indicator must be true or false',
            'is_included_in_philhealth.boolean' => 'PhilHealth indicator must be true or false',
            'is_included_in_pagibig.boolean' => 'Pag-IBIG indicator must be true or false',
            'is_included_in_sss.boolean' => 'SSS indicator must be true or false',
            'is_included_in_gsis.boolean' => 'GSIS indicator must be true or false',
            'is_project_base.boolean' => 'Project base indicator must be true or false',
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


