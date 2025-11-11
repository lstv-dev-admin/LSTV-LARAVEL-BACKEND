<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class SeparationReason extends Model
{
    protected $table = 'separation_reasons';
    protected $primaryKey = 'record_id';

    protected $fillable = ['separation_reason_id', 'separation_reason_desc'];

    protected static $masterfileCode = 'SEP';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'separation_reasons';
    protected static $idColumn = 'separation_reason_id';
}
