<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\GeneralSetupInterface;

use App\Models\Masterfile\GeneralSetup\{
    Area,
    BloodType,
    Citizenship,
    City,
    CivilStatus,
    Country,
    EmploymentType,
    Language,
    LicenseType,
    MembershipType,
    Nationality,
    PositionType,
    Prefix,
    Province,
    Region,
    RegionProvinceCity,
    Religion,
    Requirement,
    School,
    Skill,
    Suffix,
    Violation
};

class GeneralSetupRepository implements GeneralSetupInterface
{
    public function createArea($newArea) {
        return Area::create($newArea);
    }

    public function getAreas() {
        return Area::all();
    }

    public function updateArea($id, $updatedArea) {
        $areaToBeUpdated = Area::findOrFail($id);
        $areaToBeUpdated->update($updatedArea);
    }

    public function createBloodType($newBloodType) {
        return BloodType::create($newBloodType);
    }
    
    public function getBloodTypes() {
        return BloodType::all();
    }
    
    public function updateBloodType($id, $updatedBloodType) {
        $bloodTypeToBeUpdated = BloodType::findOrFail($id);
        $bloodTypeToBeUpdated->update($updatedBloodType);
    }
    
    
    public function createCitizenship($newCitizenship) {
        return Citizenship::create($newCitizenship);
    }
    
    public function getCitizenships() {
        return Citizenship::all();
    }
    
    public function updateCitizenship($id, $updatedCitizenship) {
        $citizenshipToBeUpdated = Citizenship::findOrFail($id);
        $citizenshipToBeUpdated->update($updatedCitizenship);
    }
    
    
    public function createCity($newCity) {
        return City::create($newCity);
    }
    
    public function getCities() {
        return City::all();
    }
    
    public function updateCity($id, $updatedCity) {
        $cityToBeUpdated = City::findOrFail($id);
        $cityToBeUpdated->update($updatedCity);
    }
    
    
    public function createCivilStatus($newCivilStatus) {
        return CivilStatus::create($newCivilStatus);
    }
    
    public function getCivilStatuses() {
        return CivilStatus::all();
    }
    
    public function updateCivilStatus($id, $updatedCivilStatus) {
        $civilStatusToBeUpdated = CivilStatus::findOrFail($id);
        $civilStatusToBeUpdated->update($updatedCivilStatus);
    }
    
    
    public function createCountry($newCountry) {
        return Country::create($newCountry);
    }
    
    public function getCountries() {
        return Country::all();
    }
    
    public function updateCountry($id, $updatedCountry) {
        $countryToBeUpdated = Country::findOrFail($id);
        $countryToBeUpdated->update($updatedCountry);
    }
    
    
    public function createEmploymentType($newEmploymentType) {
        return EmploymentType::create($newEmploymentType);
    }
    
    public function getEmploymentTypes() {
        return EmploymentType::all();
    }
    
    public function updateEmploymentType($id, $updatedEmploymentType) {
        $employmentTypeToBeUpdated = EmploymentType::findOrFail($id);
        $employmentTypeToBeUpdated->update($updatedEmploymentType);
    }
    
    
    public function createLanguage($newLanguage) {
        return Language::create($newLanguage);
    }
    
    public function getLanguages() {
        return Language::all();
    }
    
    public function updateLanguage($id, $updatedLanguage) {
        $languageToBeUpdated = Language::findOrFail($id);
        $languageToBeUpdated->update($updatedLanguage);
    }
    
    
    public function createLicenseType($newLicenseType) {
        return LicenseType::create($newLicenseType);
    }
    
    public function getLicenseTypes() {
        return LicenseType::all();
    }
    
    public function updateLicenseType($id, $updatedLicenseType) {
        $licenseTypeToBeUpdated = LicenseType::findOrFail($id);
        $licenseTypeToBeUpdated->update($updatedLicenseType);
    }
    
    
    public function createMembershipType($newMembershipType) {
        return MembershipType::create($newMembershipType);
    }
    
    public function getMembershipTypes() {
        return MembershipType::all();
    }
    
    public function updateMembershipType($id, $updatedMembershipType) {
        $membershipTypeToBeUpdated = MembershipType::findOrFail($id);
        $membershipTypeToBeUpdated->update($updatedMembershipType);
    }
    
    
    public function createNationality($newNationality) {
        return Nationality::create($newNationality);
    }
    
    public function getNationalities() {
        return Nationality::all();
    }
    
    public function updateNationality($id, $updatedNationality) {
        $nationalityToBeUpdated = Nationality::findOrFail($id);
        $nationalityToBeUpdated->update($updatedNationality);
    }
    
    
    public function createPositionType($newPositionType) {
        return PositionType::create($newPositionType);
    }
    
    public function getPositionTypes() {
        return PositionType::all();
    }
    
    public function updatePositionType($id, $updatedPositionType) {
        $positionTypeToBeUpdated = PositionType::findOrFail($id);
        $positionTypeToBeUpdated->update($updatedPositionType);
    }
    
    
    public function createPrefix($newPrefix) {
        return Prefix::create($newPrefix);
    }
    
    public function getPrefixes() {
        return Prefix::all();
    }
    
    public function updatePrefix($id, $updatedPrefix) {
        $prefixToBeUpdated = Prefix::findOrFail($id);
        $prefixToBeUpdated->update($updatedPrefix);
    }
    
    
    public function createProvince($newProvince) {
        return Province::create($newProvince);
    }
    
    public function getProvinces() {
        return Province::all();
    }
    
    public function updateProvince($id, $updatedProvince) {
        $provinceToBeUpdated = Province::findOrFail($id);
        $provinceToBeUpdated->update($updatedProvince);
    }
    
    
    public function createRegion($newRegion) {
        return Region::create($newRegion);
    }
    
    public function getRegions() {
        return Region::all();
    }
    
    public function updateRegion($id, $updatedRegion) {
        $regionToBeUpdated = Region::findOrFail($id);
        $regionToBeUpdated->update($updatedRegion);
    }
    
    
    public function createRegionProvinceCity($newRegionProvinceCity) {
        return RegionProvinceCity::create($newRegionProvinceCity);
    }
    
    public function getRegionProvinceCities() {
        return RegionProvinceCity::all();
    }
    
    public function updateRegionProvinceCity($id, $updatedRegionProvinceCity) {
        $rpcToBeUpdated = RegionProvinceCity::findOrFail($id);
        $rpcToBeUpdated->update($updatedRegionProvinceCity);
    }
    
    
    public function createReligion($newReligion) {
        return Religion::create($newReligion);
    }
    
    public function getReligions() {
        return Religion::all();
    }
    
    public function updateReligion($id, $updatedReligion) {
        $religionToBeUpdated = Religion::findOrFail($id);
        $religionToBeUpdated->update($updatedReligion);
    }
    
    
    public function createRequirement($newRequirement) {
        return Requirement::create($newRequirement);
    }
    
    public function getRequirements() {
        return Requirement::all();
    }
    
    public function updateRequirement($id, $updatedRequirement) {
        $requirementToBeUpdated = Requirement::findOrFail($id);
        $requirementToBeUpdated->update($updatedRequirement);
    }
    
    
    public function createSchool($newSchool) {
        return School::create($newSchool);
    }
    
    public function getSchools() {
        return School::all();
    }
    
    public function updateSchool($id, $updatedSchool) {
        $schoolToBeUpdated = School::findOrFail($id);
        $schoolToBeUpdated->update($updatedSchool);
    }
    
    
    public function createSkill($newSkill) {
        return Skill::create($newSkill);
    }
    
    public function getSkills() {
        return Skill::all();
    }
    
    public function updateSkill($id, $updatedSkill) {
        $skillToBeUpdated = Skill::findOrFail($id);
        $skillToBeUpdated->update($updatedSkill);
    }
    
    
    public function createSuffix($newSuffix) {
        return Suffix::create($newSuffix);
    }
    
    public function getSuffixes() {
        return Suffix::all();
    }
    
    public function updateSuffix($id, $updatedSuffix) {
        $suffixToBeUpdated = Suffix::findOrFail($id);
        $suffixToBeUpdated->update($updatedSuffix);
    }
    
    
    public function createViolation($newViolation) {
        return Violation::create($newViolation);
    }
    
    public function getViolations() {
        return Violation::all();
    }
    
    public function updateViolation($id, $updatedViolation) {
        $violationToBeUpdated = Violation::findOrFail($id);
        $violationToBeUpdated->update($updatedViolation);
    }
}