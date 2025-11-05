<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfCivilServiceEligibility extends Model
{
    protected $table = 'mf_civil_service_eligibilities';
    protected $primaryKey = 'record_id';

    protected $fillable = ['civil_service_eligibility_id', 'civil_service_eligibility_desc'];

    protected static $masterfileCode = 'EGL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_civil_service_eligibilities';
    protected static $idColumn = 'civil_service_eligibility_id';
}
