<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\PerformanceService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Performance\{
    CreateMfEvaluationLevelRequest,
    UpdateMfEvaluationLevelRequest,
    CreateMfFactorRequest,
    UpdateMfFactorRequest
};

class PerformanceController extends Controller
{
    protected $service;

    public function __construct(PerformanceService $service)
    {
        $this->service = $service;
    }

    public function createMfEvaluationLevel(CreateMfEvaluationLevelRequest $request) {
        return ResponseHelper::respond($this->service->createMfEvaluationLevel($request->validated()));
    }

    public function getMfEvaluationLevels(PaginationRequest $filters) {
        return ResponseHelper::respond($this->service->getMfEvaluationLevels($filters));
    }

    public function updateMfEvaluationLevel(string $id, UpdateMfEvaluationLevelRequest $request) {
        return ResponseHelper::respond($this->service->updateMfEvaluationLevel($id, $request->validated()));
    }

    public function deleteMfEvaluationLevel(string $id) {
        return ResponseHelper::respond($this->service->deleteMfEvaluationLevel($id));
    }

    public function createMfFactor(CreateMfFactorRequest $request) {
        return ResponseHelper::respond($this->service->createMfFactor($request->validated()));
    }
    
    public function getMfFactors(PaginationRequest $filters) {
        return ResponseHelper::respond($this->service->getMfFactors($filters));
    }

    public function updateMfFactor(string $id, UpdateMfFactorRequest $request) {
        return ResponseHelper::respond($this->service->updateMfFactor($id, $request->validated()));
    }

    public function deleteMfFactor(string $id) {
        return ResponseHelper::respond($this->service->deleteMfFactor($id));
    }
}