<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateEmployeeStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:employee_statuses,name' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Employee Status field is required', 'name.unique' => 'Employee Status is already exist' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
