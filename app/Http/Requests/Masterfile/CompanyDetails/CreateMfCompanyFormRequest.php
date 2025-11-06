<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfCompanyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_form_desc' => 'required|unique:mf_company_forms,company_form_desc',
            'file_attachment' => 'required|file|max:10240'
        ];
    }

    public function messages(): array
    {
        return [
            'company_form_desc.required' => 'Company form description is required',
            'company_form_desc.unique' => 'Company form description already exist',
            'file_attachment.required' => 'Please upload file',
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
