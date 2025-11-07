<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\TrainingService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Training\{
    CreateMfTrainingTypeRequest,
    UpdateMfTrainingTypeRequest,
    ImportMfTrainingTypeRequest
};

class TrainingController extends Controller
{
    protected $service;

    public function __construct(TrainingService $service)
    {
        $this->service = $service;
    }

    public function createMfTrainingType(CreateMfTrainingTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfTrainingType($request->validated()));
    }

    public function getMfTrainingTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfTrainingTypes($filters));
    }

    public function updateMfTrainingType(string $id, UpdateMfTrainingTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfTrainingType($id, $request->validated()));
    }

    public function deleteMfTrainingType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfTrainingType($id));
    }

    public function importMfTrainingType(ImportMfTrainingTypeRequest $request)
    {
        $res = $this->service->importMfTrainingType($request->validated());
        return response()->json($res, $res['status'] ? 200 : 409);
    }
}