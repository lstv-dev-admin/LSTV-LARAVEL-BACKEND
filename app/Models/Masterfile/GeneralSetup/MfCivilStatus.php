<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfCivilStatus extends Model
{
    protected $table = 'mf_civil_statuses';
    protected $primaryKey = 'record_id';

    protected $fillable = ['civil_status_id', 'civil_status_desc'];

    protected static $masterfileCode = 'CIV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_civil_statuses';
    protected static $idColumn = 'civil_status_id';
}
