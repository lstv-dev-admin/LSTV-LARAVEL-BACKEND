<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => 'required|string|max:255|unique:users,username',
            'user_type_id' => 'required|exists:user_types,id',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email'
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'Username is required',
            'username.string' => 'Username must be a string',
            'username.max' => 'Username must not exceed 255 characters',
            'username.unique' => 'Username already exists',
            'user_type_id.required' => 'User type is required',
            'user_type_id.exists' => 'Selected user type does not exist',
            'first_name.required' => 'First name is required',
            'first_name.string' => 'First name must be a string',
            'first_name.max' => 'First name must not exceed 255 characters',
            'middle_name.string' => 'Middle name must be a string',
            'middle_name.max' => 'Middle name must not exceed 255 characters',
            'last_name.required' => 'Last name is required',
            'last_name.string' => 'Last name must be a string',
            'last_name.max' => 'Last name must not exceed 255 characters',
            'email.email' => 'Email must be a valid email address',
            'email.unique' => 'Email already exists'
        ];
    }
}
