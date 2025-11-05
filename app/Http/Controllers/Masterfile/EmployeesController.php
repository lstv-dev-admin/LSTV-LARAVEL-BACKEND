<?php

namespace App\Http\Controllers\Masterfile;

use App\Helpers\ResponseHelper;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\EmployeesService;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Employees\{
    CreateMfBranchRequest,
    UpdateMfBranchRequest,
    CreateMfDepartmentRequest,
    UpdateMfDepartmentRequest,
    CreateMfSubDepartmentRequest,
    UpdateMfSubDepartmentRequest,
    CreateMfDivisionRequest,
    UpdateMfDivisionRequest,
    CreateMfCostCenterRequest,
    UpdateMfCostCenterRequest,
    CreateMfCostCenterGroupRequest,
    UpdateMfCostCenterGroupRequest,
    CreateMfEmployeeStatusRequest,
    UpdateMfEmployeeStatusRequest,
    CreateMfEmploymentStatusRequest,
    UpdateMfEmploymentStatusRequest,
    CreateMfExperienceLevelRequest,
    UpdateMfExperienceLevelRequest,
    CreateMfIncidentTypeRequest,
    UpdateMfIncidentTypeRequest,
    CreateMfJobRankLevelRequest,
    UpdateMfJobRankLevelRequest,
    CreateMfMedicalConditionTypeRequest,
    UpdateMfMedicalConditionTypeRequest,
    CreateMfMedicalExamTypeRequest,
    UpdateMfMedicalExamTypeRequest,
    CreateMfNonPayrollBenefitRequest,
    UpdateMfNonPayrollBenefitRequest,
    CreateMfProficiencyLevelRequest,
    UpdateMfProficiencyLevelRequest,
    CreateMfCivilServiceEligibilityRequest,
    UpdateMfCivilServiceEligibilityRequest,
};

class EmployeesController extends Controller
{
    protected $service;

    public function __construct(EmployeesService $service)
    {
        $this->service = $service;
    }

    public function createMfBranch(CreateMfBranchRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfBranch($request->validated()));
    }

    public function getMfBranches(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfBranches($filters));
    }

    public function updateMfBranch(string $id, UpdateMfBranchRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfBranch($id, $request->validated()));
    }

    public function deleteMfBranch(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfBranch($id));
    }

    public function createMfDepartment(CreateMfDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfDepartment($request->validated()));
    }

    public function getMfDepartments(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfDepartments($filters));
    }

    public function updateMfDepartment(string $id, UpdateMfDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfDepartment($id, $request->validated()));
    }

    public function deleteMfDepartment(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfDepartment($id));
    }

    public function createMfSubDepartment(CreateMfSubDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfSubDepartment($request->validated()));
    }

    public function getMfSubDepartments(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfSubDepartments($filters));
    }

    public function updateMfSubDepartment(string $id, UpdateMfSubDepartmentRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfSubDepartment($id, $request->validated()));
    }

    public function deleteMfSubDepartment(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfSubDepartment($id));
    }

    public function createMfDivision(CreateMfDivisionRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfDivision($request->validated()));
    }

    public function getMfDivisions(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfDivisions($filters));
    }

    public function updateMfDivision(string $id, UpdateMfDivisionRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfDivision($id, $request->validated()));
    }

    public function deleteMfDivision(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfDivision($id));
    }

    public function createMfCostCenter(CreateMfCostCenterRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCostCenter($request->validated()));
    }

    public function getMfCostCenters(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCostCenters($filters));
    }

    public function updateMfCostCenter(string $id, UpdateMfCostCenterRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCostCenter($id, $request->validated()));
    }

    public function deleteMfCostCenter(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfCostCenter($id));
    }

    public function createMfCostCenterGroup(CreateMfCostCenterGroupRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCostCenterGroup($request->validated()));
    }

    public function getMfCostCenterGroups(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCostCenterGroups($filters));
    }

    public function updateMfCostCenterGroup(string $id, UpdateMfCostCenterGroupRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCostCenterGroup($id, $request->validated()));
    }

    public function deleteMfCostCenterGroup(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfCostCenterGroup($id));
    }

    public function createMfEmployeeStatus(CreateMfEmployeeStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfEmployeeStatus($request->validated()));
    }

    public function getMfEmployeeStatuses(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfEmployeeStatuses($filters));
    }

    public function updateMfEmployeeStatus(string $id, UpdateMfEmployeeStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfEmployeeStatus($id, $request->validated()));
    }

    public function deleteMfEmployeeStatus(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfEmployeeStatus($id));
    }

    public function createMfEmploymentStatus(CreateMfEmploymentStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfEmploymentStatus($request->validated()));
    }

    public function getMfEmploymentStatuses(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfEmploymentStatuses($filters));
    }

    public function updateMfEmploymentStatus(string $id, UpdateMfEmploymentStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfEmploymentStatus($id, $request->validated()));
    }

    public function deleteMfEmploymentStatus(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfEmploymentStatus($id));
    }

    public function createMfExperienceLevel(CreateMfExperienceLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfExperienceLevel($request->validated()));
    }

    public function getMfExperienceLevels(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfExperienceLevels($filters));
    }

    public function updateMfExperienceLevel(string $id, UpdateMfExperienceLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfExperienceLevel($id, $request->validated()));
    }

    public function deleteMfExperienceLevel(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfExperienceLevel($id));
    }

    public function createMfIncidentType(CreateMfIncidentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfIncidentType($request->validated()));
    }

    public function getMfIncidentTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfIncidentTypes($filters));
    }

    public function updateMfIncidentType(string $id, UpdateMfIncidentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfIncidentType($id, $request->validated()));
    }

    public function deleteMfIncidentType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfIncidentType($id));
    }

    public function createMfJobRankLevel(CreateMfJobRankLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfJobRankLevel($request->validated()));
    }

    public function getMfJobRankLevels(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfJobRankLevels($filters));
    }

    public function updateMfJobRankLevel(string $id, UpdateMfJobRankLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfJobRankLevel($id, $request->validated()));
    }

    public function deleteMfJobRankLevel(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfJobRankLevel($id));
    }

    public function createMfMedicalConditionType(CreateMfMedicalConditionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfMedicalConditionType($request->validated()));
    }

    public function getMfMedicalConditionTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfMedicalConditionTypes($filters));
    }

    public function updateMfMedicalConditionType(string $id, UpdateMfMedicalConditionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfMedicalConditionType($id, $request->validated()));
    }

    public function deleteMfMedicalConditionType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfMedicalConditionType($id));
    }

    public function createMfMedicalExamType(CreateMfMedicalExamTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfMedicalExamType($request->validated()));
    }

    public function getMfMedicalExamTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfMedicalExamTypes($filters));
    }

    public function updateMfMedicalExamType(string $id, UpdateMfMedicalExamTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfMedicalExamType($id, $request->validated()));
    }

    public function deleteMfMedicalExamType(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfMedicalExamType($id));
    }

    public function createMfNonPayrollBenefit(CreateMfNonPayrollBenefitRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfNonPayrollBenefit($request->validated()));
    }

    public function getMfNonPayrollBenefits(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfNonPayrollBenefits($filters));
    }

    public function updateMfNonPayrollBenefit(string $id, UpdateMfNonPayrollBenefitRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfNonPayrollBenefit($id, $request->validated()));
    }

    public function deleteMfNonPayrollBenefit(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfNonPayrollBenefit($id));
    }

    public function createMfProficiencyLevel(CreateMfProficiencyLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfProficiencyLevel($request->validated()));
    }

    public function getMfProficiencyLevels(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfProficiencyLevels($filters));
    }

    public function updateMfProficiencyLevel(string $id, UpdateMfProficiencyLevelRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfProficiencyLevel($id, $request->validated()));
    }

    public function deleteMfProficiencyLevel(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfProficiencyLevel($id));
    }

    public function createMfCivilServiceEligibility(CreateMfCivilServiceEligibilityRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCivilServiceEligibility($request->validated()));
    }

    public function getMfCivilServiceEligibilities(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCivilServiceEligibilities($filters));
    }

    public function updateMfCivilServiceEligibility(string $id, UpdateMfCivilServiceEligibilityRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCivilServiceEligibility($id, $request->validated()));
    }

    public function deleteMfCivilServiceEligibility(string $id)
    {
        return ResponseHelper::respond($this->service->deleteMfCivilServiceEligibility($id));
    }
}
