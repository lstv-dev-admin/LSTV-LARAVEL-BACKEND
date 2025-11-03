<?php

namespace App\Interfaces\Masterfile;

interface RecruitmentInterface
{
    public function createOrganizationalChart($newArea);
    public function getOrganizationalCharts();
    public function updateOrganizationalChart($id, $newArea);
    public function createRecruitmentReason($data);
    public function getRecruitmentReasons();
    public function updateRecruitmentReason($id, $data);
    public function createJobVacancyStatus($data);
    public function getJobVacancyStatuses();
    public function updateJobVacancyStatus($id, $data);
    public function createOtherQualification($data);
    public function getOtherQualifications();
    public function updateOtherQualification($id, $data);
}