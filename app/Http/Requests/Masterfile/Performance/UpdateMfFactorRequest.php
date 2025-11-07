<?php

namespace App\Http\Requests\Masterfile\Performance;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMfFactorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'factor_desc' => 'required|unique:mf_factors,factor_desc',
            'appraisal_sentence' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'factor_desc.required' => 'Factor description is required',
            'factor_desc.unique' => 'Factor description already exists',
            'appraisal_sentence.required' => 'Appraisal sentence is required',
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


