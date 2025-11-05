<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfSuffix extends Model
{
    protected $table = 'mf_suffixes';
    protected $primaryKey = 'record_id';

    protected $fillable = ['suffix_id', 'suffix_desc'];

    protected static $masterfileCode = 'SFX';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_suffixes';
    protected static $idColumn = 'suffix_id';
}
