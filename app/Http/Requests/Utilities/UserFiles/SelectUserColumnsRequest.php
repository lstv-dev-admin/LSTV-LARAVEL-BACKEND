<?php

namespace App\Http\Requests\Utilities\UserFiles;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SelectUserColumnsRequest extends FormRequest
{
	public function authorize(): bool
	{
		return true;
	}

	public function rules(): array
	{
		return [
			'columns' => 'required|array|min:1',
			'columns.*' => 'required|string|in:id,username,user_type_id,first_name,middle_name,last_name,email,created_at,updated_at',
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


