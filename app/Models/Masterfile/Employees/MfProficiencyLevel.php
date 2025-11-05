<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfProficiencyLevel extends Model
{
    protected $table = 'mf_proficiency_levels';
    protected $primaryKey = 'record_id';

    protected $fillable = ['proficiency_level_id', 'proficiency_level_desc'];

    protected static $masterfileCode = 'LVL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_proficiency_levels';
    protected static $idColumn = 'proficiency_level_id';
}
