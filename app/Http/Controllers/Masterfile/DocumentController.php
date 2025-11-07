<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\DocumentService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Document\{
    CreateMfDocumentTypeRequest,
    UpdateMfDocumentTypeRequest,
    ImportMfDocumentTypeRequest,
};

class DocumentController extends Controller
{
    protected $service;

    public function __construct(DocumentService $service)
    {
        $this->service = $service;
    }

    public function createMfDocumentType(CreateMfDocumentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfDocumentType($request->validated()));
    }

    public function getMfDocumentTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfDocumentTypes($filters));
    }

    public function updateMfDocumentType(string $id, UpdateMfDocumentTypeRequest $request) {
        return ResponseHelper::respond($this->service->updateMfDocumentType($id, $request->validated()));
    }

    public function deleteMfDocumentType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfDocumentType($id));
    }

    public function importMfDocumentType(ImportMfDocumentTypeRequest $request)
    {
        $res = $this->service->importMfDocumentType($request->validated());
        return response()->json($res, $res['status'] ? 200 : 409);
    }
}