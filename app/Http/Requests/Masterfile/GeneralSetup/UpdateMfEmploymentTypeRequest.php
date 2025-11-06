<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfEmploymentTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employment_type_desc' => ['required', Rule::unique('mf_employment_types', 'employment_type_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'employment_type_desc.required' => 'Employment type description is required',
            'employment_type_desc.unique' => 'Employment type description already exist',
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
