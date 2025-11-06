<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfAwardRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'award_desc' => ['required', Rule::unique('mf_awards', 'award_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'award_desc.required' => 'Award description is required',
            'award_desc.unique' => 'Award description already exist',
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
