<?php

namespace App\Interfaces\Employee201;

interface SetupInterface
{
    public function createSetupOnboardingCategory($data);
    public function updateSetupOnboardingCategory($id, $data);
    public function deleteSetupOnboardingCategory($id);

    public function createSetupOnboardingCategoryTask($data);
    public function updateSetupOnboardingCategoryTask($id, $data);
    public function deleteSetupOnboardingCategoryTask($id);
}