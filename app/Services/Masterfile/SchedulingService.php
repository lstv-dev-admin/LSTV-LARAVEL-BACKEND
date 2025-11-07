<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\SchedulingInterface;

use App\Helpers\QueryResultHelper;
use App\Helpers\CustomValidationMessageHelper;
    
use Exception;

class SchedulingService
{
    protected $repository;

    public function __construct(SchedulingInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfEventType($data) {
        try {
            $res = $this->repository->createMfEventType($data);
            return QueryResultHelper::successCreate('event type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfEventTypes($filters) {
        return QueryResultHelper::successGet('Event type', $this->repository->getMfEventTypes($filters));
    }

    public function updateMfEventType($id, $data) {
        try {
            $res = $this->repository->updateMfEventType($id, $data);
            return QueryResultHelper::successUpdate('Event type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfEventType($id) {
        $this->repository->deleteMfEventType($id);
        return QueryResultHelper::successDelete('Event type');
    }

    public function importMfEventType(array $data) {
        $created = [];
        $hasDuplicates = false;

        foreach ($data as $item) {
            if ($this->repository->isEventTypeDescExist($item['event_type_desc'])) {
                $hasDuplicates = true;
                continue;
            }

            $created[] = $this->repository->createMfEventType($item);
        }

        return CustomValidationMessageHelper::importMessage($created, $hasDuplicates, 'event type');
    }
}