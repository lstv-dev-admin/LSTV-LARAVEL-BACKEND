<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfLanguage extends Model
{
    protected $table = 'mf_languages';
    protected $primaryKey = 'record_id';

    protected $fillable = ['language_id', 'language_desc'];

    protected static $masterfileCode = 'LNG';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_languages';
    protected static $idColumn = 'language_id';
}
