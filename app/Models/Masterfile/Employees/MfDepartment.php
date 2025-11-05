<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfDepartment extends Model
{
    protected $table = 'mf_departments';
    protected $primaryKey = 'record_id';

    protected $fillable = ['department_id', 'department_desc'];

    protected static $masterfileCode = 'DPT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_departments';
    protected static $idColumn = 'department_id';
}
