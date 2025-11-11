<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfLeaveRequest extends FormRequest
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
            'leave_desc' => 'required|string|max:50|unique:mf_leaves,leave_desc',
            'tax_class' => 'required|string|max:10',
            'bir_2316_setup' => 'nullable|string|max:20',
            'deminimis_limit' => 'nullable|numeric|min:0',
            'deminimis_period' => 'nullable|string|max:50',
            'is_active' => 'nullable|boolean',
            'is_included_in_13th_month' => 'nullable|boolean',
            'is_included_in_ecola' => 'nullable|boolean',
            'is_included_in_philhealth' => 'nullable|boolean',
            'is_included_in_pagibig' => 'nullable|boolean',
            'is_included_in_sss' => 'nullable|boolean',
            'is_included_in_gsis' => 'nullable|boolean',
            'is_included_in_tax' => 'nullable|boolean',
            'is_sick_leave' => 'nullable|boolean',
            'is_extra_day_off' => 'nullable|boolean',
            'without_pay' => 'nullable|boolean',
        ];
    }

    public function messages(): array
    {
        return [
            'leave_desc.required' => 'Leave description is required',
            'leave_desc.string' => 'Leave description must be a string',
            'leave_desc.max' => 'Leave description must not exceed 50 characters',
            'leave_desc.unique' => 'Leave description already exists',
            'tax_class.required' => 'Tax class is required',
            'tax_class.string' => 'Tax class must be a string',
            'tax_class.max' => 'Tax class must not exceed 10 characters',
            'bir_2316_setup.string' => 'BIR 2316 setup must be a string',
            'bir_2316_setup.max' => 'BIR 2316 setup must not exceed 20 characters',
            'deminimis_limit.numeric' => 'Deminimis limit must be numeric',
            'deminimis_limit.min' => 'Deminimis limit must not be negative',
            'deminimis_period.string' => 'Deminimis period must be a string',
            'deminimis_period.max' => 'Deminimis period must not exceed 50 characters',
            'is_active.boolean' => 'Active indicator must be true or false',
            'is_included_in_13th_month.boolean' => '13th month indicator must be true or false',
            'is_included_in_ecola.boolean' => 'ECOLA indicator must be true or false',
            'is_included_in_philhealth.boolean' => 'PhilHealth indicator must be true or false',
            'is_included_in_pagibig.boolean' => 'Pag-IBIG indicator must be true or false',
            'is_included_in_sss.boolean' => 'SSS indicator must be true or false',
            'is_included_in_gsis.boolean' => 'GSIS indicator must be true or false',
            'is_included_in_tax.boolean' => 'Tax indicator must be true or false',
            'is_sick_leave.boolean' => 'Sick leave indicator must be true or false',
            'is_extra_day_off.boolean' => 'Extra day off indicator must be true or false',
            'without_pay.boolean' => 'Without pay indicator must be true or false',
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


