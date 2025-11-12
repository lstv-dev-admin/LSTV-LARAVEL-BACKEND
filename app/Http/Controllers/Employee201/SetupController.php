<?php

namespace App\Http\Controllers\Employee201;

use App\Http\Controllers\Controller;

use App\Services\Employee201\SetupService;

use App\Http\Requests\Employee201\Setup\{
    CreateSetupOnboardingCategoryRequest,
    UpdateSetupOnboardingCategoryRequest,
    CreateSetupOnboardingCategoryTaskRequest,
    UpdateSetupOnboardingCategoryTaskRequest,
};

use App\Helpers\ResponseHelper;

class SetupController extends Controller
{
    protected $service;

    public function __construct(SetupService $service)
    {
        $this->service = $service;
    }

    public function createSetupOnboardingCategory(CreateSetupOnboardingCategoryRequest $request)
    {
        return ResponseHelper::respond($this->service->createSetupOnboardingCategory($request->validated()));
    }

    public function updateSetupOnboardingCategory(string $id, UpdateSetupOnboardingCategoryRequest $request)
    {
        return ResponseHelper::respond($this->service->updateSetupOnboardingCategory($id, $request->validated()));
    }

    public function deleteSetupOnboardingCategory($id)
    {
        return ResponseHelper::respond($this->service->deleteSetupOnboardingCategory($id));
    }

    public function createSetupOnboardingCategoryTask(CreateSetupOnboardingCategoryTaskRequest $request)
    {
        return ResponseHelper::respond($this->service->createSetupOnboardingCategoryTask($request->validated()));
    }

    public function updateSetupOnboardingCategoryTask(string $id, UpdateSetupOnboardingCategoryTaskRequest $request)
    {
        return ResponseHelper::respond($this->service->updateSetupOnboardingCategoryTask($id, $request->validated()));
    }

    public function deleteSetupOnboardingCategoryTask($id)
    {
        return ResponseHelper::respond($this->service->deleteSetupOnboardingCategoryTask($id));
    }
}