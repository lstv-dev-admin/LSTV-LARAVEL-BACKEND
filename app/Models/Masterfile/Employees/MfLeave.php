<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfLeave extends Model
{
    protected $table = "mf_leaves";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'leave_id',
        'leave_desc',
        'tax_class',
        'bir_2316_setup',
        'deminimis_limit',
        'deminimis_period',
        'is_included_in_13th_month',
        'is_included_in_ecola',
        'is_included_in_philhealth',
        'is_included_in_pagibig',
        'is_included_in_sss',
        'is_included_in_tax',
        'is_included_in_gsis',
        'is_sick_leave',
        'is_extra_day_off',
        'is_active',
        'without_pay',
    ];

    protected static $masterfileCode = 'LEV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_leaves';
    protected static $idColumn = 'record_id';
}
