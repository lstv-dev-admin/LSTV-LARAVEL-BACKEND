<?php

namespace App\Http\Requests\Masterfile\Payroll;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfCurrencyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'currency_desc' => 'required|unique:mf_currencies,currency_desc',
            'currency_rate' => 'required|numeric|min:0'
        ];
    }

    public function messages(): array
    {
        return [
            'currency_desc.required' => 'Currency description is required',
            'currency_desc.unique' => 'Currency description already exist',
            'currency_rate.required' => 'Currency rate is required',
            'currency_rate.numeric' => 'Currency rate must be a number',
            'currency_rate.min' => 'Currency rate must be greater than 0'
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

