<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\AssetsInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Assets\{
    MfAssetType,
};

class AssetsRepository implements AssetsInterface
{
    public function createMfAssetType($data)
    {
        $data['asset_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfAssetType::getMasterfileCode());
        return MfAssetType::create($data);
    }
    
    
    public function getMfAssetTypes($filters)
    {
        $searchableColumns = ['asset_type_desc'];
        return PaginationHelper::render(MfAssetType::class, $filters, $searchableColumns);
    }
    
    public function updateMfAssetType($id, $data)
    {
        MfAssetType::findOrFail($id)->update($data);
        return MfAssetType::findOrFail($id);
    }

    public function deleteMfAssetType($id)
    {
        return MfAssetType::findOrFail($id)->delete();
    }

    public function isAssetTypeDescExist($desc)
    {
        return MfAssetType::where('asset_type_desc', $desc)->exists();
    }
}