<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'email',
        'contact_person',
        'phone',
        'zip_code',
        'mobile_number',
        'position',
        'fax',
        'is_online_application_public',
        'average_processing_time',
        'website',
        'working_hours',
        'dress_code',
        'industry',
        'company_size',
        'benefits',
        'spoken_language',
        'company_overview',
    ];
}
