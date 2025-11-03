<?php

namespace App\Http\Controllers\Masterfile;

use App\Helpers\ResponseHelper;

use App\Http\Controllers\Controller;

use App\Http\Requests\Masterfile\Employees\{
    CreateBranchRequest,
    CreateCivilServiceEligibilityRequest,
    CreateCostCenterGroupRequest,
    CreateCostCenterRequest,
    CreateDepartmentRequest,
    CreateDivisionRequest,
    CreateEmployeeStatusRequest,
    CreateEmploymentStatusRequest,
    CreateExperienceLevelRequest,
    CreateIncidentTypeRequest,
    CreateJobRankLevelRequest,
    CreateMedicalConditionTypeRequest,
    CreateMedicalExamTypeRequest,
    CreateNonPayrollBenefitRequest,
    CreatePositionRequest,
    CreateProficiencyLevelRequest,
    CreateSeparationReasonRequest,
    CreateSubDepartmentRequest,
    UpdateBranchRequest,
    UpdateCivilServiceEligibilityRequest,
    UpdateCostCenterGroupRequest,
    UpdateCostCenterRequest,
    UpdateDepartmentRequest,
    UpdateDivisionRequest,
    UpdateEmployeeStatusRequest,
    UpdateEmploymentStatusRequest,
    UpdateExperienceLevelRequest,
    UpdateIncidentTypeRequest,
    UpdateJobRankLevelRequest,
    UpdateMedicalConditionTypeRequest,
    UpdateMedicalExamTypeRequest,
    UpdateNonPayrollBenefitRequest,
    UpdatePositionRequest,
    UpdateProficiencyLevelRequest,
    UpdateSeparationReasonRequest,
    UpdateSubDepartmentRequest
};

use App\Services\Masterfile\EmployeesService;

class EmployeesController extends Controller
{
    protected $service;

    public function __construct(EmployeesService $service)
    {
        $this->service = $service;
    }

    public function createDepartment(CreateDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->createDepartment($request->validated()));
    }

    public function getDepartments()
    {
        return ResponseHelper::respond($this->service->getDepartments());
    }

    public function updateDepartment(string $id, UpdateDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->updateDepartment($id, $request->validated()));
    }

    public function createSubDepartment(CreateSubDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->createSubDepartment($request->validated()));
    }

    public function getSubDepartments()
    {
        return ResponseHelper::respond($this->service->getSubDepartments());
    }

    public function updateSubDepartment(string $id, UpdateSubDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->updateSubDepartment($id, $request->validated()));
    }

    public function createDivision(CreateDivisionRequest $request)
    {
        return ResponseHelper::respond($this->service->createDivision($request->validated()));
    }

    public function getDivisions()
    {
        return ResponseHelper::respond($this->service->getDivisions());
    }

    public function updateDivision(string $id, UpdateDivisionRequest $request)
    {
        return ResponseHelper::respond($this->service->updateDivision($id, $request->validated()));
    }

    public function createBranch(CreateBranchRequest $request)
    {
        return ResponseHelper::respond($this->service->createBranch($request->validated()));
    }

    public function getBranches()
    {
        return ResponseHelper::respond($this->service->getBranches());
    }

    public function updateBranch(string $id, UpdateBranchRequest $request)
    {
        return ResponseHelper::respond($this->service->updateBranch($id, $request->validated()));
    }

    public function createEmploymentStatus(CreateEmploymentStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createEmploymentStatus($request->validated()));
    }

    public function getEmploymentStatuses()
    {
        return ResponseHelper::respond($this->service->getEmploymentStatuses());
    }

    public function updateEmploymentStatus(string $id, UpdateEmploymentStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateEmploymentStatus($id, $request->validated()));
    }

    public function createJobRankLevel(CreateJobRankLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createJobRankLevel($request->validated()));
    }

    public function getJobRankLevels()
    {
        return ResponseHelper::respond($this->service->getJobRankLevels());
    }

    public function updateJobRankLevel(string $id, UpdateJobRankLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateJobRankLevel($id, $request->validated()));
    }

    public function createProficiencyLevel(CreateProficiencyLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createProficiencyLevel($request->validated()));
    }

    public function getProficiencyLevels()
    {
        return ResponseHelper::respond($this->service->getProficiencyLevels());
    }

    public function updateProficiencyLevel(string $id, UpdateProficiencyLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateProficiencyLevel($id, $request->validated()));
    }

    public function createSeparationReason(CreateSeparationReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->createSeparationReason($request->validated()));
    }

    public function getSeparationReasons()
    {
        return ResponseHelper::respond($this->service->getSeparationReasons());
    }

    public function updateSeparationReason(string $id, UpdateSeparationReasonRequest $request)
    {
        return ResponseHelper::respond($this->service->updateSeparationReason($id, $request->validated()));
    }

    public function createIncidentType(CreateIncidentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createIncidentType($request->validated()));
    }

    public function getIncidentTypes()
    {
        return ResponseHelper::respond($this->service->getIncidentTypes());
    }

    public function updateIncidentType(string $id, UpdateIncidentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateIncidentType($id, $request->validated()));
    }

    public function createExperienceLevel(CreateExperienceLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createExperienceLevel($request->validated()));
    }

    public function getExperienceLevels()
    {
        return ResponseHelper::respond($this->service->getExperienceLevels());
    }

    public function updateExperienceLevel(string $id, UpdateExperienceLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateExperienceLevel($id, $request->validated()));
    }

    public function createCivilServiceEligibility(CreateCivilServiceEligibilityRequest $request)
    {
        return ResponseHelper::respond($this->service->createCivilServiceEligibility($request->validated()));
    }

    public function getCivilServiceEligibilities()
    {
        return ResponseHelper::respond($this->service->getCivilServiceEligibilities());
    }

    public function updateCivilServiceEligibility(string $id, UpdateCivilServiceEligibilityRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCivilServiceEligibility($id, $request->validated()));
    }

    public function createCostCenter(CreateCostCenterRequest $request)
    {
        return ResponseHelper::respond($this->service->createCostCenter($request->validated()));
    }

    public function getCostCenters()
    {
        return ResponseHelper::respond($this->service->getCostCenters());
    }

    public function updateCostCenter(string $id, UpdateCostCenterRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCostCenter($id, $request->validated()));
    }

    public function createCostCenterGroup(CreateCostCenterGroupRequest $request)
    {
        return ResponseHelper::respond($this->service->createCostCenterGroup($request->validated()));
    }

    public function getCostCenterGroups()
    {
        return ResponseHelper::respond($this->service->getCostCenterGroups());
    }

    public function updateCostCenterGroup(string $id, UpdateCostCenterGroupRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCostCenterGroup($id, $request->validated()));
    }

    public function createEmployeeStatus(CreateEmployeeStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createEmployeeStatus($request->validated()));
    }

    public function getEmployeeStatuses()
    {
        return ResponseHelper::respond($this->service->getEmployeeStatuses());
    }

    public function updateEmployeeStatus(string $id, UpdateEmployeeStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateEmployeeStatus($id, $request->validated()));
    }

    public function createNonPayrollBenefit(CreateNonPayrollBenefitRequest $request)
    {
        return ResponseHelper::respond($this->service->createNonPayrollBenefit($request->validated()));
    }

    public function getNonPayrollBenefits()
    {
        return ResponseHelper::respond($this->service->getNonPayrollBenefits());
    }

    public function updateNonPayrollBenefit(string $id, UpdateNonPayrollBenefitRequest $request)
    {
        return ResponseHelper::respond($this->service->updateNonPayrollBenefit($id, $request->validated()));
    }

    public function createMedicalExamType(CreateMedicalExamTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMedicalExamType($request->validated()));
    }

    public function getMedicalExamTypes()
    {
        return ResponseHelper::respond($this->service->getMedicalExamTypes());
    }

    public function updateMedicalExamType(string $id, UpdateMedicalExamTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMedicalExamType($id, $request->validated()));
    }

    public function createMedicalConditionType(CreateMedicalConditionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMedicalConditionType($request->validated()));
    }

    public function getMedicalConditionTypes()
    {
        return ResponseHelper::respond($this->service->getMedicalConditionTypes());
    }

    public function updateMedicalConditionType(string $id, UpdateMedicalConditionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMedicalConditionType($id, $request->validated()));
    }

    public function createPosition(CreatePositionRequest $request)
    {
        return ResponseHelper::respond($this->service->createPosition($request->validated()));
    }

    public function getPositions()
    {
        return ResponseHelper::respond($this->service->getPositions());
    }
    
    public function updatePosition(string $id, UpdatePositionRequest $request)
    {
        return ResponseHelper::respond($this->service->updatePosition($id, $request->validated()));
    }
}
