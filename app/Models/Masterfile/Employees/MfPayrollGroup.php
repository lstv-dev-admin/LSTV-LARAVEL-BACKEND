<?php

namespace App\Models\Masterfile\Employees;

use App\Models\Masterfile\Payroll\MfBank;
use App\Models\Masterfile\Payroll\MfCurrency;
use Illuminate\Database\Eloquent\Model;

class MfPayrollGroup extends Model
{
    protected $table = 'mf_payroll_groups';
    protected $primaryKey = 'record_id';

    protected $fillable = ['payroll_group_id', 'payroll_group_desc', 'payroll_cycle', 'bank_id', 'currency_id'];

    protected static $masterfileCode = 'PYG';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_payroll_groups';
    protected static $idColumn = 'payroll_group_id';

    public function bank()
    {
        return $this->belongsTo(MfBank::class, 'bank_id', 'record_id');
    }

    public function currency()
    {
        return $this->belongsTo(MfCurrency::class, 'currency_id', 'record_id');
    }
}
