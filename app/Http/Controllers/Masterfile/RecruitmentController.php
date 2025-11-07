<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\RecruitmentService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Recruitment\{
    CreateMfJobVacancyStatusRequest,
    UpdateMfJobVacancyStatusRequest,
    CreateMfRecruitmentReasonRequest,
    UpdateMfRecruitmentReasonRequest,
    CreateMfOtherQualificationRequest,
    UpdateMfOtherQualificationRequest,
    CreateMfSourceChannelRequest,
    UpdateMfSourceChannelRequest
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

    public function createMfRecruitmentReason(CreateMfRecruitmentReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfRecruitmentReason($request->validated()));
    }

    public function getMfRecruitmentReasons(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfRecruitmentReasons($filters));
    }

    public function updateMfRecruitmentReason(string $id, UpdateMfRecruitmentReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfRecruitmentReason($id, $request->validated()));
    }

    public function deleteMfRecruitmentReason($id)
    {
        return ResponseHelper::respond($this->service->deleteMfRecruitmentReason($id));
    }

    public function createMfOtherQualification(CreateMfOtherQualificationRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfOtherQualification($request->validated()));
    }

    public function getMfOtherQualifications(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfOtherQualifications($filters));
    }

    public function updateMfOtherQualification(string $id, UpdateMfOtherQualificationRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfOtherQualification($id, $request->validated()));
    }

    public function deleteMfOtherQualification($id)
    {
        return ResponseHelper::respond($this->service->deleteMfOtherQualification($id));
    }

    public function createMfSourceChannel(CreateMfSourceChannelRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfSourceChannel($request->validated()));
    }

    public function getMfSourceChannels(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfSourceChannels($filters));
    }

    public function updateMfSourceChannel(string $id, UpdateMfSourceChannelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfSourceChannel($id, $request->validated()));
    }

    public function deleteMfSourceChannel($id)
    {
        return ResponseHelper::respond($this->service->deleteMfSourceChannel($id));
    }
}