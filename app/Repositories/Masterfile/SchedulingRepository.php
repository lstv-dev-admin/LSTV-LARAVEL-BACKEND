<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\SchedulingInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Scheduling\{
    MfEventType
};

class SchedulingRepository implements SchedulingInterface
{
    public function createMfEventType($data) {
        $data['event_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfEventType::getMasterfileCode());
        return MfEventType::create($data);
    }

    public function getMfEventTypes($filters) {
        $searchableColumns = ['event_type_desc'];
        return PaginationHelper::render(MfEventType::class, $filters, $searchableColumns);
    }

    public function updateMfEventType($id, $data) {
        MfEventType::findOrFail($id)->update($data);
        return MfEventType::findOrFail($id);
    }

    public function deleteMfEventType($id) {
        return MfEventType::findOrFail($id)->delete();
    }

    public function isEventTypeDescExist($desc) {
        return MfEventType::where('event_type_desc', $desc)->exists();
    }
}