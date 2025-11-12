<?php

namespace App\Services\Employee201;

use App\Interfaces\Employee201\SetupInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class SetupService
{
    protected $repository;

    public function __construct(SetupInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createSetupOnboardingCategory($data)
    {
        try {
            $res = $this->repository->createSetupOnboardingCategory($data);
            return QueryResultHelper::successCreate('setup onboarding category', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function updateSetupOnboardingCategory($id, $data)
    {
        try {
            $res = $this->repository->updateSetupOnboardingCategory($id, $data);
            return QueryResultHelper::successUpdate('setup onboarding category', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    
    public function deleteSetupOnboardingCategory($id)
    {
        $this->repository->deleteSetupOnboardingCategory($id);
        return QueryResultHelper::successDelete('setup onboarding category');
    }

    public function createSetupOnboardingCategoryTask($data)
    {
        try {
            $res = $this->repository->createSetupOnboardingCategoryTask($data);
            return QueryResultHelper::successCreate('setup onboarding category task', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function updateSetupOnboardingCategoryTask($id, $data)
    {
        try {
            $res = $this->repository->updateSetupOnboardingCategoryTask($id, $data);
            return QueryResultHelper::successUpdate('setup onboarding category task', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function deleteSetupOnboardingCategoryTask($id)
    {
        $this->repository->deleteSetupOnboardingCategoryTask($id);
        return QueryResultHelper::successDelete('setup onboarding category task');
    }
}