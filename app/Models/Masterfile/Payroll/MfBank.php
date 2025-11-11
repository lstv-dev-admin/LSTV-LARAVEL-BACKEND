<?php

namespace App\Models\Masterfile\Payroll;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\Employees\MfPayrollGroup;

class MfBank extends Model
{
    protected $table = 'mf_banks';
    protected $primaryKey = 'record_id';

    protected $fillable = ['bank_id', 'bank_desc'];

    protected static $masterfileCode = 'BNK';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_banks';
    protected static $idColumn = 'bank_id';

    public function payrollGroups()
    {
        return $this->hasMany(MfPayrollGroup::class, 'bank_id', 'record_id');
    }
}
