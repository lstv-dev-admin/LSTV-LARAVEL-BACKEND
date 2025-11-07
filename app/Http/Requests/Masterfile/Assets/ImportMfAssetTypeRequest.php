<?php

namespace App\Http\Requests\Masterfile\Assets;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ImportMfAssetTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            '*.asset_type_desc' => 'required|unique:mf_asset_types,asset_type_desc',
        ];
    }

    public function messages(): array
    {
        return [
            '*.asset_type_desc.required' => 'Asset type description is required',
            '*.asset_type_desc.unique' => 'Asset type description already exists',
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
