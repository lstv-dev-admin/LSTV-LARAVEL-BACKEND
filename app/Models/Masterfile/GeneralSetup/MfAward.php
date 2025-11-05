<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfAward extends Model
{
    protected $table = 'mf_awards';
    protected $primaryKey = 'record_id';

    protected $fillable = ['award_id', 'award_desc'];

    protected static $masterfileCode = 'AWD';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_awards';
    protected static $idColumn = 'award_id';
}
