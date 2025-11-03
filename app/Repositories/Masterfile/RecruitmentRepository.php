<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\RecruitmentInterface;
use App\Models\Masterfile\CompanyDetails\OrganizationalChart;

class RecruitmentRepository implements RecruitmentInterface
{
    public function createOrganizationalChart($data) {
        return OrganizationalChart::create($data);
    }

    public function getOrganizationalCharts() {
        return OrganizationalChart::all();
    }

    public function updateOrganizationalChart($id, $data) {
        OrganizationalChart::findOrFail($id)->update($data);
    }

    public function createRecruitmentReason($data) {
        return \App\Models\Masterfile\Recruitment\RecruitmentReason::create($data);
    }
    public function getRecruitmentReasons() {
        return \App\Models\Masterfile\Recruitment\RecruitmentReason::all();
    }
    public function updateRecruitmentReason($id, $data) {
        \App\Models\Masterfile\Recruitment\RecruitmentReason::findOrFail($id)->update($data);
    }
    public function createJobVacancyStatus($data) {
        return \App\Models\Masterfile\Recruitment\JobVacancyStatus::create($data);
    }
    public function getJobVacancyStatuses() {
        return \App\Models\Masterfile\Recruitment\JobVacancyStatus::all();
    }
    public function updateJobVacancyStatus($id, $data) {
        \App\Models\Masterfile\Recruitment\JobVacancyStatus::findOrFail($id)->update($data);
    }
    public function createOtherQualification($data) {
        return \App\Models\Masterfile\Recruitment\OtherQualification::create($data);
    }
    public function getOtherQualifications() {
        return \App\Models\Masterfile\Recruitment\OtherQualification::all();
    }
    public function updateOtherQualification($id, $data) {
        \App\Models\Masterfile\Recruitment\OtherQualification::findOrFail($id)->update($data);
    }
}