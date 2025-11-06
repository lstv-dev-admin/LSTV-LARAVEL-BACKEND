<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfCitizenshipRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'citizenship_desc' => ['required', Rule::unique('mf_citizenships', 'citizenship_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'citizenship_desc.required' => 'Citizenship description is required',
            'citizenship_desc.unique' => 'Citizenship description already exist',
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
