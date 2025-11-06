<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateMfOrganizationalChartRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'organizational_chart_desc' => 'required|unique:mf_organizational_charts,organizational_chart_desc',
        ];
    }

    public function messages(): array
    {
        return [
            'organizational_chart_desc.required' => 'Organizational chart description is required',
            'organizational_chart_desc.unique' => 'Organizational chart description already taken',
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

