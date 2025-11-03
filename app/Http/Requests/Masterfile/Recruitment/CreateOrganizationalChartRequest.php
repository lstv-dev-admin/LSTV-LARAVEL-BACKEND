<?php

namespace App\Http\Requests\Masterfile\Recruitment;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateOrganizationalChartRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:organizational_charts,name' ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Organizational chart field is required', 'name.unique' => 'Organizational chart is already exist' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
