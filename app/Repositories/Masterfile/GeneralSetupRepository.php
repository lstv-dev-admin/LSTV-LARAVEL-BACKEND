<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\GeneralSetupInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\GeneralSetup\{
    MfArea,
    MfAward,
    MfBloodType,
    MfCitizenship,
    MfCity,
    MfCivilStatus,
    MfCountry,
    MfEmploymentType,
    MfLanguage,
    MfLicenseType,
    MfMembershipType,
    MfNationality,
    MfPositionType,
    MfPrefix,
    MfProvince,
    MfRegion,
    MfReligion,
    MfRequirement,
    MfSchool,
    MfSkill,
    MfSuffix,
    MfViolation,
};

class GeneralSetupRepository implements GeneralSetupInterface
{
    public function createMfArea($data)
    {
        $data['area_id'] = MasterfileRecordIdHelper::getNextSeries(MfArea::getMasterfileCode());
        return MfArea::create($data);
    }

    public function getMfAreas($filters)
    {
        $searchableColumns = ['area_desc'];
        return PaginationHelper::render(MfArea::class, $filters, $searchableColumns);
    }

    public function updateMfArea($id, $data)
    {
        MfArea::findOrFail($id)->update($data);
        return MfArea::findOrFail($id);
    }

    public function deleteMfArea($id)
    {
        return MfArea::delete(MfArea::findOrFail($id));
    }

    public function createMfAward($data)
    {
        $data['award_id'] = MasterfileRecordIdHelper::getNextSeries(MfAward::getMasterfileCode());
        return MfAward::create($data);
    }

    public function getMfAwards($filters)
    {
        $searchableColumns = ['award_desc'];
        return PaginationHelper::render(MfAward::class, $filters, $searchableColumns);
    }

    public function updateMfAward($id, $data)
    {
        MfAward::findOrFail($id)->update($data);
        return MfAward::findOrFail($id);
    }

    public function deleteMfAward($id)
    {
        return MfAward::delete(MfAward::findOrFail($id));
    }

    public function createMfBloodType($data)
    {
        $data['blood_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfBloodType::getMasterfileCode());
        return MfBloodType::create($data);
    }

    public function getMfBloodTypes($filters)
    {
        $searchableColumns = ['blood_type_desc'];
        return PaginationHelper::render(MfBloodType::class, $filters, $searchableColumns);
    }

    public function updateMfBloodType($id, $data)
    {
        MfBloodType::findOrFail($id)->update($data);
        return MfBloodType::findOrFail($id);
    }

    public function deleteMfBloodType($id)
    {
        return MfBloodType::delete(MfBloodType::findOrFail($id));
    }

    public function createMfCitizenship($data)
    {
        $data['citizenship_id'] = MasterfileRecordIdHelper::getNextSeries(MfCitizenship::getMasterfileCode());
        return MfCitizenship::create($data);
    }

    public function getMfCitizenships($filters)
    {
        $searchableColumns = ['citizenship_desc'];
        return PaginationHelper::render(MfCitizenship::class, $filters, $searchableColumns);
    }

    public function updateMfCitizenship($id, $data)
    {
        MfCitizenship::findOrFail($id)->update($data);
        return MfCitizenship::findOrFail($id);
    }

    public function deleteMfCitizenship($id)
    {
        return MfCitizenship::delete(MfCitizenship::findOrFail($id));
    }

    public function createMfCity($data)
    {
        $data['city_id'] = MasterfileRecordIdHelper::getNextSeries(MfCity::getMasterfileCode());
        return MfCity::create($data);
    }

    public function getMfCities($filters)
    {
        $searchableColumns = ['city_desc'];
        return PaginationHelper::render(MfCity::class, $filters, $searchableColumns);
    }

    public function updateMfCity($id, $data)
    {
        MfCity::findOrFail($id)->update($data);
        return MfCity::findOrFail($id);
    }

    public function deleteMfCity($id)
    {
        return MfCity::delete(MfCity::findOrFail($id));
    }

    public function createMfCivilStatus($data)
    {
        $data['civil_status_id'] = MasterfileRecordIdHelper::getNextSeries(MfCivilStatus::getMasterfileCode());
        return MfCivilStatus::create($data);
    }

    public function getMfCivilStatuses($filters)
    {
        $searchableColumns = ['civil_status_desc'];
        return PaginationHelper::render(MfCivilStatus::class, $filters, $searchableColumns);
    }

    public function updateMfCivilStatus($id, $data)
    {
        MfCivilStatus::findOrFail($id)->update($data);
        return MfCivilStatus::findOrFail($id);
    }

    public function deleteMfCivilStatus($id)
    {
        return MfCivilStatus::delete(MfCivilStatus::findOrFail($id));
    }

    public function createMfCountry($data) {
        $data['country_id'] = MasterfileRecordIdHelper::getNextSeries(MfCountry::getMasterfileCode());
        return MfCountry::create($data);
    }

    public function getMfCountries($filters) {
        $searchableColumns = ['country_desc'];
        return PaginationHelper::render(MfCountry::class, $filters, $searchableColumns);
    }

    public function updateMfCountry($id, $data) {
        MfCountry::findOrFail($id)->update($data);
        return MfCountry::findOrFail($id);
    }

    public function deleteMfCountry($id)
    {
        return MfCountry::delete(MfCountry::findOrFail($id));
    }

    public function createMfEmploymentType($data) {
        $data['employment_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfEmploymentType::getMasterfileCode());
        return MfEmploymentType::create($data);
    }

    public function getMfEmploymentTypes($filters) {
        $searchableColumns = ['employment_type_desc'];
        return PaginationHelper::render(MfEmploymentType::class, $filters, $searchableColumns);
    }

    public function updateMfEmploymentType($id, $data) {
        MfEmploymentType::findOrFail($id)->update($data);
        return MfEmploymentType::findOrFail($id);
    }

    public function deleteEmploymentType($id)
    {
        return MfEmploymentType::delete(MfEmploymentType::findOrFail($id));
    }

    public function createMfLanguage($data) {
        $data['language_id'] = MasterfileRecordIdHelper::getNextSeries(MfLanguage::getMasterfileCode());
        return MfLanguage::create($data);
    }

    public function getMfLanguages($filters) {
        $searchableColumns = ['language_desc'];
        return PaginationHelper::render(MfLanguage::class, $filters, $searchableColumns);
    }

    public function updateMfLanguage($id, $data) {
        MfLanguage::findOrFail($id)->update($data);
        return MfLanguage::findOrFail($id);
    }

    public function deleteMfLanguage($id)
    {
        return MfLanguage::delete(MfLanguage::findOrFail($id));
    }

    public function createMfLicenseType($data) {
        $data['license_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfLicenseType::getMasterfileCode());
        return MfLicenseType::create($data);
    }

    public function getMfLicenseTypes($filters) {
        $searchableColumns = ['license_type_desc'];
        return PaginationHelper::render(MfLicenseType::class, $filters, $searchableColumns);
    }

    public function updateMfLicenseType($id, $data) {
        MfLicenseType::findOrFail($id)->update($data);
        return MfLicenseType::findOrFail($id);
    }

    public function deleteMfLicenseTaype($id)
    {
        return MfLicenseType::delete(MfLicenseType::findOrFail($id));
    }

    public function createMfMembershipType($data) {
        $data['membership_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfMembershipType::getMasterfileCode());
        return MfMembershipType::create($data);
    }

    public function getMfMembershipTypes($filters) {
        $searchableColumns = ['membership_type_desc'];
        return PaginationHelper::render(MfMembershipType::class, $filters, $searchableColumns);
    }

    public function updateMfMembershipType($id, $data) {
        MfMembershipType::findOrFail($id)->update($data);
        return MfMembershipType::findOrFail($id);
    }

    public function deleteMfMembershipType($id)
    {
        return MfMembershipType::delete(MfMembershipType::findOrFail($id));
    }

    public function createMfNationality($data) {
        $data['nationality_id'] = MasterfileRecordIdHelper::getNextSeries(MfNationality::getMasterfileCode());
        return MfNationality::create($data);
    }

    public function getMfNationalities($filters) {
        $searchableColumns = ['nationality_desc'];
        return PaginationHelper::render(MfNationality::class, $filters, $searchableColumns);
    }

    public function updateMfNationality($id, $data) {
        MfNationality::findOrFail($id)->update($data);
        return MfNationality::findOrFail($id);
    }

    public function deleteMfNationality($id)
    {
        return MfNationality::delete(MfNationality::findOrFail($id));
    }

    public function createMfPositionType($data) {
        $data['position_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfPositionType::getMasterfileCode());
        return MfPositionType::create($data);
    }

    public function getMfPositionTypes($filters) {
        $searchableColumns = ['position_type_desc'];
        return PaginationHelper::render(MfPositionType::class, $filters, $searchableColumns);
    }

    public function updateMfPositionType($id, $data) {
        MfPositionType::findOrFail($id)->update($data);
        return MfPositionType::findOrFail($id);
    }

    public function deleteMfPositionType($id)
    {
        return MfPositionType::delete(MfPositionType::findOrFail($id));
    }

    public function createMfPrefix($data) {
        $data['prefix_id'] = MasterfileRecordIdHelper::getNextSeries(MfPrefix::getMasterfileCode());
        return MfPrefix::create($data);
    }

    public function getMfPrefixes($filters) {
        $searchableColumns = ['prefix_desc'];
        return PaginationHelper::render(MfPrefix::class, $filters, $searchableColumns);
    }

    public function updateMfPrefix($id, $data) {
        MfPrefix::findOrFail($id)->update($data);
        return MfPrefix::findOrFail($id);
    }

    public function deleteMfPrefix($id)
    {
        return MfPrefix::delete(MfPrefix::findOrFail($id));
    }

    public function createMfProvince($data) {
        $data['province_id'] = MasterfileRecordIdHelper::getNextSeries(MfProvince::getMasterfileCode());
        return MfProvince::create($data);
    }

    public function getMfProvinces($filters) {
        $searchableColumns = ['province_desc'];
        return PaginationHelper::render(MfProvince::class, $filters, $searchableColumns);
    }

    public function updateMfProvince($id, $data) {
        MfProvince::findOrFail($id)->update($data);
        return MfProvince::findOrFail($id);
    }

    public function deleteMfProvince($id)
    {
        return MfProvince::delete(MfProvince::findOrFail($id));
    }

    public function createMfRegion($data) {
        $data['region_id'] = MasterfileRecordIdHelper::getNextSeries(MfRegion::getMasterfileCode());
        return MfRegion::create($data);
    }

    public function getMfRegions($filters) {
        $searchableColumns = ['region_desc'];
        return PaginationHelper::render(MfRegion::class, $filters, $searchableColumns);
    }

    public function updateMfRegion($id, $data) {
        MfRegion::findOrFail($id)->update($data);
        return MfRegion::findOrFail($id);
    }

    public function deleteMfRegion($id)
    {
        return MfRegion::delete(MfRegion::findOrFail($id));
    }

    public function createMfReligion($data) {
        $data['religion_id'] = MasterfileRecordIdHelper::getNextSeries(MfReligion::getMasterfileCode());
        return MfReligion::create($data);
    }

    public function getMfReligions($filters) {
        $searchableColumns = ['religion_desc'];
        return PaginationHelper::render(MfReligion::class, $filters, $searchableColumns);
    }

    public function updateMfReligion($id, $data) {
        MfReligion::findOrFail($id)->update($data);
        return MfReligion::findOrFail($id);
    }

    public function deleteMfReligion($id)
    {
        return MfReligion::delete(MfReligion::findOrFail($id));
    }

    public function createMfRequirement($data) {
        $data['requirement_id'] = MasterfileRecordIdHelper::getNextSeries(MfRequirement::getMasterfileCode());
        return MfRequirement::create($data);
    }

    public function getMfRequirements($filters) {
        $searchableColumns = ['requirement_desc'];
        return PaginationHelper::render(MfRequirement::class, $filters, $searchableColumns);
    }

    public function updateMfRequirement($id, $data) {
        MfRequirement::findOrFail($id)->update($data);
        return MfRequirement::findOrFail($id);
    }

    public function deleteMfRequirement($id)
    {
        return MfRequirement::delete(MfRequirement::findOrFail($id));
    }

    public function createMfSchool($data) {
        $data['school_id'] = MasterfileRecordIdHelper::getNextSeries(MfSchool::getMasterfileCode());
        return MfSchool::create($data);
    }

    public function getMfSchools($filters) {
        $searchableColumns = ['school_desc'];
        return PaginationHelper::render(MfSchool::class, $filters, $searchableColumns);
    }

    public function updateMfSchool($id, $data) {
        MfSchool::findOrFail($id)->update($data);
        return MfSchool::findOrFail($id);
    }

    public function deleteMfSchool($id)
    {
        return MfSchool::delete(MfSchool::findOrFail($id));
    }

    public function createMfSkill($data) {
        $data['skill_id'] = MasterfileRecordIdHelper::getNextSeries(MfSkill::getMasterfileCode());
        return MfSkill::create($data);
    }

    public function getMfSkills($filters) {
        $searchableColumns = ['skill_desc'];
        return PaginationHelper::render(MfSkill::class, $filters, $searchableColumns);
    }

    public function updateMfSkill($id, $data) {
        MfSkill::findOrFail($id)->update($data);
        return MfSkill::findOrFail($id);
    }

    public function deleteMfSkill($id)
    {
        return MfSkill::delete(MfSkill::findOrFail($id));
    }

    public function createMfSuffix($data) {
        $data['suffix_id'] = MasterfileRecordIdHelper::getNextSeries(MfSuffix::getMasterfileCode());
        return MfSuffix::create($data);
    }

    public function getMfSuffixes($filters) {
        $searchableColumns = ['suffix_desc'];
        return PaginationHelper::render(MfSuffix::class, $filters, $searchableColumns);
    }

    public function updateMfSuffix($id, $data) {
        MfSuffix::findOrFail($id)->update($data);
        return MfSuffix::findOrFail($id);
    }

    public function deleteMfSuffix($id)
    {
        return MfSuffix::delete(MfSuffix::findOrFail($id));
    }

    public function createMfViolation($data) {
        $data['violation_id'] = MasterfileRecordIdHelper::getNextSeries(MfViolation::getMasterfileCode());
        return MfViolation::create($data);
    }

    public function getMfViolations($filters) {
        $searchableColumns = ['violation_desc'];
        return PaginationHelper::render(MfViolation::class, $filters, $searchableColumns);
    }

    public function updateMfViolation($id, $data) {
        MfViolation::findOrFail($id)->update($data);
        return MfViolation::findOrFail($id);
    }

    public function deleteMfViolation($id)
    {
        return MfViolation::delete(MfViolation::findOrFail($id));
    }
}
