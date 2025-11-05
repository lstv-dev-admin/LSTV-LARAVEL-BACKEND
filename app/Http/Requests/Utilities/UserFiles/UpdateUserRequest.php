<?php

namespace App\Http\Requests\Utilities\UserFiles;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => 'required|string',
            'user_type_id' => 'required|exists:user_types,id',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email' => 'nullable|email',
            'status_id' => 'required|exists:statuses,id'
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'Username field is required',
            'user_type_id.required' => 'User type field is required',
            'user_type_id.exists' => 'Selected user type does not exist',
            'first_name.required' => 'First name field is required',
            'last_name.required' => 'Last name field is required',
            'email.email' => 'Email must be a valid email address',
            'status_id.required' => 'Status field is required',
            'status_id.exists' => 'Selected status does not exist', 
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 422)
        );
    }
}

