<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\TrainingInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Training\{
    MfTrainingType
};

class TrainingRepository implements TrainingInterface
{
    public function createMfTrainingType($data)
    {
        $data['training_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfTrainingType::getMasterfileCode());
        return MfTrainingType::create($data);
    }

    public function getMfTrainingTypes($filters)
    {
        $searchableColumns = ['training_type_desc'];
        return PaginationHelper::render(MfTrainingType::class, $filters, $searchableColumns);
    }

    public function updateMfTrainingType($id, $data) {
        MfTrainingType::findOrFail($id)->update($data);
        return MfTrainingType::findOrFail($id);
    }

    public function deleteMfTrainingType($id) {
        return MfTrainingType::findOrFail($id)->delete();
    }

    public function isTrainingTypeDescExist($desc) {
        return MfTrainingType::where('training_type_desc', $desc)->exists();
    }
}