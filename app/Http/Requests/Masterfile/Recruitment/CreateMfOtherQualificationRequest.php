<?php

namespace App\Http\Requests\Masterfile\Recruitment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfOtherQualificationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'other_qualification_desc' => 'required|unique:mf_other_qualifications,other_qualification_desc'
        ];
    }

    public function messages(): array
    {
        return [
            'other_qualification_desc.required' => 'Other qualification description is required',
            'other_qualification_desc.unique' => 'Other qualification description already exist'
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
