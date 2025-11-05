<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfNonPayrollBenefit extends Model
{
    protected $table = 'mf_non_payroll_benefits';
    protected $primaryKey = 'record_id';

    protected $fillable = ['non_payroll_benefit_id', 'non_payroll_benefit_desc'];

    protected static $masterfileCode = 'NPB';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_non_payroll_benefits';
    protected static $idColumn = 'non_payroll_benefit_id';
}
