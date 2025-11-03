<?php

namespace App\Interfaces\Masterfile;

interface EmployeesInterface
{
    public function createDepartment($data);
    public function getDepartments();
    public function updateDepartment($id, $data);

    public function createSubDepartment($data);
    public function getSubDepartments();
    public function updateSubDepartment($id, $data);

    public function createDivision($data);
    public function getDivisions();
    public function updateDivision($id, $data);

    public function createBranch($data);
    public function getBranches();
    public function updateBranch($id, $data);

    public function createEmploymentStatus($data);
    public function getEmploymentStatuses();
    public function updateEmploymentStatus($id, $data);

    public function createJobRankLevel($data);
    public function getJobRankLevels();
    public function updateJobRankLevel($id, $data);

    public function createProficiencyLevel($data);
    public function getProficiencyLevels();
    public function updateProficiencyLevel($id, $data);

    public function createSeparationReason($data);
    public function getSeparationReasons();
    public function updateSeparationReason($id, $data);

    public function createIncidentType($data);
    public function getIncidentTypes();
    public function updateIncidentType($id, $data);

    public function createExperienceLevel($data);
    public function getExperienceLevels();
    public function updateExperienceLevel($id, $data);

    public function createCivilServiceEligibility($data);
    public function getCivilServiceEligibilities();
    public function updateCivilServiceEligibility($id, $data);

    public function createCostCenter($data);
    public function getCostCenters();
    public function updateCostCenter($id, $data);

    public function createCostCenterGroup($data);
    public function getCostCenterGroups();
    public function updateCostCenterGroup($id, $data);

    public function createEmployeeStatus($data);
    public function getEmployeeStatuses();
    public function updateEmployeeStatus($id, $data);

    public function createNonPayrollBenefit($data);
    public function getNonPayrollBenefits();
    public function updateNonPayrollBenefit($id, $data);

    public function createMedicalExamType($data);
    public function getMedicalExamTypes();
    public function updateMedicalExamType($id, $data);

    public function createMedicalConditionType($data);
    public function getMedicalConditionTypes();
    public function updateMedicalConditionType($id, $data);

    public function createPosition($data);
    public function getPositions();
    public function updatePosition($id, $data);
}
