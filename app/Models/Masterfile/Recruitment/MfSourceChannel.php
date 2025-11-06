<?php

namespace App\Models\Masterfile\Recruitment;

use Illuminate\Database\Eloquent\Model;

class MfSourceChannel extends Model
{
    protected $table = 'mf_source_channels';
    protected $primaryKey = 'record_id';

    protected $fillable = ['source_channel_id', 'source_channel_desc'];

    protected static $masterfileCode = 'SCL';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_source_channels';
    protected static $idColumn = 'source_channel_id';
}
