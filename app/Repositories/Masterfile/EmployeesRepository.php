<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\EmployeesInterface;

use App\Models\Masterfile\Employees\{
    Branch,
    CivilServiceEligibility,
    CostCenter,
    CostCenterGroup,
    Department,
    Division,
    EmployeeStatus,
    EmploymentStatus,
    ExperienceLevel,
    IncidentType,
    JobRankLevel,
    MedicalConditionType,
    MedicalExamType,
    NonPayrollBenefit,
    Position,
    ProficiencyLevel,
    SeparationReason,
    SubDepartment
};

class EmployeesRepository implements EmployeesInterface
{
    public function createDepartment($data)
    {
        return Department::create($data);
    }

    public function getDepartments()
    {
        return Department::all();
    }

    public function updateDepartment($id, $data)
    {
        Department::findOrFail($id)->update($data);
    }

    public function createSubDepartment($data)
    {
        return SubDepartment::create($data);
    }

    public function getSubDepartments()
    {
        return SubDepartment::all();
    }

    public function updateSubDepartment($id, $data)
    {
        SubDepartment::findOrFail($id)->update($data);
    }

    public function createDivision($data)
    {
        return Division::create($data);
    }

    public function getDivisions()
    {
        return Division::all();
    }

    public function updateDivision($id, $data)
    {
        Division::findOrFail($id)->update($data);
    }

    public function createBranch($data)
    {
        return Branch::create($data);
    }
    
    public function getBranches()
    {
        return Branch::all();
    }

    public function updateBranch($id, $data)
    {
        Branch::findOrFail($id)->update($data);
    }

    public function createEmploymentStatus($data)
    {
        return EmploymentStatus::create($data);
    }

    public function getEmploymentStatuses()
    {
        return EmploymentStatus::all();
    }

    public function updateEmploymentStatus($id, $data)
    {
        EmploymentStatus::findOrFail($id)->update($data);
    }

    public function createJobRankLevel($data)
    {
        return JobRankLevel::create($data);
    }

    public function getJobRankLevels()
    {
        return JobRankLevel::all();
    }

    public function updateJobRankLevel($id, $data)
    {
        JobRankLevel::findOrFail($id)->update($data);
    }

    public function createProficiencyLevel($data)
    {
        return ProficiencyLevel::create($data);
    }

    public function getProficiencyLevels()
    {
        return ProficiencyLevel::all();
    }

    public function updateProficiencyLevel($id, $data)
    {
        ProficiencyLevel::findOrFail($id)->update($data);
    }

    public function createSeparationReason($data)
    {
        return SeparationReason::create($data);
    }

    public function getSeparationReasons()
    {
        return SeparationReason::all();
    }

    public function updateSeparationReason($id, $data)
    {
        SeparationReason::findOrFail($id)->update($data);
    }

    public function createIncidentType($data)
    {
        return IncidentType::create($data);
    }

    public function getIncidentTypes()
    {
        return IncidentType::all();
    }
    
    public function updateIncidentType($id, $data)
    {
        IncidentType::findOrFail($id)->update($data);
    }

    public function createExperienceLevel($data)
    {
        return ExperienceLevel::create($data);
    }

    public function getExperienceLevels()
    {
        return ExperienceLevel::all();
    }

    public function updateExperienceLevel($id, $data)
    {
        ExperienceLevel::findOrFail($id)->update($data);
    }

    public function createCivilServiceEligibility($data)
    {
        return CivilServiceEligibility::create($data);
    }

    public function getCivilServiceEligibilities()
    {
        return CivilServiceEligibility::all();
    }

    public function updateCivilServiceEligibility($id, $data)
    {
        CivilServiceEligibility::findOrFail($id)->update($data);
    }

    public function createCostCenter($data)
    {
        return CostCenter::create($data);
    }

    public function getCostCenters()
    {
        return CostCenter::all();
    }

    public function updateCostCenter($id, $data)
    {
        CostCenter::findOrFail($id)->update($data);
    }

    public function createCostCenterGroup($data)
    {
        return CostCenterGroup::create($data);
    }

    public function getCostCenterGroups()
    {
        return CostCenterGroup::all();
    }

    public function updateCostCenterGroup($id, $data)
    {
        CostCenterGroup::findOrFail($id)->update($data);
    }

    public function createEmployeeStatus($data)
    {
        return EmployeeStatus::create($data);
    }

    public function getEmployeeStatuses()
    {
        return EmployeeStatus::all();
    }

    public function updateEmployeeStatus($id, $data)
    {
        EmployeeStatus::findOrFail($id)->update($data);
    }

    public function createNonPayrollBenefit($data)
    {
        return NonPayrollBenefit::create($data);
    }

    public function getNonPayrollBenefits()
    {
        return NonPayrollBenefit::all();
    }

    public function updateNonPayrollBenefit($id, $data)
    {
        NonPayrollBenefit::findOrFail($id)->update($data);
    }

    public function createMedicalExamType($data)
    {
        return MedicalExamType::create($data);
    }
    
    public function getMedicalExamTypes()
    {
        return MedicalExamType::all();
    }

    public function updateMedicalExamType($id, $data)
    {
        MedicalExamType::findOrFail($id)->update($data);
    }

    public function createMedicalConditionType($data)
    {
        return MedicalConditionType::create($data);
    }

    public function getMedicalConditionTypes()
    {
        return MedicalConditionType::all();
    }

    public function updateMedicalConditionType($id, $data)
    {
        MedicalConditionType::findOrFail($id)->update($data);
    }

    public function createPosition($data)
    {
        return Position::create($data);
    }

    public function getPositions()
    {
        return Position::all();
    }
    
    public function updatePosition($id, $data)
    {
        Position::findOrFail($id)->update($data);
    }
}
