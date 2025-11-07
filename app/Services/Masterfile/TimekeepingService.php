<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\TimekeepingInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class TimekeepingService
{
    protected $repository;

    public function __construct(TimekeepingInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfAuthorizationReason($data)
    {
        try {
            $res = $this->repository->createMfAuthorizationReason($data);
            return QueryResultHelper::successCreate('authorization reason', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfAuthorizationReasons($filters)
    {
        return QueryResultHelper::successGet('Authorization reason', $this->repository->getMfAuthorizationReasons($filters));
    }

    public function updateMfAuthorizationReason($id, $data)
    {
        try {
            $res = $this->repository->updateMfAuthorizationReason($id, $data);
            return QueryResultHelper::successUpdate('Authorization reason', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfAuthorizationReason($id)
    {
        $this->repository->deleteMfAuthorizationReason($id);
        return QueryResultHelper::successDelete('Authorization reason');
    }
}