<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfExperienceLevelRequest extends FormRequest
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
            'experience_level_desc' => ['required', Rule::unique('mf_experience_levels', 'experience_level_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'experience_level_desc.required' => 'Experience level description is required',
            'experience_level_desc.unique' => 'Experience level description already exists',
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
