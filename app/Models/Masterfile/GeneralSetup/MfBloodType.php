<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfBloodType extends Model
{
    protected $table = 'mf_blood_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['blood_type_id', 'blood_type_desc'];

    protected static $masterfileCode = 'BLD';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_blood_types';
    protected static $idColumn = 'blood_type_id';
}
