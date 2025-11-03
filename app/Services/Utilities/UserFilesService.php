<?php

namespace App\Services\Utilities;

use App\Interfaces\Utilities\UserFilesInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class UserFilesService
{
    protected $repository;

    public function __construct(UserFilesInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createUser($data)
    {
        try {
            $this->repository->createUser($data);
            return QueryResultHelper::successCreate('user');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getUsers($filters)
    {
        try {
            $data = $this->repository->getUsers($filters);
            return QueryResultHelper::successGet($data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateUser($id, $data)
    {
        try {
            $this->repository->updateUser($id, $data);
            return QueryResultHelper::successUpdate('user');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
}