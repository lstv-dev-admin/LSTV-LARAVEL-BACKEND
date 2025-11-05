<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfEmployeeStatus extends Model
{
    protected $table = 'mf_employee_statuses';
    protected $primaryKey = 'record_id';

    protected $fillable = ['employee_status_id', 'employee_status_desc'];

    protected static $masterfileCode = 'EES';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_employee_statuses';
    protected static $idColumn = 'employee_status_id';
}
