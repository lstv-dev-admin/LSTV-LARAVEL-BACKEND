<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfReligionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'religion_desc' => ['required', Rule::unique('mf_religions', 'religion_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'religion_desc.required' => 'Religion description is required',
            'religion_desc.unique' => 'Religion description already exist',
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
