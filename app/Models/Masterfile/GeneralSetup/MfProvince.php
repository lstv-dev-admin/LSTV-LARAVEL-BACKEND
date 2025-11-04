<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfProvince extends Model
{
    protected $table = 'mf_provinces';
    protected $primaryKey = 'record_id';

    protected $fillable = ['province_id', 'province_desc'];

    protected static $masterfileCode = 'PRV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_provinces';
    protected static $idColumn = 'province_id';
}
