<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfRequirement extends Model
{
    protected $table = 'mf_requirements';
    protected $primaryKey = 'record_id';

    protected $fillable = ['requirement_id', 'requirement_desc'];

    protected static $masterfileCode = 'RQT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_requirements';
    protected static $idColumn = 'requirement_id';
}
