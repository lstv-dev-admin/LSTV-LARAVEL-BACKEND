<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateExperienceLevelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Experience Level field is required' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
