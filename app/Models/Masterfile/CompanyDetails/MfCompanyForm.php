<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class MfCompanyForm extends Model
{
    protected $table = "mf_company_forms";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'company_form_id',
        'company_form_desc',
        'company_form_file_name',
        'company_form_file_path',
    ];

    protected static $masterfileCode = 'CMP';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_company_forms';
    protected static $idColumn = 'company_form_id';
}
