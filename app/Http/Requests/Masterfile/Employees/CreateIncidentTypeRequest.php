<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateIncidentTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:incident_types,name' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Incident Type field is required', 'name.unique' => 'Incident Type is already exist' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
