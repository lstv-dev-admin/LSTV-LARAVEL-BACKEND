<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\SchedulingService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Scheduling\{
    CreateMfEventTypeRequest,
    UpdateMfEventTypeRequest,
    ImportMfEventTypeRequest
};

class SchedulingController extends Controller
{
    protected $service;

    public function __construct(SchedulingService $service)
    {
        $this->service = $service;
    }

    public function createMfEventType(CreateMfEventTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfEventType($request->validated()));
    }

    public function getMfEventTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfEventTypes($filters));
    }

    public function updateMfEventType(string $id, UpdateMfEventTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfEventType($id, $request->validated()));
    }

    public function deleteMfEventType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfEventType($id));
    }

    public function importMfEventType(ImportMfEventTypeRequest $request)
    {
        $res = $this->service->importMfEventType($request->validated());
        return response()->json($res, $res['status'] ? 200 : 409);
    }
}