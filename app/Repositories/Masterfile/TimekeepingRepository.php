<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\TimekeepingInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Timekeeping\{
    MfAuthorizationReason
};

class TimekeepingRepository implements TimekeepingInterface
{
    public function createMfAuthorizationReason($data)
    {
        $data['authorization_reason_id'] = MasterfileRecordIdHelper::getNextSeries(MfAuthorizationReason::getMasterfileCode());
        return MfAuthorizationReason::create($data);
    }

    public function getMfAuthorizationReasons($filters)
    {
        $searchableColumns = ['authorization_reason_desc'];
        return PaginationHelper::render(MfAuthorizationReason::class, $filters, $searchableColumns);
    }

    public function updateMfAuthorizationReason($id, $data)
    {
        MfAuthorizationReason::findOrFail($id)->update($data);
        return MfAuthorizationReason::findOrFail($id);
    }

    public function deleteMfAuthorizationReason($id)
    {
        return MfAuthorizationReason::findOrFail($id)->delete();
    }
}