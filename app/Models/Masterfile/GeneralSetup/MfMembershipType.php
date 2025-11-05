<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

class MfMembershipType extends Model
{
    protected $table = 'mf_membership_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['membership_type_id', 'membership_type_desc'];

    protected static $masterfileCode = 'MBT';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_membership_types';
    protected static $idColumn = 'membership_type_id';
}
