<?php

namespace App\Http\Requests\Masterfile\CompanyDetails;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanyProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Optionally add permission checks here
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
            'address_line_1' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'contact_person' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'zip_code' => 'nullable|string|max:20',
            'mobile_number' => 'nullable|string|max:50',
            'position' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:50',
            'is_online_application_public' => 'boolean',
            'average_processing_time' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'working_hours' => 'nullable|string|max:255',
            'dress_code' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'company_size' => 'nullable|string|max:255',
            'benefits' => 'nullable|string|max:255',
            'spoken_language' => 'nullable|string|max:255',
            'company_overview' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'address_line_1.required' => 'Address Line 1 is required.',
            'address_line_1.max' => 'Address Line 1 may not be greater than 255 characters.',
            'address_line_2.max' => 'Address Line 2 may not be greater than 255 characters.',
            'email.required' => 'Email address is required.',
            'email.email' => 'Email address must be a valid email.',
            'email.max' => 'Email address may not be greater than 255 characters.',
            'contact_person.required' => 'Contact person is required.',
            'contact_person.max' => 'Contact person may not be greater than 255 characters.',
            'phone.required' => 'Phone number is required.',
            'phone.max' => 'Phone number may not be greater than 50 characters.',
            'zip_code.max' => 'ZIP code may not be greater than 20 characters.',
            'mobile_number.max' => 'Mobile number may not be greater than 50 characters.',
            'position.max' => 'Position may not be greater than 255 characters.',
            'fax.max' => 'Fax may not be greater than 50 characters.',
            'is_online_application_public.boolean' => 'Online Application Public must be true or false.',
            'average_processing_time.max' => 'Average processing time may not be greater than 255 characters.',
            'website.max' => 'Website may not be greater than 255 characters.',
            'website.url' => 'Website must be a valid URL.',
            'working_hours.max' => 'Working hours may not be greater than 255 characters.',
            'dress_code.max' => 'Dress code may not be greater than 255 characters.',
            'industry.max' => 'Industry may not be greater than 255 characters.',
            'company_size.max' => 'Company size may not be greater than 255 characters.',
            'benefits.max' => 'Benefits may not be greater than 255 characters.',
            'spoken_language.max' => 'Spoken language may not be greater than 255 characters.',
        ];
    }
}
