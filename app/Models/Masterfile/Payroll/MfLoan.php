<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfLoan extends Model
{
    protected $table = "mf_loans";
    protected $primaryKey = 'record_id';

    protected $fillable = [
        'loan_id',
        'loan_desc',
        'is_active',
        'is_government_loan'
    ];

    protected static $masterfileCode = 'LON';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_loans';
    protected static $idColumn = 'loan_id';
}
