<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfCivilStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'civil_status_desc' => 'required|unique:mf_civil_statuses,civil_status_desc'
        ];
    }

    public function messages(): array
    {
        return [
            'civil_status_desc.required' => 'Civil status description is required',
            'civil_status_desc.unique' => 'Civil status description already exist'
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
