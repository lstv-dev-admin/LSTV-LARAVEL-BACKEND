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
    MfPayrollGroup,
    MfLeave,
    MfPosition,
    SeparationReason,
};

use App\Mappers\Generals\PaginationMapper;

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

    public function isBranchDescExist ($desc)
    {
        return MfBranch::where('branch_desc', $desc)->exists();
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

    public function isCivilServiceEligibilityDescExist ($desc)
    {
        return MfCivilServiceEligibility::where('civil_service_eligibility_desc', $desc)->exists();
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

    public function isCostCenterDescExist ($desc)
    {
        return MfCostCenter::where('cost_center_desc', $desc)->exists();
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

    public function isCostCenterGroupDescExist ($desc)
    {
        return MfCostCenterGroup::where('cost_center_group_desc', $desc)->exists();
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

    public function isDepartmentDescExist ($desc)
    {
        return MfDepartment::where('department_desc', $desc)->exists();
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

    public function isDivisionDescExist ($desc)
    {
        return MfDivision::where('division_desc', $desc)->exists();
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

    public function isEmployeeStatusDescExist ($desc)
    {
        return MfEmployeeStatus::where('employee_status_desc', $desc)->exists();
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

    public function isEmploymentStatusDescExist ($desc)
    {
        return MfEmploymentStatus::where('employment_status_desc', $desc)->exists();
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

    public function isExperienceLevelDescExist ($desc)
    {
        return MfExperienceLevel::where('experience_level_desc', $desc)->exists();
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

    public function isIncidentTypeDescExist ($desc)
    {
        return MfIncidentType::where('incident_type_desc', $desc)->exists();
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

    public function isJobRankLevelDescExist ($desc)
    {
        return MfJobRankLevel::where('job_rank_level_desc', $desc)->exists();
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

    public function isMedicalConditionTypeDescExist ($desc)
    {
        return MfMedicalConditionType::where('medical_condition_type_desc', $desc)->exists();
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

    public function isMedicalExamTypeDescExist ($desc)
    {
        return MfMedicalExamType::where('medical_exam_type_desc', $desc)->exists();
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

    public function isNonPayrollBenefitDescExist ($desc)
    {
        return MfNonPayrollBenefit::where('non_payroll_benefit_desc', $desc)->exists();
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

    public function isProficiencyLevelDescExist ($desc)
    {
        return MfProficiencyLevel::where('proficiency_level_desc', $desc)->exists();
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

    public function isSubDepartmentDescExist ($desc)
    {
        return MfSubDepartment::where('sub_department_desc', $desc)->exists();
    }

    public function createMfPayrollGroup($data) {
        $data['payroll_group_id'] = MasterfileRecordIdHelper::getNextSeries(MfPayrollGroup::getMasterfileCode());
        return MfPayrollGroup::create($data);
    }

    public function getMfPayrollGroups($filters) {
        $page = $filters['page'] ?? 1;
        $perPage = $filters['per_page'] ?? 10;
        $sortBy = $filters['sort_by'] ?? 'record_id';
        $sortOrder = $filters['sort_order'] ?? 'asc';
        $search = $filters['search'] ?? '';

        $query = MfPayrollGroup::from('mf_payroll_groups as pg')
            ->leftJoin('mf_banks as b', 'pg.bank_id', '=', 'b.record_id')
            ->leftJoin('mf_currencies as c', 'pg.currency_id', '=', 'c.record_id')
            ->select(
                'pg.record_id',
                'b.bank_desc',
                'c.currency_desc'
            );

        $sortableColumns = [
            'record_id' => 'pg.record_id',
            'bank_desc' => 'b.bank_desc',
            'currency_desc' => 'c.currency_desc',
        ];

        $sortByKey = array_key_exists($sortBy, $sortableColumns) ? $sortBy : 'record_id';
        $sortByColumn = $sortableColumns[$sortByKey];
        $sortOrder = in_array($sortOrder, ['asc', 'desc']) ? $sortOrder : 'asc';

        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('b.bank_desc', 'like', "%$search%")
                ->orWhere('c.currency_desc', 'like', "%$search%");
            });
        }

        $paginated = $query->orderBy($sortByColumn, $sortOrder)
            ->paginate($perPage, ['*'], 'page', $page);

        if ($paginated->isEmpty() && $page > 1) {
            $lastPage = $paginated->lastPage();
            if ($lastPage < $page) {
                $paginated = $query->orderBy($sortByColumn, $sortOrder)
                    ->paginate($perPage, ['*'], 'page', $lastPage);
            }
        }

        return PaginationMapper::mapToResponse($paginated);
    }

    public function updateMfPayrollGroup($id, $data) {
        MfPayrollGroup::findOrFail($id)->update($data);
        return MfPayrollGroup::findOrFail($id);
    }

    public function deleteMfPayrollGroup($id) {
        return MfPayrollGroup::findOrFail($id)->delete();
    }

    public function createMfLeave($data) {
        $data['leave_id'] = MasterfileRecordIdHelper::getNextSeries(MfLeave::getMasterfileCode());
        return MfLeave::create($data);
    }

    public function getMfLeaves($filters) {
        $searchableColumns = ['leave_desc'];
        return PaginationHelper::render(MfLeave::class, $filters, $searchableColumns);
    }

    public function updateMfLeave($id, $data) {
        MfLeave::findOrFail($id)->update($data);
        return MfLeave::findOrFail($id);
    }

    public function deleteMfLeave($id) {
        return MfLeave::findOrFail($id)->delete();
    }

    public function createMfPosition($data) {
        $data['position_id'] = MasterfileRecordIdHelper::getNextSeries(MfPosition::getMasterfileCode());
        return MfPosition::create($data);
    }

    public function getMfPositions($filters) {
        $searchableColumns = ['position_desc'];
        return PaginationHelper::render(MfPosition::class, $filters, $searchableColumns);
    }

    public function updateMfPosition($id, $data) {
        MfPosition::findOrFail($id)->update($data);
        return MfPosition::findOrFail($id);
    }

    public function deleteMfPosition($id) {
        return MfPosition::findOrFail($id)->delete();
    }

    public function createSeparationReason($data) {
        $data['separation_reason_id'] = MasterfileRecordIdHelper::getNextSeries(SeparationReason::getMasterfileCode());
        return SeparationReason::create($data);
    }

    public function getSeparationReasons($filters) {
        $searchableColumns = ['separation_reason_desc'];
        return PaginationHelper::render(SeparationReason::class, $filters, $searchableColumns);
    }

    public function updateSeparationReason($id, $data) {
        SeparationReason::findOrFail($id)->update($data);
        return SeparationReason::findOrFail($id);
    }

    public function deleteSeparationReason($id) {
        return SeparationReason::findOrFail($id)->delete();
    }
}
