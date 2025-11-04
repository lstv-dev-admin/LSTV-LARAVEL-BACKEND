<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfPositionType extends Model
{
    protected $table = 'mf_position_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['position_type_id', 'position_type_desc'];

    protected static $masterfileCode = 'PST';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_position_types';
    protected static $idColumn = 'position_type_id';
}
