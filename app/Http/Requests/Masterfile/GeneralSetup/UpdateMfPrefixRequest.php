<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfPrefixRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'prefix_desc' => ['required', Rule::unique('mf_prefixes', 'prefix_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'prefix_desc.required' => 'Prefix description is required',
            'prefix_desc.unique' => 'Prefix description already exist',
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
