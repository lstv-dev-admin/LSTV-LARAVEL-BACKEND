<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateProvinceRequest extends FormRequest
{
    public function authorize(): bool 
    { 
        return true; 
    }

    public function rules(): array 
    { 
        return [
            'name' => 'required|unique:provinces,name'
        ]; 
    }

    public function messages(): array 
    { 
        return [
            'name.required' => 'Province field is required',
            'name.unique' => 'Province already exists'
        ]; 
    }

    protected function failedValidation(Validator $validator)
    { 
        throw new HttpResponseException(
            response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 422)
        ); 
    }
}
