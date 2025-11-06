<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfSuffixRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'suffix_desc' => ['required', Rule::unique('mf_suffixes', 'suffix_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'suffix_desc.required' => 'Suffix description is required',
            'suffix_desc.unique' => 'Suffix description already exist',
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
