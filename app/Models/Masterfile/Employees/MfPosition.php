<?php

namespace App\Models\Masterfile\Employees;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\GeneralSetup\MfPositionType;

class MfPosition extends Model
{
    protected $table = 'mf_positions';
    protected $primaryKey = 'record_id';

    protected $fillable = ['position_id', 'position_desc', 'position_type_id'];

    protected static $masterfileCode = 'POS';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }

    protected static $tableName = 'mf_positions';
    protected static $idColumn = 'position_id';

    public function positionType()
    {
        return $this->belongsTo(MfPositionType::class, 'position_type_id', 'position_type_id');
    }
}
