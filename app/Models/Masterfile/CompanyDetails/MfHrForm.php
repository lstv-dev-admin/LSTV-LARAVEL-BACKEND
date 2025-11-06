<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class MfHrForm extends Model
{
    protected $table = "mf_hr_forms";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'hr_form_id',
        'hr_form_desc',
        'hr_form_file_name',
        'hr_form_file_path',
    ];

    protected static $masterfileCode = 'HRF';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_hr_forms';
    protected static $idColumn = 'hr_form_id';
}

