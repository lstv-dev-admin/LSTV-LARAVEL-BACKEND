<?php

namespace App\Models\Masterfile\Performance;

use Illuminate\Database\Eloquent\Model;

class MfFactor extends Model
{
    protected $table = "mf_factors";
    protected $primaryKey = 'record_id';

    protected $fillable = ['factor_id', 'factor_desc', 'appraisal_sentence'];

    protected static $masterfileCode = 'FTR';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_factors';
    protected static $idColumn = 'factor_id';
}
