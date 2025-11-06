<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCompanyInformationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address_line_1' => 'required|string',
            'address_line_2' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'email' => 'required|email',
            'contact_person' => 'nullable|string',
            'phone' => 'nullable|string',
            'mobile_number' => 'required|string',
            'position' => 'nullable|string',
            'fax' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'address_line_1.required' => 'Address line 1 is required',
            'address_line_1.string' => 'Address line 1 must be a string',
            'address_line_2.string' => 'Address line 2 must be a string',
            'zip_code.string' => 'Zip code must be a string',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'contact_person.string' => 'Contact person must be a string',
            'phone.string' => 'Phone must be a string',
            'mobile_number.required' => 'Mobile number is required',
            'mobile_number.string' => 'Mobile number must be a string',
            'position.string' => 'Position must be a string',
            'fax.string' => 'Fax must be a string',
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

