<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfCountry extends Model
{
    protected $table = 'mf_countries';
    protected $primaryKey = 'record_id';

    protected $fillable = ['country_id', 'country_desc'];

    protected static $masterfileCode = 'CTR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_countries';
    protected static $idColumn = 'country_id';
}
