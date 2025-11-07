<?php

namespace App\Models\Masterfile\Timekeeping;

use Illuminate\Database\Eloquent\Model;

class MfAuthorizationReason extends Model
{
    protected $table = "mf_authorization_reasons";
    protected $primaryKey = "record_id";
    protected $fillable = [
        'record_id',
        'authorization_reason_id',
        'authorization_reason_desc'
    ];

    protected static $masterfileCode = 'AUR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_authorization_reasons';
    protected static $idColumn = 'authorization_reason_id';
}
