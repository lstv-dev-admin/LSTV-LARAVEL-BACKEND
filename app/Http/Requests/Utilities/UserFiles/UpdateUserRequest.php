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
        // $userId = $this->route('id');

        $userId = 1; // static to avoid error only

        return [
            'username' => 'required|string|unique:users,username,' . $userId,
            'user_type_id' => 'required|exists:user_types,id',
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email' => 'nullable|email|unique:users,email,' . $userId,
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'Username field is required',
            'username.unique' => 'Username already exists',
            'user_type_id.required' => 'User type field is required',
            'user_type_id.exists' => 'Selected user type does not exist',
            'first_name.required' => 'First name field is required',
            'last_name.required' => 'Last name field is required',
            'email.email' => 'Email must be a valid email address',
            'email.unique' => 'Email already exists',
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

