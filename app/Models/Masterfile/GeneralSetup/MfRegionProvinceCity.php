<?php

namespace App\Models\Masterfile\GeneralSetup;

use Illuminate\Database\Eloquent\Model;

use App\Models\Masterfile\GeneralSetup\MfRegion;
use App\Models\Masterfile\GeneralSetup\MfProvince;
use App\Models\Masterfile\GeneralSetup\MfCity;

class MfRegionProvinceCity extends Model
{
    protected $table = 'mf_region_province_cities';
    protected $primaryKey = 'record_id';

    protected $fillable = ['region_id', 'province_id', 'city_id'];

    protected static $tableName = 'mf_region_province_cities';
    protected static $idColumn = 'record_id';

    public function region()
    {
        return $this->belongsTo(MfRegion::class, 'region_id', 'record_id');
    }

    public function province()
    {
        return $this->belongsTo(MfProvince::class, 'province_id', 'record_id');
    }
    
    public function city()
    {
        return $this->belongsTo(MfCity::class, 'city_id', 'record_id');
    }
}
