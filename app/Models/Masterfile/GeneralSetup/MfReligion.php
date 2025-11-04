<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfReligion extends Model
{
    protected $table = 'mf_religions';
    protected $primaryKey = 'record_id';

    protected $fillable = ['religion_id', 'religion_desc'];

    protected static $masterfileCode = 'REL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_religions';
    protected static $idColumn = 'religion_id';
}
