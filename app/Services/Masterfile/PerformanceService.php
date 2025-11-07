<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\PerformanceInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class PerformanceService
{
    protected $repository;

    public function __construct(PerformanceInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfEvaluationLevel($data) {
        try {
            $res = $this->repository->createMfEvaluationLevel($data);
            return QueryResultHelper::successCreate('evaluation level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfEvaluationLevels($filters) {
        return QueryResultHelper::successGet('Evaluation level', $this->repository->getMfEvaluationLevels($filters));
    }

    public function updateMfEvaluationLevel($id, $data) {
        try {
            $res = $this->repository->updateMfEvaluationLevel($id, $data);
            return QueryResultHelper::successUpdate('Evaluation level', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfEvaluationLevel($id) {
        $this->repository->deleteMfEvaluationLevel($id);
        return QueryResultHelper::successDelete('Evaluation level');
    }

    public function createMfFactor($data) {
        try {
            $res = $this->repository->createMfFactor($data);
            return QueryResultHelper::successCreate('factor', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfFactors($filters) {
        return QueryResultHelper::successGet('Factor', $this->repository->getMfFactors($filters));
    }

    public function updateMfFactor($id, $data) {
        try {
            $res = $this->repository->updateMfFactor($id, $data);
            return QueryResultHelper::successUpdate('Factor', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfFactor($id) {
        $this->repository->deleteMfFactor($id);
        return QueryResultHelper::successDelete('Factor');
    }
}