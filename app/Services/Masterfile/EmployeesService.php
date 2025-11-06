<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\EmployeesInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class EmployeesService
{
    protected $repository;

    public function __construct(EmployeesInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfBranch($data)
    {
        try {
            $res = $this->repository->createMfBranch($data);
            return QueryResultHelper::successCreate('branch', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfBranches($filters)
    {
        return QueryResultHelper::successGet('Area', $this->repository->getMfBranches($filters));
    }

    public function updateMfBranch($id, $data)
    {
        try {
            $res = $this->repository->updateMfBranch($id, $data);
            return QueryResultHelper::successUpdate('Branch', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfBranch($id)
    {
        $this->repository->deleteMfBranch($id);
        return QueryResultHelper::successDelete('Branch');
    }

    public function createMfCivilServiceEligibility($data)
    {
        try {
            $res = $this->repository->createMfCivilServiceEligibility($data);
            return QueryResultHelper::successCreate('civil service eligibility', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfCivilServiceEligibilities($filters)
    {
        return QueryResultHelper::successGet('Civil service eligibility', $this->repository->getMfCivilServiceEligibilities($filters));
    }

    public function updateMfCivilServiceEligibility($id, $data)
    {
        try {
            $res = $this->repository->updateMfCivilServiceEligibility($id, $data);
            return QueryResultHelper::successUpdate('Civil service eligibility', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfCivilServiceEligibility($id)
    {
        $this->repository->deleteMfCivilServiceEligibility($id);
        return QueryResultHelper::successDelete('Civil service eligibility');
    }

    public function createMfCostCenter($data)
    {
        try {
            $res = $this->repository->createMfCostCenter($data);
            return QueryResultHelper::successCreate('cost center', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCostCenters($filters)
    {
        return QueryResultHelper::successGet('Cost center', $this->repository->getMfCostCenters($filters));
    }

    public function updateMfCostCenter($id, $data)
    {
        try {
            $res = $this->repository->updateMfCostCenter($id, $data);
            return QueryResultHelper::successUpdate('Cost center', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfCostCenter($id)
    {
        $this->repository->deleteMfCostCenter($id);
        return QueryResultHelper::successDelete('Cost center');
    }

    public function createMfCostCenterGroup($data)
    {
        try {
            $res = $this->repository->createMfCostCenterGroup($data);
            return QueryResultHelper::successCreate('cost center group', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCostCenterGroups($filters)
    {
        return QueryResultHelper::successGet('Cost center group', $this->repository->getMfCostCenterGroups($filters));
    }

    public function updateMfCostCenterGroup($id, $data)
    {
        try {
            $res = $this->repository->updateMfCostCenterGroup($id, $data);
            return QueryResultHelper::successUpdate('Cost center group', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfCostCenterGroup($id)
    {
        $this->repository->deleteMfCostCenterGroup($id);
        return QueryResultHelper::successDelete('Cost center group');
    }

    public function createMfDepartment($data)
    {
        try {
            $res = $this->repository->createMfDepartment($data);
            return QueryResultHelper::successCreate('department', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfDepartments($filters)
    {
        return QueryResultHelper::successGet('Department', $this->repository->getMfDepartments($filters));
    }

    public function updateMfDepartment($id, $data)
    {
        try {
            $res = $this->repository->updateMfDepartment($id, $data);
            return QueryResultHelper::successUpdate('Department', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfDepartment($id)
    {
        $this->repository->deleteMfDepartment($id);
        return QueryResultHelper::successDelete('Department');
    }

    public function createMfDivision($data)
    {
        try {
            $res = $this->repository->createMfDivision($data);
            return QueryResultHelper::successCreate('division', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfDivisions($filters)
    {
        return QueryResultHelper::successGet('Division', $this->repository->getMfDivisions($filters));
    }

    public function updateMfDivision($id, $data)
    {
        try {
            $res = $this->repository->updateMfDivision($id, $data);
            return QueryResultHelper::successUpdate('Division', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfDivision($id)
    {
        $this->repository->deleteMfDivision($id);
        return QueryResultHelper::successDelete('Division');
    }

    public function createMfEmployeeStatus($data)
    {
        try {
            $res = $this->repository->createMfEmployeeStatus($data);
            return QueryResultHelper::successCreate('employee status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfEmployeeStatuses($filters)
    {
        return QueryResultHelper::successGet('Employee status', $this->repository->getMfEmployeeStatuses($filters));
    }

    public function updateMfEmployeeStatus($id, $data)
    {
        try {
            $res = $this->repository->updateMfEmployeeStatus($id, $data);
            return QueryResultHelper::successUpdate('Employee status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfEmployeeStatus($id)
    {
        $this->repository->deleteMfEmployeeStatus($id);
        return QueryResultHelper::successDelete('Employee status');
    }

    public function createMfEmploymentStatus($data)
    {
        try {
            $res = $this->repository->createMfEmploymentStatus($data);
            return QueryResultHelper::successCreate('employment status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfEmploymentStatuses($filters)
    {
        return QueryResultHelper::successGet('Employment status', $this->repository->getMfEmploymentStatuses($filters));
    }

    public function updateMfEmploymentStatus($id, $data)
    {
        try {
            $res = $this->repository->updateMfEmploymentStatus($id, $data);
            return QueryResultHelper::successUpdate('Employment status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfEmploymentStatus($id)
    {
        $this->repository->deleteMfEmploymentStatus($id);
        return QueryResultHelper::successDelete('Employment status');
    }

    public function createMfExperienceLevel($data)
    {
        try {
            $res = $this->repository->createMfExperienceLevel($data);
            return QueryResultHelper::successCreate('experience level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfExperienceLevels($filters)
    {
        return QueryResultHelper::successGet('Experience level', $this->repository->getMfExperienceLevels($filters));
    }

    public function updateMfExperienceLevel($id, $data)
    {
        try {
            $res = $this->repository->updateMfExperienceLevel($id, $data);
            return QueryResultHelper::successUpdate('Experience level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    public function deleteMfExperienceLevel($id)
    {
        $this->repository->deleteMfExperienceLevel($id);
        return QueryResultHelper::successDelete('Experience level');
    }

    public function createMfIncidentType($data)
    {
        try {
            $res = $this->repository->createMfIncidentType($data);
            return QueryResultHelper::successCreate('incident type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfIncidentTypes($filters)
    {
        return QueryResultHelper::successGet('Incident type', $this->repository->getMfIncidentTypes($filters));
    }

    public function updateMfIncidentType($id, $data)
    {
        try {
            $res = $this->repository->updateMfIncidentType($id, $data);
            return QueryResultHelper::successUpdate('Incident type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfIncidentType($id)
    {
        $this->repository->deleteMfIncidentType($id);
        return QueryResultHelper::successDelete('Incident type');
    }

    public function createMfJobRankLevel($data)
    {
        try {
            $res = $this->repository->createMfJobRankLevel($data);
            return QueryResultHelper::successCreate('job rank level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfJobRankLevels($filters)
    {
        return QueryResultHelper::successGet('Job rank level', $this->repository->getMfJobRankLevels($filters));
    }

    public function updateMfJobRankLevel($id, $data)
    {
        try {
            $res = $this->repository->updateMfJobRankLevel($id, $data);
            return QueryResultHelper::successUpdate('Job rank level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfJobRankLevel($id)
    {
        $this->repository->deleteMfJobRankLevel($id);
        return QueryResultHelper::successDelete('Job rank level');
    }

    public function createMfMedicalConditionType($data)
    {
        try {
            $res = $this->repository->createMfMedicalConditionType($data);
            return QueryResultHelper::successCreate('medical condition type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfMedicalConditionTypes($filters)
    {
        return QueryResultHelper::successGet('Medical condition type', $this->repository->getMfMedicalConditionTypes($filters));
    }

    public function updateMfMedicalConditionType($id, $data)
    {
        try {
            $res = $this->repository->updateMfMedicalConditionType($id, $data);
            return QueryResultHelper::successUpdate('Medical condition type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfMedicalConditionType($id)
    {
        $this->repository->deleteMfMedicalConditionType($id);
        return QueryResultHelper::successDelete('Medical condition type');
    }

    public function createMfMedicalExamType($data)
    {
        try {
            $res = $this->repository->createMfMedicalExamType($data);
            return QueryResultHelper::successCreate('medical exam type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfMedicalExamTypes($filters)
    {
        return QueryResultHelper::successGet('Medical exam type', $this->repository->getMfMedicalExamTypes($filters));
    }

    public function updateMfMedicalExamType($id, $data)
    {
        try {
            $res = $this->repository->updateMfMedicalExamType($id, $data);
            return QueryResultHelper::successUpdate('Medical exam type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfMedicalExamType($id)
    {
        $this->repository->deleteMfMedicalExamType($id);
        return QueryResultHelper::successDelete('Medical exam type');
    }
    
    public function createMfNonPayrollBenefit($data)
    {
        try {
            $res = $this->repository->createMfNonPayrollBenefit($data);
            return QueryResultHelper::successCreate('non payroll benefit', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    
    public function getMfNonPayrollBenefits($filters)
    {
        return QueryResultHelper::successGet('Non payroll benefit', $this->repository->getMfNonPayrollBenefits($filters));
    }

    public function updateMfNonPayrollBenefit($id, $data)
    {
        try {
            $res = $this->repository->updateMfNonPayrollBenefit($id, $data);
            return QueryResultHelper::successUpdate('Non payroll benefit', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfNonPayrollBenefit($id)
    {
        $this->repository->deleteMfNonPayrollBenefit($id);
        return QueryResultHelper::successDelete('Non payroll benefit');
    }
    
    public function createMfProficiencyLevel($data)
    {
        try {
            $res = $this->repository->createMfProficiencyLevel($data);
            return QueryResultHelper::successCreate('proficiency level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfProficiencyLevels($filters)
    {
        return QueryResultHelper::successGet('Proficiency level', $this->repository->getMfProficiencyLevels($filters));
    }

    public function updateMfProficiencyLevel($id, $data)
    {
        try {
            $res = $this->repository->updateMfProficiencyLevel($id, $data);
            return QueryResultHelper::successUpdate('Proficiency level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfProficiencyLevel($id)
    {
        $this->repository->deleteMfProficiencyLevel($id);
        return QueryResultHelper::successDelete('Proficiency level');
    }

    public function createMfSubDepartment($data)
    {
        try {
            $res = $this->repository->createMfSubDepartment($data);
            return QueryResultHelper::successCreate('sub department', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfSubDepartments($filters)
    {
        return QueryResultHelper::successGet('Sub department', $this->repository->getMfSubDepartments($filters));
    }

    public function updateMfSubDepartment($id, $data)
    {
        try {
            $res = $this->repository->updateMfSubDepartment($id, $data);
            return QueryResultHelper::successUpdate('Sub department', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfSubDepartment($id)
    {
        $this->repository->deleteMfSubDepartment($id);
        return QueryResultHelper::successDelete('Sub department');
    }
}
