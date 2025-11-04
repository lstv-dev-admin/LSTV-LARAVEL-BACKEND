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
            $data = $this->repository->createUser($data);
            return QueryResultHelper::successCreate('user', $data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getUsers($filters)
    {
        try {
            $data = $this->repository->getUsers($filters);
            return QueryResultHelper::successGet('Users', $data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateUser($id, $data)
    {
        try {
            $updatedData = $this->repository->updateUser($id, $data);
            return QueryResultHelper::successUpdate('user', $updatedData);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getUserTypes() {
        try {
            $data = $this->repository->getUserTypes();
            return QueryResultHelper::successGet('User types', $data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getStatuses() {
        try {
            $data = $this->repository->getStatuses();
            return QueryResultHelper::successGet('Statuses', $data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
}