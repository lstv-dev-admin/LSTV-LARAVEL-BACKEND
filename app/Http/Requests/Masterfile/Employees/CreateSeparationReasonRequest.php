<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateSeparationReasonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:separation_reasons,name' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Separation Reason field is required', 'name.unique' => 'Separation Reason is already exist' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
