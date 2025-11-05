<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfBranch extends Model
{
    protected $table = 'mf_branches';
    protected $primaryKey = 'record_id';

    protected $fillable = ['branch_id', 'branch_desc'];

    protected static $masterfileCode = 'BRH';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_branches';
    protected static $idColumn = 'branch_id';
}
