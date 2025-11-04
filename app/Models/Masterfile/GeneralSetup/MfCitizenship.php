<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfCitizenship extends Model
{
    protected $table = 'mf_citizenships';
    protected $primaryKey = 'record_id';

    protected $fillable = ['citizenship_id', 'citizenship_desc'];

    protected static $masterfileCode = 'CTZ';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_citizenships';
    protected static $idColumn = 'citizenship_id';
}
