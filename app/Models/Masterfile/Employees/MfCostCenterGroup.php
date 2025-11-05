<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfCostCenterGroup extends Model
{
    protected $table = 'mf_cost_center_groups';
    protected $primaryKey = 'record_id';

    protected $fillable = ['cost_center_group_id', 'cost_center_group_desc'];

    protected static $masterfileCode = 'CCG';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_cost_center_groups';
    protected static $idColumn = 'cost_center_group_id';
}
