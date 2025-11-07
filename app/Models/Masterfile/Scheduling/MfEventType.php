<?php

namespace App\Models\Masterfile\Scheduling;

use Illuminate\Database\Eloquent\Model;

class MfEventType extends Model
{
    protected $table = 'mf_event_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['event_type_id', 'event_type_desc'];

    protected static $masterfileCode = 'EVT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_event_types';
    protected static $idColumn = 'event_type_id';
}
