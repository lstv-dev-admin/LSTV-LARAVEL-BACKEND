<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateMfJobVacancyStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'job_vacancy_status_desc' => ['required', Rule::unique('mf_job_vacancy_statuses', 'job_vacancy_status_desc')->ignore(request()->route('id'))],
        ];
    }

    public function messages(): array
    {
        return [
            'job_vacancy_status_desc.required' => 'Job vacancy status description is required',
            'job_vacancy_status_desc.unique' => 'Job vacancy status description already exist',
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
