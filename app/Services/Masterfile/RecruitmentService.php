<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\RecruitmentInterface;

use Exception;

class RecruitmentService
{
    protected $repository;

    public function __construct(RecruitmentInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createOrganizationalChart($data)
    {
        try {
            $this->repository->createOrganizationalChart($data);
            return $this->onSuccessCreate('organizational chart');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    public function getOrganizationalCharts()
    {
        return $this->onSuccessGet($this->repository->getOrganizationalCharts());
    }
    public function updateOrganizationalChart($id, $data)
    {
        try {
            $this->repository->updateOrganizationalChart($id, $data);
            return $this->onSuccessUpdate('organizational chart');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createRecruitmentReason($data)
    {
        try {
            $this->repository->createRecruitmentReason($data);
            return $this->onSuccessCreate('recruitment reason');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    public function getRecruitmentReasons()
    {
        return $this->onSuccessGet($this->repository->getRecruitmentReasons());
    }
    public function updateRecruitmentReason($id, $data)
    {
        try {
            $this->repository->updateRecruitmentReason($id, $data);
            return $this->onSuccessUpdate('recruitment reason');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createJobVacancyStatus($data)
    {
        try {
            $this->repository->createJobVacancyStatus($data);
            return $this->onSuccessCreate('job vacancy status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    public function getJobVacancyStatuses()
    {
        return $this->onSuccessGet($this->repository->getJobVacancyStatuses());
    }
    public function updateJobVacancyStatus($id, $data)
    {
        try {
            $this->repository->updateJobVacancyStatus($id, $data);
            return $this->onSuccessUpdate('job vacancy status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createOtherQualification($data)
    {
        try {
            $this->repository->createOtherQualification($data);
            return $this->onSuccessCreate('other qualification');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    public function getOtherQualifications()
    {
        return $this->onSuccessGet($this->repository->getOtherQualifications());
    }
    public function updateOtherQualification($id, $data)
    {
        try {
            $this->repository->updateOtherQualification($id, $data);
            return $this->onSuccessUpdate('other qualification');
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