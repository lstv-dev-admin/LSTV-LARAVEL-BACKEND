<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfJobRankLevel extends Model
{
    protected $table = 'mf_job_rank_levels';
    protected $primaryKey = 'record_id';

    protected $fillable = ['job_rank_level_id', 'job_rank_level_desc'];

    protected static $masterfileCode = 'JLV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_job_rank_levels';
    protected static $idColumn = 'job_rank_level_id';
}
