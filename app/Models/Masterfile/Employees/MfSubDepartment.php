<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfSubDepartment extends Model
{
    protected $table = 'mf_sub_departments';
    protected $primaryKey = 'record_id';

    protected $fillable = ['sub_department_id', 'sub_department_desc'];

    protected static $masterfileCode = 'SDT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_sub_departments';
    protected static $idColumn = 'sub_department_id';
}
