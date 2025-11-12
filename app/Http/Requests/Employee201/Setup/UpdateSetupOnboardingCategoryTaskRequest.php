<?php

namespace App\Http\Requests\Employee201\Setup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateSetupOnboardingCategoryTaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'onboarding_category_id'   => 'required|string|max:50|exists:setup_onboarding_categories,onboarding_category_id',
            'before_or_after'          => 'nullable|string|max:50',
            'date_filter'              => 'nullable|string|max:50',
            'date_due_type'            => 'nullable|integer',
            'is_generic'               => 'nullable|boolean',
            'is_pagibig'               => 'nullable|boolean',
            'is_philhealth'            => 'nullable|boolean',
            'is_required'              => 'nullable|boolean',
            'is_required_attach'       => 'nullable|boolean',
            'is_required_template'     => 'nullable|boolean',
            'is_sss'                   => 'nullable|boolean',
            'is_tin'                   => 'nullable|boolean',
            'range_interval'           => 'nullable|integer',
            'task_description'         => 'required|string|max:150',
        ];
    }

    public function messages(): array
    {
        return [
            'onboarding_category_id.required' => 'Onboarding category ID is required',
            'onboarding_category_id.string'   => 'Onboarding category ID must be a string',
            'onboarding_category_id.max'      => 'Onboarding category ID must not exceed 50 characters',
            'onboarding_category_id.exists'   => 'Onboarding category ID does not exist',
            'before_or_after.string'          => 'Before or after must be a string',
            'before_or_after.max'             => 'Before or after must not exceed 50 characters',
            'date_filter.string'              => 'Date filter must be a string',
            'date_filter.max'                 => 'Date filter must not exceed 50 characters',
            'date_due_type.integer'           => 'Date due type must be an integer',
            'is_generic.boolean'              => 'Generic indicator must be true or false',
            'is_pagibig.boolean'              => 'Pag-IBIG indicator must be true or false',
            'is_philhealth.boolean'           => 'PhilHealth indicator must be true or false',
            'is_required.boolean'             => 'Required indicator must be true or false',
            'is_required_attach.boolean'      => 'Required attachment indicator must be true or false',
            'is_required_template.boolean'    => 'Required template indicator must be true or false',
            'is_sss.boolean'                  => 'SSS indicator must be true or false',
            'is_tin.boolean'                  => 'TIN indicator must be true or false',
            'range_interval.integer'          => 'Range interval must be an integer',
            'task_description.required'       => 'Task description is required',
            'task_description.string'         => 'Task description must be a string',
            'task_description.max'            => 'Task description must not exceed 150 characters',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'status'  => 'error',
                'message' => $validator->errors(),
            ], 422)
        );
    }
}

