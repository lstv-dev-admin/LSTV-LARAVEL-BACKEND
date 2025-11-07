<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\TrainingInterface;

use App\Helpers\QueryResultHelper;
use App\Helpers\CustomValidationMessageHelper;
    
use Exception;

class TrainingService
{
    protected $repository;

    public function __construct(TrainingInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfTrainingType($data)
    {
        try {
            $res = $this->repository->createMfTrainingType($data);
            return QueryResultHelper::successCreate('training type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfTrainingTypes($filters)
    {
        return QueryResultHelper::successGet('Training type', $this->repository->getMfTrainingTypes($filters));
    }

    public function updateMfTrainingType($id, $data)
    {
        try {
            $res = $this->repository->updateMfTrainingType($id, $data);
            return QueryResultHelper::successUpdate('Training type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfTrainingType($id)
    {
        $this->repository->deleteMfTrainingType($id);
        return QueryResultHelper::successDelete('Training type');
    }

    public function importMfTrainingType(array $data) {
        $created = [];
        $hasDuplicates = false;

        foreach ($data as $item) {
            if ($this->repository->isTrainingTypeDescExist($item['training_type_desc'])) {
                $hasDuplicates = true;
                continue;
            }   

            $created[] = $this->repository->createMfTrainingType($item);
        }

        return CustomValidationMessageHelper::importMessage($created, $hasDuplicates, 'training type');
    }
}