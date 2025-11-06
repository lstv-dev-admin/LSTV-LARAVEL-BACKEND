<?php

namespace App\Models\Masterfile\Recruitment;

use Illuminate\Database\Eloquent\Model;

class MfRecruitmentReason extends Model
{
    protected $table = 'mf_recruitment_reasons';
    protected $primaryKey = 'record_id';

    protected $fillable = ['recruitment_reason_id', 'recruitment_reason_desc'];

    protected static $masterfileCode = 'PRR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_recruitment_reasons';
    protected static $idColumn = 'recruitment_reason_id';
}
