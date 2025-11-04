<?php

namespace App\Interfaces\Masterfile;

interface GeneralSetupInterface
{
    public function createMfArea($data);
    public function getMfAreas($filters);
    public function updateMfArea($id, $data);

    public function createMfAward($data);
    public function getMfAwards($filters);
    public function updateMfAward($id, $data);

    public function createMfBloodType($data);
    public function getMfBloodTypes($filters);
    public function updateMfBloodType($id, $data);

    public function createMfCitizenship($data);
    public function getMfCitizenships($filters);
    public function updateMfCitizenship($id, $data);

    public function createMfCity($data);
    public function getMfCities($filters);
    public function updateMfCity($id, $data);

    public function createMfCivilStatus($data);
    public function getMfCivilStatuses($filters);
    public function updateMfCivilStatus($id, $data);

    public function createMfCountry($data);
    public function getMfCountries($filters);
    public function updateMfCountry($id, $data);

    public function createMfEmploymentType($data);
    public function getMfEmploymentTypes($filters);
    public function updateMfEmploymentType($id, $data);

    public function createMfLanguage($data);
    public function getMfLanguages($filters);
    public function updateMfLanguage($id, $data);

    public function createMfLicenseType($data);
    public function getMfLicenseTypes($filters);
    public function updateMfLicenseType($id, $data);

    public function createMfMembershipType($data);
    public function getMfMembershipTypes($filters);
    public function updateMfMembershipType($id, $data);

    public function createMfNationality($data);
    public function getMfNationalities($filters);
    public function updateMfNationality($id, $data);

    public function createMfPositionType($data);
    public function getMfPositionTypes($filters);
    public function updateMfPositionType($id, $data);

    public function createMfPrefix($data);
    public function getMfPrefixes($filters);
    public function updateMfPrefix($id, $data);

    public function createMfProvince($data);
    public function getMfProvinces($filters);
    public function updateMfProvince($id, $data);

    public function createMfRegion($data);
    public function getMfRegions($filters);
    public function updateMfRegion($id, $data);

    public function createMfReligion($data);
    public function getMfReligions($filters);
    public function updateMfReligion($id, $data);

    public function createMfRequirement($data);
    public function getMfRequirements($filters);
    public function updateMfRequirement($id, $data);

    public function createMfSchool($data);
    public function getMfSchools($filters);
    public function updateMfSchool($id, $data);

    public function createMfSkill($data);
    public function getMfSkills($filters);
    public function updateMfSkill($id, $data);

    public function createMfSuffix($data);
    public function getMfSuffixes($filters);
    public function updateMfSuffix($id, $data);

    public function createMfViolation($data);
    public function getMfViolations($filters);
    public function updateMfViolation($id, $data);
}
