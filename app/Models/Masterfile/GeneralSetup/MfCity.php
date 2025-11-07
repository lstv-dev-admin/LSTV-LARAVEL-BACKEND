<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\GeneralSetup\MfRegionProvinceCity;

class MfCity extends Model
{
    protected $table = 'mf_cities';
    protected $primaryKey = 'record_id';

    protected $fillable = ['city_id', 'city_desc'];

    protected static $masterfileCode = 'CTY';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_cities';
    protected static $idColumn = 'city_id';

    public function regionProvinceCities()
    {
        return $this->hasMany(MfRegionProvinceCity::class, 'city_id');
    }
}
