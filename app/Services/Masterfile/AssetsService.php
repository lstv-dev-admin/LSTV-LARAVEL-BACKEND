<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\AssetsInterface;

use App\Helpers\{
    QueryResultHelper,
    CustomValidationMessageHelper
};

use Exception;

class AssetsService
{
    protected $repository;

    public function __construct(AssetsInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfAssetType($data)
    {
        try {
            $res = $this->repository->createMfAssetType($data);
            return QueryResultHelper::successCreate('asset type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfAssetTypes($filters) 
    {
        return QueryResultHelper::successGet('Asset type', $this->repository->getMfAssetTypes($filters));
    }

    public function updateMfAssetType($id, $data)
    {
        try {
            $res = $this->repository->updateMfAssetType($id, $data);
            return QueryResultHelper::successUpdate('Asset type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfAssetType($id)
    {
        $this->repository->deleteMfAssetType($id);
        return QueryResultHelper::successDelete('Asset type');
    }

    public function importMfAssetType(array $data) {
        $created = [];
        $hasDuplicates = false;

        foreach ($data as $item) {
            if ($this->repository->isAssetTypeDescExist($item['asset_type_desc'])) {
                $hasDuplicates = true;
                continue;
            }   

            $created[] = $this->repository->createMfAssetType($item);
        }

        return CustomValidationMessageHelper::importMessage($created, $hasDuplicates, 'asset type');
    }
}