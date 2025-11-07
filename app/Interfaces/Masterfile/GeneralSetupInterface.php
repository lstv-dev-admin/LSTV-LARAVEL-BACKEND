<?php

namespace App\Interfaces\Masterfile;

interface GeneralSetupInterface
{
    public function createMfArea($data);
    public function getMfAreas($filters);
    public function updateMfArea($id, $data);
    public function deleteMfArea($id);
    public function isAreaDescExist($desc);

    public function createMfAward($data);
    public function getMfAwards($filters);
    public function updateMfAward($id, $data);
    public function deleteMfAward($id);
    public function isAwardDescExist($desc);

    public function createMfBloodType($data);
    public function getMfBloodTypes($filters);
    public function updateMfBloodType($id, $data);
    public function deleteMfBloodType($id);
    public function isBloodTypeDescExist($desc);

    public function createMfCitizenship($data);
    public function getMfCitizenships($filters);
    public function updateMfCitizenship($id, $data);
    public function deleteMfCitizenship($id);
    public function isCitizenshipDescExist($desc);

    public function createMfCity($data);
    public function getMfCities($filters);
    public function updateMfCity($id, $data);
    public function deleteMfCity($id);
    public function isCityDescExist($desc);

    public function createMfCivilStatus($data);
    public function getMfCivilStatuses($filters);
    public function updateMfCivilStatus($id, $data);
    public function deleteMfCivilStatus($id);
    public function isCivilStatusDescExist($desc);

    public function createMfCountry($data);
    public function getMfCountries($filters);
    public function updateMfCountry($id, $data);
    public function deleteMfCountry($id);
    public function isCountryDescExist($desc);

    public function createMfEmploymentType($data);
    public function getMfEmploymentTypes($filters);
    public function updateMfEmploymentType($id, $data);
    public function deleteMfEmploymentType($id);
    public function isEmploymentTypeDescExist($desc);

    public function createMfLanguage($data);
    public function getMfLanguages($filters);
    public function updateMfLanguage($id, $data);
    public function deleteMfLanguage($id);
    public function isLanguageDescExist($desc);

    public function createMfLicenseType($data);
    public function getMfLicenseTypes($filters);
    public function updateMfLicenseType($id, $data);
    public function deleteMfLicenseType($id);
    public function isLicenseTypeDescExist($desc);

    public function createMfMembershipType($data);
    public function getMfMembershipTypes($filters);
    public function updateMfMembershipType($id, $data);
    public function deleteMfMembershipType($id);
    public function isMembershipTypeDescExist($desc);

    public function createMfNationality($data);
    public function getMfNationalities($filters);
    public function updateMfNationality($id, $data);
    public function deleteMfNationality($id);
    public function isNationalityDescExist($desc);

    public function createMfPositionType($data);
    public function getMfPositionTypes($filters);
    public function updateMfPositionType($id, $data);
    public function deleteMfPositionType($id);
    public function isPositionTypeDescExist($desc);

    public function createMfPrefix($data);
    public function getMfPrefixes($filters);
    public function updateMfPrefix($id, $data);
    public function deleteMfPrefix($id);
    public function isPrefixDescExist($desc);

    public function createMfProvince($data);
    public function getMfProvinces($filters);
    public function updateMfProvince($id, $data);
    public function deleteMfProvince($id);
    public function isProvinceDescExist($desc);

    public function createMfRegion($data);
    public function getMfRegions($filters);
    public function updateMfRegion($id, $data);
    public function deleteMfRegion($id);
    public function isRegionDescExist($desc);

    public function createMfReligion($data);
    public function getMfReligions($filters);
    public function updateMfReligion($id, $data);
    public function deleteMfReligion($id);
    public function isReligionDescExist($desc);

    public function createMfRequirement($data);
    public function getMfRequirements($filters);
    public function updateMfRequirement($id, $data);
    public function deleteMfRequirement($id);
    public function isRequirementDescExist($desc);

    public function createMfSchool($data);
    public function getMfSchools($filters);
    public function updateMfSchool($id, $data);
    public function deleteMfSchool($id);
    public function isSchoolDescExist($desc);

    public function createMfSkill($data);
    public function getMfSkills($filters);
    public function updateMfSkill($id, $data);
    public function deleteMfSkill($id);
    public function isSkillDescExist($desc);

    public function createMfSuffix($data);
    public function getMfSuffixes($filters);
    public function updateMfSuffix($id, $data);
    public function deleteMfSuffix($id);
    public function isSuffixDescExist($desc);

    public function createMfViolation($data);
    public function getMfViolations($filters);
    public function updateMfViolation($id, $data);
    public function deleteMfViolation($id);
    public function isViolationDescExist($desc);

    public function createMfRegionProvinceCity($data);
    public function getMfRegionProvinceCities($filters);
    public function updateMfRegionProvinceCity($id, $data);
    public function deleteMfRegionProvinceCity($id);
    public function isRegionProvinceCityExist($data);
    public function getMfRegionProvinceCityDropdown();
}
