<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfBankAccountType extends Model
{
    protected $table = 'mf_bank_account_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['bank_account_type_id', 'bank_account_type_desc'];

    protected static $masterfileCode = 'BAT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_bank_account_types';
    protected static $idColumn = 'bank_account_type_id';
}

