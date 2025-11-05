<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfLicenseType extends Model
{
    protected $table = 'mf_license_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['license_type_id', 'license_type_desc'];

    protected static $masterfileCode = 'LIC';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_license_types';
    protected static $idColumn = 'license_type_id';
}
