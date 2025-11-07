<?php

namespace App\Models\Masterfile\Performance;

use Illuminate\Database\Eloquent\Model;

class MfEvaluationLevel extends Model
{
    protected $table = 'mf_evaluation_levels';
    protected $primaryKey = 'record_id';

    protected $fillable = ['evaluation_level_id', 'evaluation_level_desc', 'level'];

    protected static $masterfileCode = 'ELV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_evaluation_levels';
    protected static $idColumn = 'evaluation_level_id';
}
