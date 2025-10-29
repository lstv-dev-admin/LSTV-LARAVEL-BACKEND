<?php

namespace App\Http\Requests\Masterfile;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|unique:user_types,name'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'User type is required',
            'name.unique' => 'User type is already exist'
        ];
    }
}
