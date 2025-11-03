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
    public function createArea($data)
    {
        return Area::create($data);
    }

    public function getAreas()
    {
        return Area::all();
    }

    public function updateArea($id, $data)
    {
        Area::findOrFail($id)->update($data);
    }

    public function createBloodType($data)
    {
        return BloodType::create($data);
    }

    public function getBloodTypes()
    {
        return BloodType::all();
    }

    public function updateBloodType($id, $data)
    {
        BloodType::findOrFail($id)->update($data);
    }

    public function createCitizenship($data)
    {
        return Citizenship::create($data);
    }

    public function getCitizenships()
    {
        return Citizenship::all();
    }

    public function updateCitizenship($id, $data)
    {
        Citizenship::findOrFail($id)->update($data);
    }

    public function createCity($data)
    {
        return City::create($data);
    }

    public function getCities()
    {
        return City::all();
    }

    public function updateCity($id, $data)
    {
        City::findOrFail($id)->update($data);
    }

    public function createCivilStatus($data)
    {
        return CivilStatus::create($data);
    }

    public function getCivilStatuses()
    {
        return CivilStatus::all();
    }

    public function updateCivilStatus($id, $data)
    {
        CivilStatus::findOrFail($id)->update($data);
    }

    public function createCountry($data)
    {
        return Country::create($data);
    }

    public function getCountries()
    {
        return Country::all();
    }

    public function updateCountry($id, $data)
    {
        Country::findOrFail($id)->update($data);
    }

    public function createEmploymentType($data)
    {
        return EmploymentType::create($data);
    }

    public function getEmploymentTypes()
    {
        return EmploymentType::all();
    }

    public function updateEmploymentType($id, $data)
    {
        EmploymentType::findOrFail($id)->update($data);
    }

    public function createLanguage($data)
    {
        return Language::create($data);
    }

    public function getLanguages()
    {
        return Language::all();
    }

    public function updateLanguage($id, $data)
    {
        Language::findOrFail($id)->update($data);
    }

    public function createLicenseType($data)
    {
        return LicenseType::create($data);
    }

    public function getLicenseTypes()
    {
        return LicenseType::all();
    }

    public function updateLicenseType($id, $data)
    {
        LicenseType::findOrFail($id)->update($data);
    }

    public function createMembershipType($data)
    {
        return MembershipType::create($data);
    }

    public function getMembershipTypes()
    {
        return MembershipType::all();
    }

    public function updateMembershipType($id, $data)
    {
        MembershipType::findOrFail($id)->update($data);
    }

    public function createNationality($data)
    {
        return Nationality::create($data);
    }

    public function getNationalities()
    {
        return Nationality::all();
    }

    public function updateNationality($id, $data)
    {
        Nationality::findOrFail($id)->update($data);
    }

    public function createPositionType($data)
    {
        return PositionType::create($data);
    }

    public function getPositionTypes()
    {
        return PositionType::all();
    }

    public function updatePositionType($id, $data)
    {
        PositionType::findOrFail($id)->update($data);
    }

    public function createPrefix($data)
    {
        return Prefix::create($data);
    }

    public function getPrefixes()
    {
        return Prefix::all();
    }

    public function updatePrefix($id, $data)
    {
        Prefix::findOrFail($id)->update($data);
    }

    public function createProvince($data)
    {
        return Province::create($data);
    }

    public function getProvinces()
    {
        return Province::all();
    }

    public function updateProvince($id, $data)
    {
        Province::findOrFail($id)->update($data);
    }

    public function createRegion($data)
    {
        return Region::create($data);
    }

    public function getRegions()
    {
        return Region::all();
    }

    public function updateRegion($id, $data)
    {
        Region::findOrFail($id)->update($data);
    }

    public function createRegionProvinceCity($data)
    {
        return RegionProvinceCity::create($data);
    }

    public function getRegionProvinceCities()
    {
        return RegionProvinceCity::all();
    }

    public function updateRegionProvinceCity($id, $data)
    {
        RegionProvinceCity::findOrFail($id)->update($data);
    }

    public function createReligion($data)
    {
        return Religion::create($data);
    }

    public function getReligions()
    {
        return Religion::all();
    }

    public function updateReligion($id, $data)
    {
        Religion::findOrFail($id)->update($data);
    }

    public function createRequirement($data)
    {
        return Requirement::create($data);
    }

    public function getRequirements()
    {
        return Requirement::all();
    }

    public function updateRequirement($id, $data)
    {
        Requirement::findOrFail($id)->update($data);
    }

    public function createSchool($data)
    {
        return School::create($data);
    }

    public function getSchools()
    {
        return School::all();
    }

    public function updateSchool($id, $data)
    {
        School::findOrFail($id)->update($data);
    }

    public function createSkill($data)
    {
        return Skill::create($data);
    }

    public function getSkills()
    {
        return Skill::all();
    }

    public function updateSkill($id, $data)
    {
        Skill::findOrFail($id)->update($data);
    }

    public function createSuffix($data)
    {
        return Suffix::create($data);
    }

    public function getSuffixes()
    {
        return Suffix::all();
    }

    public function updateSuffix($id, $data)
    {
        Suffix::findOrFail($id)->update($data);
    }

    public function createViolation($data)
    {
        return Violation::create($data);
    }

    public function getViolations()
    {
        return Violation::all();
    }

    public function updateViolation($id, $data)
    {
        Violation::findOrFail($id)->update($data);
    }
}
