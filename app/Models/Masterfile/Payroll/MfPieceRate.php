<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfPieceRate extends Model
{
    protected $table = "mf_piece_rates";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'piece_rate_id',
        'piece_rate_desc',
        'amount',
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

    protected static $masterfileCode = 'PIE';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_piece_rates';
    protected static $idColumn = 'piece_rate_id';
}
