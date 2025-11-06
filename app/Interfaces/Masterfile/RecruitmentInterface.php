<?php

namespace App\Interfaces\Masterfile;

interface RecruitmentInterface
{
    public function createMfJobVacancyStatus($data);
    public function getMfJobVacancyStatuses($filters);
    public function updateMfJobVacancyStatus($id, $data);
    public function deleteMfJobVacancyStatus($id);

    public function createMfOtherQualification($data);
    public function getMfOtherQualifications($filters);
    public function updateMfOtherQualification($id, $data);
    public function deleteMfOtherQualification($id);

    public function createMfRecruitmentReason($data);
    public function getMfRecruitmentReasons($filters);
    public function updateMfRecruitmentReason($id, $data);
    public function deleteMfRecruitmentReason($id);

    public function createMfSourceChannel($data);
    public function getMfSourceChannels($filters);
    public function updateMfSourceChannel($id, $data);
    public function deleteMfSourceChannel($id);
}