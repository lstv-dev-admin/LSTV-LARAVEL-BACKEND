<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\PerformanceInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Performance\{
    MfEvaluationLevel,
    MfFactor
};

class PerformanceRepository implements PerformanceInterface
{
    public function createMfEvaluationLevel($data) {
        $data['evaluation_level_id'] = MasterfileRecordIdHelper::getNextSeries(MfEvaluationLevel::getMasterfileCode());
        return MfEvaluationLevel::create($data);
    }

    public function getMfEvaluationLevels($filters) {
        $searchableColumns = ['evaluation_level_desc', 'level'];
        return PaginationHelper::render(MfEvaluationLevel::class, $filters, $searchableColumns);
    }

    public function updateMfEvaluationLevel($id, $data) {
        MfEvaluationLevel::findOrFail($id)->update($data);
        return MfEvaluationLevel::findOrFail($id);
    }
    
    public function deleteMfEvaluationLevel($id) {
        return MfEvaluationLevel::findOrFail($id)->delete();
    }

    public function createMfFactor($data) {
        $data['factor_id'] = MasterfileRecordIdHelper::getNextSeries(MfFactor::getMasterfileCode());
        return MfFactor::create($data);
    }
    
    public function getMfFactors($filters) {
        $searchableColumns = ['factor_desc', 'appraisal_sentence'];
        return PaginationHelper::render(MfFactor::class, $filters, $searchableColumns);
    }

    public function updateMfFactor($id, $data) {
        MfFactor::findOrFail($id)->update($data);
        return MfFactor::findOrFail($id);
    }

    public function deleteMfFactor($id) {
        return MfFactor::findOrFail($id)->delete();
    }
}