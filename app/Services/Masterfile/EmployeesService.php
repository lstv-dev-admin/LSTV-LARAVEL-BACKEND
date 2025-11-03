<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\EmployeesInterface;

use Exception;

class EmployeesService
{
    protected $repository;

    public function __construct(EmployeesInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createDepartment($newDepartment)
    {
        try {
            $this->repository->createDepartment($newDepartment);
            return $this->onSuccessCreate('department');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getDepartments()
    {
        return $this->onSuccessGet($this->repository->getDepartments());
    }

    public function updateDepartment($id, $updatedDepartment)
    {
        try {
            $this->repository->updateDepartment($id, $updatedDepartment);
            return  $this->onSuccessUpdate('department');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createSubDepartment($data)
    {
        try {
            $this->repository->createSubDepartment($data);
            return $this->onSuccessCreate('sub department');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    public function getSubDepartments()
    {
        return $this->onSuccessGet($this->repository->getSubDepartments());
    }

    public function updateSubDepartment($id, $data)
    {
        try {
            $this->repository->updateSubDepartment($id, $data);
            return $this->onSuccessUpdate('sub department');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createDivision($data)
    {
        try {
            $this->repository->createDivision($data);
            return $this->onSuccessCreate('division');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getDivisions()
    {
        return $this->onSuccessGet($this->repository->getDivisions());
    }

    public function updateDivision($id, $data)
    {
        try {
            $this->repository->updateDivision($id, $data);
            return $this->onSuccessUpdate('division');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createBranch($data)
    {
        try {
            $this->repository->createBranch($data);
            return $this->onSuccessCreate('branch');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getBranches()
    {
        return $this->onSuccessGet($this->repository->getBranches());
    }

    public function updateBranch($id, $data)
    {
        try {
            $this->repository->updateBranch($id, $data);
            return $this->onSuccessUpdate('branch');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createEmploymentStatus($data)
    {
        try {
            $this->repository->createEmploymentStatus($data);
            return $this->onSuccessCreate('employment status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getEmploymentStatuses()
    {
        return $this->onSuccessGet($this->repository->getEmploymentStatuses());
    }

    public function updateEmploymentStatus($id, $data)
    {
        try {
            $this->repository->updateEmploymentStatus($id, $data);
            return $this->onSuccessUpdate('employment status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createJobRankLevel($data)
    {
        try {
            $this->repository->createJobRankLevel($data);
            return $this->onSuccessCreate('job rank level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getJobRankLevels()
    {
        return $this->onSuccessGet($this->repository->getJobRankLevels());
    }

    public function updateJobRankLevel($id, $data)
    {
        try {
            $this->repository->updateJobRankLevel($id, $data);
            return $this->onSuccessUpdate('job rank level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createProficiencyLevel($data)
    {
        try {
            $this->repository->createProficiencyLevel($data);
            return $this->onSuccessCreate('proficiency level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getProficiencyLevels()
    {
        return $this->onSuccessGet($this->repository->getProficiencyLevels());
    }

    public function updateProficiencyLevel($id, $data)
    {
        try {
            $this->repository->updateProficiencyLevel($id, $data);
            return $this->onSuccessUpdate('proficiency level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createSeparationReason($data)
    {
        try {
            $this->repository->createSeparationReason($data);
            return $this->onSuccessCreate('separation reason');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getSeparationReasons()
    {
        return $this->onSuccessGet($this->repository->getSeparationReasons());
    }

    public function updateSeparationReason($id, $data)
    {
        try {
            $this->repository->updateSeparationReason($id, $data);
            return $this->onSuccessUpdate('separation reason');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createIncidentType($data)
    {
        try {
            $this->repository->createIncidentType($data);
            return $this->onSuccessCreate('incident type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getIncidentTypes()
    {
        return $this->onSuccessGet($this->repository->getIncidentTypes());
    }

    public function updateIncidentType($id, $data)
    {
        try {
            $this->repository->updateIncidentType($id, $data);
            return $this->onSuccessUpdate('incident type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createExperienceLevel($data)
    {
        try {
            $this->repository->createExperienceLevel($data);
            return $this->onSuccessCreate('experience level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getExperienceLevels()
    {
        return $this->onSuccessGet($this->repository->getExperienceLevels());
    }

    public function updateExperienceLevel($id, $data)
    {
        try {
            $this->repository->updateExperienceLevel($id, $data);
            return $this->onSuccessUpdate('experience level');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createCivilServiceEligibility($data)
    {
        try {
            $this->repository->createCivilServiceEligibility($data);
            return $this->onSuccessCreate('civil service eligibility');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getCivilServiceEligibilities()
    {
        return $this->onSuccessGet($this->repository->getCivilServiceEligibilities());
    }

    public function updateCivilServiceEligibility($id, $data)
    {
        try {
            $this->repository->updateCivilServiceEligibility($id, $data);
            return $this->onSuccessUpdate('civil service eligibility');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createCostCenter($data)
    {
        try {
            $this->repository->createCostCenter($data);
            return $this->onSuccessCreate('cost center');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getCostCenters()
    {
        return $this->onSuccessGet($this->repository->getCostCenters());
    }

    public function updateCostCenter($id, $data)
    {
        try {
            $this->repository->updateCostCenter($id, $data);
            return $this->onSuccessUpdate('cost center');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createCostCenterGroup($data)
    {
        try {
            $this->repository->createCostCenterGroup($data);
            return $this->onSuccessCreate('cost center group');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getCostCenterGroups()
    {
        return $this->onSuccessGet($this->repository->getCostCenterGroups());
    }

    public function updateCostCenterGroup($id, $data)
    {
        try {
            $this->repository->updateCostCenterGroup($id, $data);
            return $this->onSuccessUpdate('cost center group');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createEmployeeStatus($data)
    {
        try {
            $this->repository->createEmployeeStatus($data);
            return $this->onSuccessCreate('employee status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getEmployeeStatuses()
    {
        return $this->onSuccessGet($this->repository->getEmployeeStatuses());
    }

    public function updateEmployeeStatus($id, $data)
    {
        try {
            $this->repository->updateEmployeeStatus($id, $data);
            return $this->onSuccessUpdate('employee status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createNonPayrollBenefit($data)
    {
        try {
            $this->repository->createNonPayrollBenefit($data);
            return $this->onSuccessCreate('non payroll benefit');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getNonPayrollBenefits()
    {
        return $this->onSuccessGet($this->repository->getNonPayrollBenefits());
    }

    public function updateNonPayrollBenefit($id, $data)
    {
        try {
            $this->repository->updateNonPayrollBenefit($id, $data);
            return $this->onSuccessUpdate('non payroll benefit');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createMedicalExamType($data)
    {
        try {
            $this->repository->createMedicalExamType($data);
            return $this->onSuccessCreate('medical exam type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getMedicalExamTypes()
    {
        return $this->onSuccessGet($this->repository->getMedicalExamTypes());
    }

    public function updateMedicalExamType($id, $data)
    {
        try {
            $this->repository->updateMedicalExamType($id, $data);
            return $this->onSuccessUpdate('medical exam type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createMedicalConditionType($data)
    {
        try {
            $this->repository->createMedicalConditionType($data);
            return $this->onSuccessCreate('medical condition type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getMedicalConditionTypes()
    {
        return $this->onSuccessGet($this->repository->getMedicalConditionTypes());
    }

    public function updateMedicalConditionType($id, $data)
    {
        try {
            $this->repository->updateMedicalConditionType($id, $data);
            return $this->onSuccessUpdate('medical condition type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createPosition($data)
    {
        try {
            $this->repository->createPosition($data);
            return $this->onSuccessCreate('position');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getPositions()
    {
        return $this->onSuccessGet($this->repository->getPositions());
    }
    
    public function updatePosition($id, $data)
    {
        try {
            $this->repository->updatePosition($id, $data);
            return $this->onSuccessUpdate('position');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    private function onSuccessCreate(string $entity)
    {
        return [
            'status'  => 'success',
            'message' => "New {$entity} added successfully"
        ];
    }

    private function onSuccessGet($data)
    {
        return [
            'status' => 'success',
            'data'   => $data
        ];
    }

    private function onSuccessUpdate(string $entity)
    {
        return [
            'status'  => 'success',
            'message' => "{$entity} updated successfully"
        ];
    }

    private function onError($e)
    {
        return [
            'status'  => 'error',
            'message' => $e->getMessage()
        ];
    }
}
