<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfEmploymentStatus extends Model
{
    protected $table = 'mf_employment_statuses';
    protected $primaryKey = 'record_id';

    protected $fillable = ['employment_status_id', 'employment_status_desc'];

    protected static $masterfileCode = 'EMS';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_employment_statuses';
    protected static $idColumn = 'employment_status_id';
}
