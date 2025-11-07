<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\AssetsService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Assets\{
    CreateMfAssetTypeRequest,
    UpdateMfAssetTypeRequest,
    ImportMfAssetTypeRequest
};

class AssetsController extends Controller
{
    protected $service;

    public function __construct(AssetsService $service)
    {
        $this->service = $service;
    }

    public function createMfAssetType(CreateMfAssetTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfAssetType($request->validated()));
    }

    public function getMfAssetTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfAssetTypes($filters));
    }

    public function updateMfAssetType(string $id, UpdateMfAssetTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfAssetType($id, $request->validated()));
    }

    public function deleteMfAssetType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfAssetType($id));
    }

    public function importMfAssetType(ImportMfAssetTypeRequest $request)
    {
        $res = $this->service->importMfAssetType($request->validated());
        return response()->json($res, $res['status'] ? 200 : 409);
    }
}