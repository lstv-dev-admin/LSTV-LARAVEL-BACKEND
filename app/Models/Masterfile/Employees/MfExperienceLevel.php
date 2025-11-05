<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfExperienceLevel extends Model
{
    protected $table = 'mf_experience_levels';
    protected $primaryKey = 'record_id';

    protected $fillable = ['experience_level_id', 'experience_level_desc'];

    protected static $masterfileCode = 'EXP';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_experience_levels';
    protected static $idColumn = 'experience_level_id';
}
