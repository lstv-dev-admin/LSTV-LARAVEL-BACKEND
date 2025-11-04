<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfSkill extends Model
{
    protected $table = 'mf_skills';
    protected $primaryKey = 'record_id';

    protected $fillable = ['skill_id', 'skill_desc'];

    protected static $masterfileCode = 'SKL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_skills';
    protected static $idColumn = 'skill_id';
}
