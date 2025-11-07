<?php

namespace App\Interfaces\Masterfile;

interface AssetsInterface
{
    public function createMfAssetType($data);
    public function getMfAssetTypes($filters);
    public function updateMfAssetType($id, $data);
    public function deleteMfAssetType($id);
    public function isAssetTypeDescExist($desc);
}