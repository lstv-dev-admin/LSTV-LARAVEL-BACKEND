<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ImportMfRegionProvinceCityRequest extends FormRequest
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
            '*.region_id' => 'required|exists:mf_regions,record_id',
            '*.province_id' => 'required|exists:mf_provinces,record_id',
            '*.city_id' => 'required|exists:mf_cities,record_id',
        ];
    }

    public function messages(): array
    {
        return [
            '*.region_id.required' => 'Region is required',
            '*.region_id.exists' => 'Region not found',
            '*.province_id.required' => 'Province is required',
            '*.province_id.exists' => 'Province not found',
            '*.city_id.required' => 'City is required',
            '*.city_id.exists' => 'City not found',
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
