<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfOtherDeduction extends Model
{
    protected $table = "mf_other_deductions";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'other_deduction_id',
        'other_deduction_desc',
        'is_active',
        'is_included_in_13th_month',
        'is_included_in_philhealth',
        'is_included_in_pagibig',
        'is_included_in_sss',
        'is_included_in_gsis',
        'is_included_in_tax',
        'tax_class',
        'bir_2316_setup',
    ];

    protected static $masterfileCode = 'DED';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_other_deductions';
    protected static $idColumn = 'other_deduction_id';
}
