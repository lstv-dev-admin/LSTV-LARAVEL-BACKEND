<?php

namespace App\Http\Controllers\Masterfile;

use App\Helpers\ResponseHelper;

use App\Http\Controllers\Controller;
use App\Http\Requests\Masterfile\CompanyDetails\{
    CreateOrganizationalChartRequest,
    UpdateOrganizationalChartRequest
};
use App\Http\Requests\Masterfile\Recruitment\CreateRecruitmentReasonRequest;
use App\Http\Requests\Masterfile\Recruitment\UpdateRecruitmentReasonRequest;
use App\Http\Requests\Masterfile\Recruitment\CreateJobVacancyStatusRequest;
use App\Http\Requests\Masterfile\Recruitment\UpdateJobVacancyStatusRequest;
use App\Http\Requests\Masterfile\Recruitment\CreateOtherQualificationRequest;
use App\Http\Requests\Masterfile\Recruitment\UpdateOtherQualificationRequest;
use App\Services\Masterfile\RecruitmentService;

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