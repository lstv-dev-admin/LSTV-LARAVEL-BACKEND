<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\GeneralSetup\MfRegionProvinceCity;

class MfRegion extends Model
{
    protected $table = 'mf_regions';
    protected $primaryKey = 'record_id';

    protected $fillable = ['region_id', 'region_desc'];

    protected static $masterfileCode = 'REG';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_regions';
    protected static $idColumn = 'region_id';

    public function regionProvinceCities()
    {
        return $this->hasMany(MfRegionProvinceCity::class, 'region_id', 'record_id');
    }
}
