<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfCostCenterRequest extends FormRequest
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
            'cost_center_desc' => ['required', Rule::unique('mf_cost_centers', 'cost_center_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'cost_center_desc.required' => 'Cost center description is required',
            'cost_center_desc.unique' => 'Cost center description already exists',
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
