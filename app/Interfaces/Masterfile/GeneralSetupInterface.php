<?php

namespace App\Interfaces\Masterfile;

interface GeneralSetupInterface
{
    public function createArea($newArea);
    public function getAreas();
    public function updateArea($id, $newArea);

    public function createBloodType($data);
    public function getBloodTypes();
    public function updateBloodType($id, $data);

    public function createCitizenship($data);
    public function getCitizenships();
    public function updateCitizenship($id, $data);

    public function createCity($data);
    public function getCities();
    public function updateCity($id, $data);

    public function createCivilStatus($data);
    public function getCivilStatuses();
    public function updateCivilStatus($id, $data);

    public function createCountry($data);
    public function getCountries();
    public function updateCountry($id, $data);

    public function createEmploymentType($data);
    public function getEmploymentTypes();
    public function updateEmploymentType($id, $data);

    public function createLanguage($data);
    public function getLanguages();
    public function updateLanguage($id, $data);

    public function createLicenseType($data);
    public function getLicenseTypes();
    public function updateLicenseType($id, $data);

    public function createMembershipType($data);
    public function getMembershipTypes();
    public function updateMembershipType($id, $data);

    public function createNationality($data);
    public function getNationalities();
    public function updateNationality($id, $data);

    public function createPositionType($data);
    public function getPositionTypes();
    public function updatePositionType($id, $data);

    public function createPrefix($data);
    public function getPrefixes();
    public function updatePrefix($id, $data);

    public function createProvince($data);
    public function getProvinces();
    public function updateProvince($id, $data);

    public function createRegion($data);
    public function getRegions();
    public function updateRegion($id, $data);

    public function createRegionProvinceCity($data);
    public function getRegionProvinceCities();
    public function updateRegionProvinceCity($id, $data);

    public function createReligion($data);
    public function getReligions();
    public function updateReligion($id, $data);

    public function createRequirement($data);
    public function getRequirements();
    public function updateRequirement($id, $data);

    public function createSchool($data);
    public function getSchools();
    public function updateSchool($id, $data);

    public function createSkill($data);
    public function getSkills();
    public function updateSkill($id, $data);

    public function createSuffix($data);
    public function getSuffixes();
    public function updateSuffix($id, $data);

    public function createViolation($data);
    public function getViolations();
    public function updateViolation($id, $data);
}