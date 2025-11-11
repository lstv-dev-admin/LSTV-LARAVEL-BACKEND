<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\Employees\MfPayrollGroup;

class MfCurrency extends Model
{
    protected $table = 'mf_currencies';
    protected $primaryKey = 'record_id';

    protected $fillable = ['currency_id', 'currency_desc', 'currency_rate'];

    protected static $masterfileCode = 'CUR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_currencies';
    protected static $idColumn = 'currency_id';

    public function payrollGroups()
    {
        return $this->hasMany(MfPayrollGroup::class, 'currency_id', 'record_id');
    }
}
