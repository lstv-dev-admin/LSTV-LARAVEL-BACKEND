<?php

namespace App\Models\Masterfile\CompanyDetails;

use Illuminate\Database\Eloquent\Model;

class MfOrganizationalChart extends Model
{
    protected $table = "mf_organizational_charts";
    protected $primaryKey = 'record_id';

    protected $fillable = ['organizational_chart_id', 'organizational_chart_desc'];

    protected static $masterfileCode = 'ORC';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_organizational_charts';
    protected static $idColumn = 'organizational_chart_id';
}
