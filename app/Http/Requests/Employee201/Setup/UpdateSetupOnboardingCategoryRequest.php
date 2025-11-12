<?php

namespace App\Http\Requests\Employee201\Setup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateSetupOnboardingCategoryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'onboarding_category_desc' => 'required|unique:setup_onboarding_categories,onboarding_category_desc',
        ];
    }

    public function messages(): array
    {
        return [
            'onboarding_category_desc.required' => 'Onboarding category description is required',
            'onboarding_category_desc.unique' => 'Onboarding category description already exists',
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