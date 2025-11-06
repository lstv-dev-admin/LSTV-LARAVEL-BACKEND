<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class MfCompanyInformation extends Model
{
    protected $table = 'mf_company_information';
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'address_line_1',
        'address_line_2',
        'zip_code',
        'email',
        'contact_person',
        'phone',
        'mobile_number',
        'position',
        'fax',
        'is_company_snapshot_public',
        'average_processing_time',
        'website',
        'working_hours',
        'dress_code',
        'industry',
        'company_size',
        'benefits',
        'spoken_language',
        'company_overview',
        'is_company_overview_public',
        'first_name',
        'middle_name',
        'last_name',
        'employer_name',
        'employer_code',
        'sss_number',
        'locator',
        'sss_employer_type',
        'phic_employer_number',
        'phic_employer_type',
        'type_of_report',
        'hdmf_employer_number',
        'tin',
        'rdo_code',
    ];
}
