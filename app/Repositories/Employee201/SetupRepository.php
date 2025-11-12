<?php

namespace App\Repositories\Employee201;

use App\Interfaces\Employee201\SetupInterface;

use App\Helpers\{
    MasterfileRecordIdHelper
};

use App\Models\Employee201\Setup\{
    SetupOnboardingCategory,
    SetupOnboardingCategoryTask
};

class SetupRepository implements SetupInterface
{
    public function createSetupOnboardingCategory($data)
    {
        $data['onboarding_category_id'] = MasterfileRecordIdHelper::getNextSeries(SetupOnboardingCategory::getMasterfileCode());
        return SetupOnboardingCategory::create($data);
    }

    public function updateSetupOnboardingCategory($id, $data)
    {
        SetupOnboardingCategory::findOrFail($id)->update($data);
        return SetupOnboardingCategory::findOrFail($id);
    }

    public function deleteSetupOnboardingCategory($id)
    {
        return SetupOnboardingCategory::findOrFail($id)->delete();
    }

    public function createSetupOnboardingCategoryTask($data)
    {
        $data['onboarding_task_id'] = MasterfileRecordIdHelper::getNextSeries(SetupOnboardingCategoryTask::getMasterfileCode());
        return SetupOnboardingCategoryTask::create($data);
    }

    public function updateSetupOnboardingCategoryTask($id, $data)
    {
        SetupOnboardingCategoryTask::findOrFail($id)->update($data);
        return SetupOnboardingCategoryTask::findOrFail($id);
    }

    public function deleteSetupOnboardingCategoryTask($id)
    {
        return SetupOnboardingCategoryTask::findOrFail($id)->delete();
    }
}