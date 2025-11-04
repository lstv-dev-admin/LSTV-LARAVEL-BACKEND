<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfPrefix extends Model
{
    protected $table = 'mf_prefixes';
    protected $primaryKey = 'record_id';

    protected $fillable = ['prefix_id', 'prefix_desc'];

    protected static $masterfileCode = 'PRF';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_prefixes';
    protected static $idColumn = 'prefix_id';
}
