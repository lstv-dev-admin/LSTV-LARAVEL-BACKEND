<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfOtherEarning extends Model
{
    protected $table = "mf_other_earnings";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'other_earning_id',
        'other_earning_desc',
        'deminimis_limit',
        'deminimis_period',
        'tax_class',
        'bir_2316_setup',
        'is_active',
        'is_included_in_13th_month',
        'is_included_in_tax',
        'is_included_in_philhealth',
        'is_included_in_pagibig',
        'is_included_in_sss',
        'is_included_in_gsis',
        'is_project_base',
    ];

    protected static $masterfileCode = 'EAR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_other_earnings';
    protected static $idColumn = 'other_earning_id';
}
