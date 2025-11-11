<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfPositionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'position_desc' => 'required|string|max:50|unique:mf_positions,position_desc',
            'position_type_id' => 'required|string|max:20|exists:mf_position_types,position_type_id',
        ];
    }

    public function messages(): array
    {
        return [
            'position_desc.required' => 'Position description is required',
            'position_desc.string' => 'Position description must be a string',
            'position_desc.max' => 'Position description must not exceed 50 characters',
            'position_desc.unique' => 'Position description already exists',
            'position_type_id.required' => 'Position type is required',
            'position_type_id.string' => 'Position type must be a string',
            'position_type_id.max' => 'Position type must not exceed 20 characters',
            'position_type_id.exists' => 'Selected position type does not exist',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'  => 'error',
                'message' => $validator->errors()
            ], 422)
        );
    }
}

