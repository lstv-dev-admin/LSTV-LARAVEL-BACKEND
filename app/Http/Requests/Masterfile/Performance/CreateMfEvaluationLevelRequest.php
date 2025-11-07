<?php

namespace App\Http\Requests\Masterfile\Performance;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfEvaluationLevelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'evaluation_level_desc' => 'required|unique:mf_evaluation_levels,evaluation_level_desc',
            'level' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'evaluation_level_desc.required' => 'Evaluation level description is required',
            'evaluation_level_desc.unique' => 'Evaluation level description already exists',
            'level.required' => 'Level is required',
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


