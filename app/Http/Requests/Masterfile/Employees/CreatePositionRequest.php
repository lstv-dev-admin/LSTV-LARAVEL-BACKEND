<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreatePositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [ 'name' => 'required|unique:positions,name',
        'position_type_id' => 'required|exists:position_types,id'
    ];
    }
    public function messages(): array
    {
        return [ 'name.required' => 'Position field is required', 'name.unique' => 'Position is already exist', 'position_type_id.required' => 'Position type ID is required', 'position_type_id.exists' => 'Position type ID is not valid' ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['status' => 'error','message' => $validator->errors()], 422));
    }
}
