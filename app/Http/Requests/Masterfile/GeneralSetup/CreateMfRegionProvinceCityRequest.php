<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateMfRegionProvinceCityRequest extends FormRequest
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
            'region_id' => 'required|exists:mf_regions,region_id',
            'province_id' => 'required|exists:mf_provinces,province_id',
            'city_id' => 'required|exists:mf_cities,city_id',
        ];
    }

    public function messages(): array
    {
        return [
            'region_id.required' => 'Region ID is required',
            'region_id.exists' => 'Region ID does not exist',
            'province_id.required' => 'Province ID is required',
            'province_id.exists' => 'Province ID does not exist',
            'city_id.required' => 'City ID is required',
            'city_id.exists' => 'City ID does not exist',
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
