<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfCostCenter extends Model
{
    protected $table = 'mf_cost_centers';
    protected $primaryKey = 'record_id';

    protected $fillable = ['cost_center_id', 'cost_center_desc'];

    protected static $masterfileCode = 'CCC';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_cost_centers';
    protected static $idColumn = 'cost_center_id';
}
