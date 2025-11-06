<?php

namespace App\Http\Requests\Masterfile\Employees;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfCostCenterGroupRequest extends FormRequest
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
            'cost_center_group_desc' => ['required', Rule::unique('mf_cost_center_groups', 'cost_center_group_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'cost_center_group_desc.required' => 'Cost center group description is required',
            'cost_center_group_desc.unique' => 'Cost center group description already exists',
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
