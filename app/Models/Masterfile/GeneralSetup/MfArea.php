<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfArea extends Model
{
    protected $table = 'mf_areas';
    protected $primaryKey = 'record_id';

    protected $fillable = ['area_id', 'area_desc'];

    protected static $masterfileCode = 'ARE';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_areas';
    protected static $idColumn = 'area_id';
}
