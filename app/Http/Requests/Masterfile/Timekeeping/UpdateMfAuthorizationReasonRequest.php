<?php

namespace App\Http\Requests\Masterfile\Timekeeping;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMfAuthorizationReasonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'authorization_reason_desc' => 'required|unique:mf_authorization_reasons,authorization_reason_desc'
        ];
    }

    public function messages(): array
    {
        return [
            'authorization_reason_desc.required' => 'Authorization reason description is required',
            'authorization_reason_desc.unique' => 'Authorization reason description already exist',
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
