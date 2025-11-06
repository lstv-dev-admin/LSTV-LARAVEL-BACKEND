<?php

namespace App\Http\Requests\Masterfile\Recruitment;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfRecruitmentReasonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'recruitment_reason_desc' => 'required|unique:mf_recruitment_reasons,recruitment_reason_desc'
        ];
    }

    public function messages(): array
    {
        return [
            'recruitment_reason_desc.required' => 'Recruitment reason description is required',
            'recruitment_reason_desc.unique' => 'Recruitment reason description already exist'
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
