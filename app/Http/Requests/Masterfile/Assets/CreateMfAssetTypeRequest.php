<?php

namespace App\Http\Requests\Masterfile\Assets;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfAssetTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'asset_type_desc' => 'required|string|max:50|unique:mf_asset_types,asset_type_desc',
        ];
    }

    public function messages(): array
    {
        return [
            'asset_type_desc.required' => 'The asset type description is required.',
            'asset_type_desc.string' => 'The asset type description must be a string.',
            'asset_type_desc.max' => 'The asset type description must be less than 50 characters.',
            'asset_type_desc.unique' => 'The asset type description has already been taken.',
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
