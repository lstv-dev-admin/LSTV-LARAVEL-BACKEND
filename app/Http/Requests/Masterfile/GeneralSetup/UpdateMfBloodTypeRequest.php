<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfBloodTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'blood_type_desc' => ['required', Rule::unique('mf_blood_types', 'blood_type_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'blood_type_desc.required' => 'Blood type description is required',
            'blood_type_desc.unique' => 'Blood type description already exist',
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
