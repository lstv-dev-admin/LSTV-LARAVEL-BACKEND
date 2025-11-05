<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\EmployeesInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Employees\{
    MfBranch,
    MfCivilServiceEligibility,
    MfCostCenter,
    MfCostCenterGroup,
    MfDepartment,
    MfDivision,
    MfEmployeeStatus,
    MfEmploymentStatus,
    MfExperienceLevel,
    MfIncidentType,
    MfJobRankLevel,
    MfMedicalConditionType,
    MfMedicalExamType,
    MfNonPayrollBenefit,
    MfProficiencyLevel,
    MfSubDepartment,
};

class EmployeesRepository implements EmployeesInterface
{
    public function createMfBranch($data) {
        $data['branch_id'] = MasterfileRecordIdHelper::getNextSeries(MfBranch::getMasterfileCode());
        return MfBranch::create($data);
    }

    public function getMfBranches($filters) {
        $searchableColumns = ['branch_desc'];
        return PaginationHelper::render(MfBranch::class, $filters, $searchableColumns);
    }

    public function updateMfBranch($id, $data) {
        MfBranch::findOrFail($id)->update($data);
        return MfBranch::findOrFail($id);
    }

    public function deleteMfBranch($id)
    {
        return MfBranch::findOrFail($id)->delete();
    }

    public function createMfCivilServiceEligibility($data) {
        $data['civil_service_eligibility_id'] = MasterfileRecordIdHelper::getNextSeries(MfCivilServiceEligibility::getMasterfileCode());
        return MfCivilServiceEligibility::create($data);
    }

    public function getMfCivilServiceEligibilities($filters) {
        $searchableColumns = ['civil_service_eligibility_desc'];
        return PaginationHelper::render(MfCivilServiceEligibility::class, $filters, $searchableColumns);
    }

    public function updateMfCivilServiceEligibility($id, $data) {
        MfCivilServiceEligibility::findOrFail($id)->update($data);
        return MfCivilServiceEligibility::findOrFail($id);
    }

    public function deleteMfCivilServiceEligibility($id) {
        return MfCivilServiceEligibility::findOrFail($id)->delete();
    }

    public function createMfCostCenter($data) {
        $data['cost_center_id'] = MasterfileRecordIdHelper::getNextSeries(MfCostCenter::getMasterfileCode());
        return MfCostCenter::create($data);
    }

    public function getMfCostCenters($filters) {
        $searchableColumns = ['cost_center_desc'];
        return PaginationHelper::render(MfCostCenter::class, $filters, $searchableColumns);
    }

    public function updateMfCostCenter($id, $data) {
        MfCostCenter::findOrFail($id)->update($data);
        return MfCostCenter::findOrFail($id);
    }

    public function deleteMfCostCenter($id) {
        return MfCostCenter::findOrFail($id)->delete();
    }
    public function createMfCostCenterGroup($data) {
        $data['cost_center_group_id'] = MasterfileRecordIdHelper::getNextSeries(MfCostCenterGroup::getMasterfileCode());
        return MfCostCenterGroup::create($data);
    }

    public function getMfCostCenterGroups($filters) {
        $searchableColumns = ['cost_center_group_desc'];
        return PaginationHelper::render(MfCostCenterGroup::class, $filters, $searchableColumns);
    }

    public function updateMfCostCenterGroup($id, $data) {
        MfCostCenterGroup::findOrFail($id)->update($data);
        return MfCostCenterGroup::findOrFail($id);
    }

    public function deleteMfCostCenterGroup($id) {
        return MfCostCenterGroup::findOrFail($id)->delete();
    }

    public function createMfDepartment($data) {
        $data['department_id'] = MasterfileRecordIdHelper::getNextSeries(MfDepartment::getMasterfileCode());
        return MfDepartment::create($data);
    }

    public function getMfDepartments($filters) {
        $searchableColumns = ['department_desc'];
        return PaginationHelper::render(MfDepartment::class, $filters, $searchableColumns);
    }

    public function updateMfDepartment($id, $data) {
        MfDepartment::findOrFail($id)->update($data);
        return MfDepartment::findOrFail($id);
    }

    public function deleteMfDepartment($id) {
        return MfDepartment::findOrFail($id)->delete();
    }

    public function createMfDivision($data) {
        $data['division_id'] = MasterfileRecordIdHelper::getNextSeries(MfDivision::getMasterfileCode());
        return MfDivision::create($data);
    }

    public function getMfDivisions($filters) {
        $searchableColumns = ['division_desc'];
        return PaginationHelper::render(MfDivision::class, $filters, $searchableColumns);
    }

    public function updateMfDivision($id, $data) {
        MfDivision::findOrFail($id)->update($data);
        return MfDivision::findOrFail($id);
    }

    public function deleteMfDivision($id) {
        return MfDivision::findOrFail($id)->delete();
    }

    public function createMfEmployeeStatus($data) {
        $data['employee_status_id'] = MasterfileRecordIdHelper::getNextSeries(MfEmployeeStatus::getMasterfileCode());
        return MfEmployeeStatus::create($data);
    }

    public function getMfEmployeeStatuses($filters) {
        $searchableColumns = ['employee_status_desc'];
        return PaginationHelper::render(MfEmployeeStatus::class, $filters, $searchableColumns);
    }

    public function updateMfEmployeeStatus($id, $data) {
        MfEmployeeStatus::findOrFail($id)->update($data);
        return MfEmployeeStatus::findOrFail($id);
    }

    public function deleteMfEmployeeStatus($id) {
        return MfEmployeeStatus::findOrFail($id)->delete();
    }

    public function createMfEmploymentStatus($data) {
        $data['employment_status_id'] = MasterfileRecordIdHelper::getNextSeries(MfEmploymentStatus::getMasterfileCode());
        return MfEmploymentStatus::create($data);
    }

    public function getMfEmploymentStatuses($filters) {
        $searchableColumns = ['employment_status_desc'];
        return PaginationHelper::render(MfEmploymentStatus::class, $filters, $searchableColumns);
    }

    public function updateMfEmploymentStatus($id, $data) {
        MfEmploymentStatus::findOrFail($id)->update($data);
        return MfEmploymentStatus::findOrFail($id);
    }

    public function deleteMfEmploymentStatus($id) {
        return MfEmploymentStatus::findOrFail($id)->delete();
    }

    public function createMfExperienceLevel($data) {
        $data['experience_level_id'] = MasterfileRecordIdHelper::getNextSeries(MfExperienceLevel::getMasterfileCode());
        return MfExperienceLevel::create($data);
    }

    public function getMfExperienceLevels($filters) {
        $searchableColumns = ['experience_level_desc'];
        return PaginationHelper::render(MfExperienceLevel::class, $filters, $searchableColumns);
    }

    public function updateMfExperienceLevel($id, $data) {
        MfExperienceLevel::findOrFail($id)->update($data);
        return MfExperienceLevel::findOrFail($id);
    }

    public function deleteMfExperienceLevel($id) {
        return MfExperienceLevel::findOrFail($id)->delete();
    }

    public function createMfIncidentType($data) {
        $data['incident_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfIncidentType::getMasterfileCode());
        return MfIncidentType::create($data);
    }

    public function getMfIncidentTypes($filters) {
        $searchableColumns = ['incident_type_desc'];
        return PaginationHelper::render(MfIncidentType::class, $filters, $searchableColumns);
    }

    public function updateMfIncidentType($id, $data) {
        MfIncidentType::findOrFail($id)->update($data);
        return MfIncidentType::findOrFail($id);
    }

    public function deleteMfIncidentType($id) {
        return MfIncidentType::findOrFail($id)->delete();
    }

    public function createMfJobRankLevel($data) {
        $data['job_rank_level_id'] = MasterfileRecordIdHelper::getNextSeries(MfJobRankLevel::getMasterfileCode());
        return MfJobRankLevel::create($data);
    }

    public function getMfJobRankLevels($filters) {
        $searchableColumns = ['job_rank_level_desc'];
        return PaginationHelper::render(MfJobRankLevel::class, $filters, $searchableColumns);
    }

    public function updateMfJobRankLevel($id, $data) {
        MfJobRankLevel::findOrFail($id)->update($data);
        return MfJobRankLevel::findOrFail($id);
    }

    public function deleteMfJobRankLevel($id) {
        return MfJobRankLevel::findOrFail($id)->delete();
    }

    public function createMfMedicalConditionType($data) {
        $data['medical_condition_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfMedicalConditionType::getMasterfileCode());
        return MfMedicalConditionType::create($data);
    }

    public function getMfMedicalConditionTypes($filters) {
        $searchableColumns = ['medical_condition_type_desc'];
        return PaginationHelper::render(MfMedicalConditionType::class, $filters, $searchableColumns);
    }

    public function updateMfMedicalConditionType($id, $data) {
        MfMedicalConditionType::findOrFail($id)->update($data);
        return MfMedicalConditionType::findOrFail($id);
    }

    public function deleteMfMedicalConditionType($id) {
        return MfMedicalConditionType::findOrFail($id)->delete();
    }

    public function createMfMedicalExamType($data) {
        $data['medical_exam_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfMedicalExamType::getMasterfileCode());
        return MfMedicalExamType::create($data);
    }

    public function getMfMedicalExamTypes($filters) {
        $searchableColumns = ['medical_exam_type_desc'];
        return PaginationHelper::render(MfMedicalExamType::class, $filters, $searchableColumns);
    }

    public function updateMfMedicalExamType($id, $data) {
        MfMedicalExamType::findOrFail($id)->update($data);
        return MfMedicalExamType::findOrFail($id);
    }

    public function deleteMfMedicalExamType($id) {
        return MfMedicalExamType::findOrFail($id)->delete();
    }

    public function createMfNonPayrollBenefit($data) {
        $data['non_payroll_benefit_id'] = MasterfileRecordIdHelper::getNextSeries(MfNonPayrollBenefit::getMasterfileCode());
        return MfNonPayrollBenefit::create($data);
    }

    public function getMfNonPayrollBenefits($filters) {
        $searchableColumns = ['non_payroll_benefit_desc'];
        return PaginationHelper::render(MfNonPayrollBenefit::class, $filters, $searchableColumns);
    }

    public function updateMfNonPayrollBenefit($id, $data) {
        MfNonPayrollBenefit::findOrFail($id)->update($data);
        return MfNonPayrollBenefit::findOrFail($id);
    }

    public function deleteMfNonPayrollBenefit($id) {    
        return MfNonPayrollBenefit::findOrFail($id)->delete();
    }

    public function createMfProficiencyLevel($data) {
        $data['proficiency_level_id'] = MasterfileRecordIdHelper::getNextSeries(MfProficiencyLevel::getMasterfileCode());
        return MfProficiencyLevel::create($data);
    }

    public function getMfProficiencyLevels($filters) {
        $searchableColumns = ['proficiency_level_desc'];
        return PaginationHelper::render(MfProficiencyLevel::class, $filters, $searchableColumns);
    }

    public function updateMfProficiencyLevel($id, $data) {
        MfProficiencyLevel::findOrFail($id)->update($data);
        return MfProficiencyLevel::findOrFail($id);
    }

    public function deleteMfProficiencyLevel($id) {
        return MfProficiencyLevel::findOrFail($id)->delete();
    }

    public function createMfSubDepartment($data) {
        $data['sub_department_id'] = MasterfileRecordIdHelper::getNextSeries(MfSubDepartment::getMasterfileCode());
        return MfSubDepartment::create($data);
    }
    
    public function getMfSubDepartments($filters) {
        $searchableColumns = ['sub_department_desc'];
        return PaginationHelper::render(MfSubDepartment::class, $filters, $searchableColumns);
    }

    public function updateMfSubDepartment($id, $data) {
        MfSubDepartment::findOrFail($id)->update($data);
        return MfSubDepartment::findOrFail($id);
    }
    
    public function deleteMfSubDepartment($id) {
        return MfSubDepartment::findOrFail($id)->delete();
    }
}
