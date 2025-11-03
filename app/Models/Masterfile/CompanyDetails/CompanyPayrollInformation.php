<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class CompanyPayrollInformation extends Model
{
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'employers_name',
        'employer_code',
        'sss_number',
        'locator',
        'sss_employer_type',
        'phic_employer_number',
        'phic_employer_type',
        'type_of_report',
        'pagibig_infomration',
        'tin',
        'rdo_code',
    ];
}
