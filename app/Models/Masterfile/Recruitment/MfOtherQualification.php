<?php

namespace App\Models\Masterfile\Recruitment;

use Illuminate\Database\Eloquent\Model;

class MfOtherQualification extends Model
{
    protected $table = 'mf_other_qualifications';
    protected $primaryKey = 'record_id';

    protected $fillable = ['other_qualification_id', 'other_qualification_desc'];

    protected static $masterfileCode = 'OQL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_other_qualifications';
    protected static $idColumn = 'other_qualification_id';
}
