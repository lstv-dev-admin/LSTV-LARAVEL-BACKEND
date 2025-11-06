<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\RecruitmentService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Recruitment\{
    CreateMfJobVacancyStatusRequest,
    UpdateMfJobVacancyStatusRequest
};

class RecruitmentController extends Controller
{
    protected $service;

    public function __construct(RecruitmentService $service)
    {
        $this->service = $service;
    }

    public function createMfJobVacancyStatus(CreateMfJobVacancyStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfJobVacancyStatus($request->validated()));
    }

    public function getMfJobVacancyStatuses(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfJobVacancyStatuses($filters));
    }

    public function updateMfJobVacancyStatus(string $id, UpdateMfJobVacancyStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfJobVacancyStatus($id, $request->validated()));
    }

    public function deleteMfJobVacancyStatus($id)
    {
        return ResponseHelper::respond($this->service->deleteMfJobVacancyStatus($id));
    }
}