<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

class MfIncidentType extends Model
{
    protected $table = 'mf_incident_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['incident_type_id', 'incident_type_desc'];

    protected static $masterfileCode = 'INT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_incident_types';
    protected static $idColumn = 'incident_type_id';
}
