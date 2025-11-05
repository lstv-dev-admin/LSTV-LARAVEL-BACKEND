<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfNationality extends Model
{
    protected $table = 'mf_nationalities';
    protected $primaryKey = 'record_id';

    protected $fillable = ['nationality_id', 'nationality_desc'];

    protected static $masterfileCode = 'NAT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_nationalities';
    protected static $idColumn = 'nationality_id';
}
