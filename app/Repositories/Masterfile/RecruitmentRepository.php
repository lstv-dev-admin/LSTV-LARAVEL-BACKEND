<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\RecruitmentInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Recruitment\{
    MfJobVacancyStatus,
    MfOtherQualification,
    MfRecruitmentReason,
    MfSourceChannel
};

class RecruitmentRepository implements RecruitmentInterface
{
    public function createMfJobVacancyStatus($data)
    {
        $data['job_vacancy_status_id'] = MasterfileRecordIdHelper::getNextSeries(MfJobVacancyStatus::getMasterfileCode());
        return MfJobVacancyStatus::create($data);
    }

    public function getMfJobVacancyStatuses($filters)
    {
        $searchableColumns = ['job_vacancy_status_desc'];
        return PaginationHelper::render(MfJobVacancyStatus::class, $filters, $searchableColumns);
    }

    public function updateMfJobVacancyStatus($id, $data)
    {
        MfJobVacancyStatus::findOrFail($id)->update($data);
        return MfJobVacancyStatus::findOrFail($id);
    }

    public function deleteMfJobVacancyStatus($id)
    {
        return MfJobVacancyStatus::findOrFail($id)->delete();
    }

    public function createMfOtherQualification($data)
    {
        $data['other_qualification_id'] = MasterfileRecordIdHelper::getNextSeries(MfOtherQualification::getMasterfileCode());
        return MfOtherQualification::create($data);
    }

    public function getMfOtherQualifications($filters)
    {
        $searchableColumns = ['other_qualification_desc'];
        return PaginationHelper::render(MfOtherQualification::class, $filters, $searchableColumns);
    }

    public function updateMfOtherQualification($id, $data)
    {
        MfOtherQualification::findOrFail($id)->update($data);
        return MfOtherQualification::findOrFail($id);
    }

    public function deleteMfOtherQualification($id)
    {
        return MfOtherQualification::findOrFail($id)->delete();
    }

    public function createMfRecruitmentReason($data)
    {
        $data['recruitment_reason_id'] = MasterfileRecordIdHelper::getNextSeries(MfRecruitmentReason::getMasterfileCode());
        return MfRecruitmentReason::create($data);
    }

    public function getMfRecruitmentReasons($filters)
    {
        $searchableColumns = ['recruitment_reason_desc'];
        return PaginationHelper::render(MfRecruitmentReason::class, $filters, $searchableColumns);
    }

    public function updateMfRecruitmentReason($id, $data)
    {
        MfRecruitmentReason::findOrFail($id)->update($data);
        return MfRecruitmentReason::findOrFail($id);
    }

    public function deleteMfRecruitmentReason($id)
    {
        return MfRecruitmentReason::findOrFail($id)->delete();
    }

    public function createMfSourceChannel($data)
    {
        $data['source_channel_id'] = MasterfileRecordIdHelper::getNextSeries(MfSourceChannel::getMasterfileCode());
        return MfSourceChannel::create($data);
    }

    public function getMfSourceChannels($filters)
    {
        $searchableColumns = ['source_channel_desc'];
        return PaginationHelper::render(MfSourceChannel::class, $filters, $searchableColumns);
    }

    public function updateMfSourceChannel($id, $data)
    {
        MfSourceChannel::findOrFail($id)->update($data);
        return MfSourceChannel::findOrFail($id);
    }

    public function deleteMfSourceChannel($id)
    {
        return MfSourceChannel::findOrFail($id)->delete();
    }
}