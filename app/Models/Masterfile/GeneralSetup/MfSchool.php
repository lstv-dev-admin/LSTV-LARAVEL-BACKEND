<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfSchool extends Model
{
    protected $table = 'mf_schools';
    protected $primaryKey = 'record_id';

    protected $fillable = ['school_id', 'school_desc'];

    protected static $masterfileCode = 'SCH';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_schools';
    protected static $idColumn = 'school_id';
}
