<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfMedicalExamType extends Model
{
    protected $table = 'mf_medical_exam_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['medical_exam_type_id', 'medical_exam_type_desc'];

    protected static $masterfileCode = 'MDE';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_medical_exam_types';
    protected static $idColumn = 'medical_exam_type_id';
}
