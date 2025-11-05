<?php

namespace App\Interfaces\Masterfile;

interface EmployeesInterface
{
    public function createMfBranch($data);
    public function getMfBranches($filters);
    public function updateMfBranch($id, $data);
    public function deleteMfBranch($id);

    public function createMfCivilServiceEligibility($data);
    public function getMfCivilServiceEligibilities($filters);
    public function updateMfCivilServiceEligibility($id, $data);
    public function deleteMfCivilServiceEligibility($id);

    public function createMfCostCenter($data);
    public function getMfCostCenters($filters);
    public function updateMfCostCenter($id, $data);
    public function deleteMfCostCenter($id);

    public function createMfCostCenterGroup($data);
    public function getMfCostCenterGroups($filters);
    public function updateMfCostCenterGroup($id, $data);
    public function deleteMfCostCenterGroup($id);

    public function createMfDepartment($data);
    public function getMfDepartments($filters);
    public function updateMfDepartment($id, $data);
    public function deleteMfDepartment($id);

    public function createMfDivision($data);
    public function getMfDivisions($filters);
    public function updateMfDivision($id, $data);
    public function deleteMfDivision($id);

    public function createMfEmployeeStatus($data);
    public function getMfEmployeeStatuses($filters);
    public function updateMfEmployeeStatus($id, $data);
    public function deleteMfEmployeeStatus($id);

    public function createMfEmploymentStatus($data);
    public function getMfEmploymentStatuses($filters);
    public function updateMfEmploymentStatus($id, $data);
    public function deleteMfEmploymentStatus($id);

    public function createMfExperienceLevel($data);
    public function getMfExperienceLevels($filters);
    public function updateMfExperienceLevel($id, $data);
    public function deleteMfExperienceLevel($id);

    public function createMfIncidentType($data);
    public function getMfIncidentTypes($filters);
    public function updateMfIncidentType($id, $data);
    public function deleteMfIncidentType($id);

    public function createMfJobRankLevel($data);
    public function getMfJobRankLevels($filters);
    public function updateMfJobRankLevel($id, $data);
    public function deleteMfJobRankLevel($id);

    public function createMfMedicalConditionType($data);
    public function getMfMedicalConditionTypes($filters);
    public function updateMfMedicalConditionType($id, $data);
    public function deleteMfMedicalConditionType($id);

    public function createMfMedicalExamType($data);
    public function getMfMedicalExamTypes($filters);
    public function updateMfMedicalExamType($id, $data);
    public function deleteMfMedicalExamType($id);

    public function createMfNonPayrollBenefit($data);
    public function getMfNonPayrollBenefits($filters);
    public function updateMfNonPayrollBenefit($id, $data);
    public function deleteMfNonPayrollBenefit($id);

    public function createMfProficiencyLevel($data);
    public function getMfProficiencyLevels($filters);
    public function updateMfProficiencyLevel($id, $data);
    public function deleteMfProficiencyLevel($id);

    public function createMfSubDepartment($data);
    public function getMfSubDepartments($filters);
    public function updateMfSubDepartment($id, $data);
    public function deleteMfSubDepartment($id);
}