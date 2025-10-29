<?php

namespace App\Http\Requests\Masterfile\GeneralSetup;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateSuffixRequest extends FormRequest
{
    public function authorize(): bool 
    { 
        return true; 
    }

    public function rules(): array 
    { 
        return [
            'name' => 'required|unique:suffixes,name'
        ]; 
    }

    public function messages(): array 
    { 
        return [
            'name.required' => 'Suffix field is required',
            'name.unique' => 'Suffix already exists'
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
