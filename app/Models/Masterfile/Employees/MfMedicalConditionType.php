<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfMedicalConditionType extends Model
{
    protected $table = 'mf_medical_condition_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['medical_condition_type_id', 'medical_condition_type_desc'];

    protected static $masterfileCode = 'MDC';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_medical_condition_types';
    protected static $idColumn = 'medical_condition_type_id';
}
