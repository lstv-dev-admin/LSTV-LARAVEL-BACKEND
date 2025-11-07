<?php

namespace App\Models\Masterfile\Assets;

use Illuminate\Database\Eloquent\Model;

class MfAssetType extends Model
{
    protected $table = 'mf_asset_types';
    protected $primaryKey = 'record_id';

    protected $fillable = ['asset_type_id', 'asset_type_desc'];

    protected static $masterfileCode = 'AST';

    public static function getMasterfileCode()
    {
        return static::$masterfileCode;
    }
    
    protected static $tableName = 'mf_asset_types';
    protected static $idColumn = 'asset_type_id';
}
