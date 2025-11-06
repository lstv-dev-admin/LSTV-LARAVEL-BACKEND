<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\RecruitmentInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class RecruitmentService
{
    protected $repository;

    public function __construct(RecruitmentInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfJobVacancyStatus($data)
    {
        try {
            $res = $this->repository->createMfJobVacancyStatus($data);
            return QueryResultHelper::successCreate('job vacancy status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfJobVacancyStatuses($filters)
    {
        return QueryResultHelper::successGet('Job vacancy status', $this->repository->getMfJobVacancyStatuses($filters));
    }

    public function updateMfgetMfJobVacancyStatus($id, $data)
    {
        try {
            $res = $this->repository->updateMfJobVacancyStatus($id, $data);
            return QueryResultHelper::successUpdate('Job vacancy status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfJobVacancyStatus($id)
    {
        $this->repository->deleteMfJobVacancyStatus($id);
        return QueryResultHelper::successDelete('Job vacancy status');
    }

    public function createMfOtherQualification($data)
    {
        try {
            $res = $this->repository->createMfOtherQualification($data);
            return QueryResultHelper::successCreate('other qualification', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfOtherQualifications($filters)
    {
        return QueryResultHelper::successGet('Other qualification', $this->repository->getMfOtherQualifications($filters));
    }

    public function updateMfOtherQualification($id, $data)
    {
        try {
            $res = $this->repository->updateMfOtherQualification($id, $data);
            return QueryResultHelper::successUpdate('Other qualification', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfOtherQualification($id)
    {
        $this->repository->deleteMfOtherQualification($id);
        return QueryResultHelper::successDelete('Other qualification');
    }

    public function createMfRecruitmentReason($data)
    {
        try {
            $res = $this->repository->createMfRecruitmentReason($data);
            return QueryResultHelper::successCreate('recruitment reason', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfRecruitmentReasons($filters)
    {
        return QueryResultHelper::successGet('Recruitment reason', $this->repository->getMfRecruitmentReasons($filters));
    }

    public function updateMfRecruitmentReason($id, $data)
    {
        try {
            $res = $this->repository->updateMfRecruitmentReason($id, $data);
            return QueryResultHelper::successUpdate('Recruitment reason', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfRecruitmentReason($id)
    {
        $this->repository->deleteMfRecruitmentReason($id);
        return QueryResultHelper::successDelete('Recruitment reason');
    }

    public function createMfSourceChannel($data)
    {
        try {
            $res = $this->repository->createMfSourceChannel($data);
            return QueryResultHelper::successCreate('source channel', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfSourceChannels($filters)
    {
        return QueryResultHelper::successGet('Source channel', $this->repository->getMfSourceChannels($filters));
    }

    public function updateMfSourceChannel($id, $data)
    {
        try {
            $res = $this->repository->updateMfSourceChannel($id, $data);
            return QueryResultHelper::successUpdate('Source channel', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfSourceChannel($id)
    {
        $this->repository->deleteMfSourceChannel($id);
        return QueryResultHelper::successDelete('Source channel');
    }
}