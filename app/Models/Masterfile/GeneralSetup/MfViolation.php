<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfViolation extends Model
{
    protected $table = 'mf_violations';
    protected $primaryKey = 'record_id';

    protected $fillable = ['violation_id', 'violation_desc'];

    protected static $masterfileCode = 'VIO';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_violations';
    protected static $idColumn = 'violation_id';
}
