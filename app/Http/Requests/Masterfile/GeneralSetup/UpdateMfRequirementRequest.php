<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfRequirementRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'requirement_desc' => ['required', Rule::unique('mf_requirements', 'requirement_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'requirement_desc.required' => 'Requirement description is required',
            'requirement_desc.unique' => 'Requirement description already exist',
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
