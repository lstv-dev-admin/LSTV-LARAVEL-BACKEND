<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\RecruitmentService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\Masterfile\Recruitment\{
    CreateRecruitmentReasonRequest
};

class RecruitmentController extends Controller
{
    protected $service;

    public function __construct(RecruitmentService $service)
    {
        $this->service = $service;
    }

    public function createOrganizationalChart(CreateOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->createOrganizationalChart($request->validated()));
    }

    public function getOrganizationalCharts()
    {
        return ResponseHelper::respond($this->service->getOrganizationalCharts());
    }

    public function updateOrganizationalChart(string $id, UpdateOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->updateOrganizationalChart($id, $request->validated()));
    }

    public function createRecruitmentReason(CreateRecruitmentReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->createRecruitmentReason($request->validated()));
    }
    public function getRecruitmentReasons()
    {
        return ResponseHelper::respond($this->service->getRecruitmentReasons());
    }
    public function updateRecruitmentReason(string $id, UpdateRecruitmentReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->updateRecruitmentReason($id, $request->validated()));
    }
    public function createJobVacancyStatus(CreateJobVacancyStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createJobVacancyStatus($request->validated()));
    }
    public function getJobVacancyStatuses()
    {
        return ResponseHelper::respond($this->service->getJobVacancyStatuses());
    }
    public function updateJobVacancyStatus(string $id, UpdateJobVacancyStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateJobVacancyStatus($id, $request->validated()));
    }
    public function createOtherQualification(CreateOtherQualificationRequest $request)
    {
        return ResponseHelper::respond($this->service->createOtherQualification($request->validated()));
    }
    public function getOtherQualifications()
    {
        return ResponseHelper::respond($this->service->getOtherQualifications());
    }
    public function updateOtherQualification(string $id, UpdateOtherQualificationRequest $request)
    {
        return ResponseHelper::respond($this->service->updateOtherQualification($id, $request->validated()));
    }
}