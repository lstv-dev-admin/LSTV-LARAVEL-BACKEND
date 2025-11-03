<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCostCenterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:cost_centers,name' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Cost Center field is required', 'name.unique' => 'Cost Center is already exist' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
