<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

class MfTaxCode extends Model
{
    protected $table = 'mf_tax_codes';
    protected $primaryKey = 'record_id';

    protected $fillable = ['tax_code_id', 'tax_code_desc'];

    protected static $masterfileCode = 'TAX';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_tax_codes';
    protected static $idColumn = 'tax_code_id';
}

