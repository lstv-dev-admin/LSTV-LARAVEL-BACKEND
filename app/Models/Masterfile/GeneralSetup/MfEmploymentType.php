<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfEmploymentType extends Model
{
    protected $table = 'mf_employment_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['employment_type_id', 'employment_type_desc'];

    protected static $masterfileCode = 'EMT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_employment_types';
    protected static $idColumn = 'employment_type_id';
}
