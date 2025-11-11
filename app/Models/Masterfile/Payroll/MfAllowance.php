<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfAllowance extends Model
{
    protected $table = "mf_allowances";
    protected $primaryKey = "record_id";
    protected $fillable = [
        'allowance_id',
        'allowance_desc',
        'deminimis_limit',
        'deminimis_period',
        'tax_class',
        'bir_2316_setup',
        'is_included_in_13th_month',
        'is_included_in_philhealth',
        'is_included_in_pagibig',
        'is_included_in_sss',
        'is_included_in_gsis',
        'is_included_in_tax',
        'is_active',
        'is_project_base',
    ];

    protected static $masterfileCode = 'ALW';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_allowances';
    protected static $idColumn = 'allowance_id';
}
