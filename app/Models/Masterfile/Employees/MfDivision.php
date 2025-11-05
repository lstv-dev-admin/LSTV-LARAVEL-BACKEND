<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfDivision extends Model
{
    protected $table = 'mf_divisions';
    protected $primaryKey = 'record_id';

    protected $fillable = ['division_id', 'division_desc'];

    protected static $masterfileCode = 'DIV';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_divisions';
    protected static $idColumn = 'division_id';
}
