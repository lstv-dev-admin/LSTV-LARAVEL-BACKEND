<?php

namespace App\Http\Requests\Masterfile\Recruitment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMfSourceChannelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'source_channel_desc' => 'required|unique:mf_source_channels,source_channel_desc'
        ];
    }

    public function messages(): array
    {
        return [
            'source_channel_desc.required' => 'Source channel description is required',
            'source_channel_desc.unique' => 'Source channel description already exist',
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
