<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'file_name' => 'required|string|max:255',
            'file_path' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Form name is required.',
            'name.string' => 'Form name must be a string.',
            'name.max' => 'Form name may not be greater than 255 characters.',
            'file_name.required' => 'File name is required.',
            'file_name.string' => 'File name must be a string.',
            'file_name.max' => 'File name may not be greater than 255 characters.',
            'file_path.required' => 'File path is required.',
            'file_path.string' => 'File path must be a string.',
            'file_path.max' => 'File path may not be greater than 255 characters.',
        ];
    }
}
