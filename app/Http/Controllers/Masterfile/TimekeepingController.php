<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\TimekeepingService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Timekeeping\{
    CreateMfAuthorizationReasonRequest,
    UpdateMfAuthorizationReasonRequest
};

class TimekeepingController extends Controller
{
    protected $service;

    public function __construct(TimekeepingService $service)
    {
        $this->service = $service;
    }

    public function createMfAuthorizationReason(CreateMfAuthorizationReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfAuthorizationReason($request->validated()));
    }

    public function getMfAuthorizationReasons(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfAuthorizationReasons($filters));
    }

    public function updateMfAuthorizationReason(string $id, UpdateMfAuthorizationReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfAuthorizationReason($id, $request->validated()));
    }

    public function deleteMfAuthorizationReason($id)
    {
        return ResponseHelper::respond($this->service->deleteMfAuthorizationReason($id));
    }
}