<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\GeneralSetupInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class GeneralSetupService
{
    protected $repository;

    public function __construct(GeneralSetupInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createArea($newArea)
    {
        try {
            $this->repository->createArea($newArea);
            return QueryResultHelper::successCreate('area');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getAreas()
    {
        return QueryResultHelper::successGet($this->repository->getAreas());
    }

    public function updateArea($id, $updatedArea)
    {
        try {
            $this->repository->updateArea($id, $updatedArea);
            return QueryResultHelper::successUpdate('area');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createBloodType($newBloodType)
    {
        try {
            $this->repository->createBloodType($newBloodType);
            return QueryResultHelper::successCreate('blood type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getBloodTypes()
    {
        return QueryResultHelper::successGet($this->repository->getBloodTypes());
    }

    public function updateBloodType($id, $updatedBloodType)
    {
        try {
            $this->repository->updateBloodType($id, $updatedBloodType);
            return QueryResultHelper::successUpdate('blood type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCitizenship($newCitizenship)
    {
        try {
            $this->repository->createCitizenship($newCitizenship);
            return QueryResultHelper::successCreate('citizenship');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCitizenships()
    {
        return QueryResultHelper::successGet($this->repository->getCitizenships());
    }

    public function updateCitizenship($id, $updatedCitizenship)
    {
        try {
            $this->repository->updateCitizenship($id, $updatedCitizenship);
            return QueryResultHelper::successUpdate('citizenship');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCity($newCity)
    {
        try {
            $this->repository->createCity($newCity);
            return QueryResultHelper::successCreate('city');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCities()
    {
        return QueryResultHelper::successGet($this->repository->getCities());
    }

    public function updateCity($id, $updatedCity)
    {
        try {
            $this->repository->updateCity($id, $updatedCity);
            return QueryResultHelper::successUpdate('city');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCivilStatus($newCivilStatus)
    {
        try {
            $this->repository->createCivilStatus($newCivilStatus);
            return QueryResultHelper::successCreate('civil status');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCivilStatuses()
    {
        return QueryResultHelper::successGet($this->repository->getCivilStatuses());
    }

    public function updateCivilStatus($id, $updatedCivilStatus)
    {
        try {
            $this->repository->updateCivilStatus($id, $updatedCivilStatus);
            return QueryResultHelper::successUpdate('civil status');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCountry($newCountry)
    {
        try {
            $this->repository->createCountry($newCountry);
            return QueryResultHelper::successCreate('country');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCountries()
    {
        return QueryResultHelper::successGet($this->repository->getCountries());
    }

    public function updateCountry($id, $updatedCountry)
    {
        try {
            $this->repository->updateCountry($id, $updatedCountry);
            return QueryResultHelper::successUpdate('country');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createEmploymentType($newEmploymentType)
    {
        try {
            $this->repository->createEmploymentType($newEmploymentType);
            return QueryResultHelper::successCreate('employment type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getEmploymentTypes()
    {
        return QueryResultHelper::successGet($this->repository->getEmploymentTypes());
    }

    public function updateEmploymentType($id, $updatedEmploymentType)
    {
        try {
            $this->repository->updateEmploymentType($id, $updatedEmploymentType);
            return QueryResultHelper::successUpdate('employment type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createLanguage($newLanguage)
    {
        try {
            $this->repository->createLanguage($newLanguage);
            return QueryResultHelper::successCreate('language');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getLanguages()
    {
        return QueryResultHelper::successGet($this->repository->getLanguages());
    }

    public function updateLanguage($id, $updatedLanguage)
    {
        try {
            $this->repository->updateLanguage($id, $updatedLanguage);
            return QueryResultHelper::successUpdate('language');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createLicenseType($newLicenseType)
    {
        try {
            $this->repository->createLicenseType($newLicenseType);
            return QueryResultHelper::successCreate('license type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getLicenseTypes()
    {
        return QueryResultHelper::successGet($this->repository->getLicenseTypes());
    }

    public function updateLicenseType($id, $updatedLicenseType)
    {
        try {
            $this->repository->updateLicenseType($id, $updatedLicenseType);
            return QueryResultHelper::successUpdate('license type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMembershipType($newMembershipType)
    {
        try {
            $this->repository->createMembershipType($newMembershipType);
            return QueryResultHelper::successCreate('membership type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMembershipTypes()
    {
        return QueryResultHelper::successGet($this->repository->getMembershipTypes());
    }

    public function updateMembershipType($id, $updatedMembershipType)
    {
        try {
            $this->repository->updateMembershipType($id, $updatedMembershipType);
            return QueryResultHelper::successUpdate('membership type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createNationality($newNationality)
    {
        try {
            $this->repository->createNationality($newNationality);
            return QueryResultHelper::successCreate('nationality');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getNationalities()
    {
        return QueryResultHelper::successGet($this->repository->getNationalities());
    }

    public function updateNationality($id, $updatedNationality)
    {
        try {
            $this->repository->updateNationality($id, $updatedNationality);
            return QueryResultHelper::successUpdate('nationality');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createPositionType($newPositionType)
    {
        try {
            $this->repository->createPositionType($newPositionType);
            return QueryResultHelper::successCreate('position type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getPositionTypes()
    {
        return QueryResultHelper::successGet($this->repository->getPositionTypes());
    }

    public function updatePositionType($id, $updatedPositionType)
    {
        try {
            $this->repository->updatePositionType($id, $updatedPositionType);
            return QueryResultHelper::successUpdate('position type');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createPrefix($newPrefix)
    {
        try {
            $this->repository->createPrefix($newPrefix);
            return QueryResultHelper::successCreate('prefix');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getPrefixes()
    {
        return QueryResultHelper::successGet($this->repository->getPrefixes());
    }

    public function updatePrefix($id, $updatedPrefix)
    {
        try {
            $this->repository->updatePrefix($id, $updatedPrefix);
            return QueryResultHelper::successUpdate('prefix');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createProvince($newProvince)
    {
        try {
            $this->repository->createProvince($newProvince);
            return QueryResultHelper::successCreate('province');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getProvinces()
    {
        return QueryResultHelper::successGet($this->repository->getProvinces());
    }

    public function updateProvince($id, $updatedProvince)
    {
        try {
            $this->repository->updateProvince($id, $updatedProvince);
            return QueryResultHelper::successUpdate('province');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createRegion($newRegion)
    {
        try {
            $this->repository->createRegion($newRegion);
            return QueryResultHelper::successCreate('region');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getRegions()
    {
        return QueryResultHelper::successGet($this->repository->getRegions());
    }

    public function updateRegion($id, $updatedRegion)
    {
        try {
            $this->repository->updateRegion($id, $updatedRegion);
            return QueryResultHelper::successUpdate('region');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createRegionProvinceCity($newRegionProvinceCity)
    {
        try {
            $this->repository->createRegionProvinceCity($newRegionProvinceCity);
            return QueryResultHelper::successCreate('region province city');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getRegionProvinceCities()
    {
        return QueryResultHelper::successGet($this->repository->getRegionProvinceCities());
    }

    public function updateRegionProvinceCity($id, $updatedRegionProvinceCity)
    {
        try {
            $this->repository->updateRegionProvinceCity($id, $updatedRegionProvinceCity);
            return QueryResultHelper::successUpdate('region province city');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createReligion($newReligion)
    {
        try {
            $this->repository->createReligion($newReligion);
            return QueryResultHelper::successCreate('religion');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getReligions()
    {
        return QueryResultHelper::successGet($this->repository->getReligions());
    }

    public function updateReligion($id, $updatedReligion)
    {
        try {
            $this->repository->updateReligion($id, $updatedReligion);
            return QueryResultHelper::successUpdate('religion');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createRequirement($newRequirement)
    {
        try {
            $this->repository->createRequirement($newRequirement);
            return QueryResultHelper::successCreate('requirement');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getRequirements()
    {
        return QueryResultHelper::successGet($this->repository->getRequirements());
    }

    public function updateRequirement($id, $updatedRequirement)
    {
        try {
            $this->repository->updateRequirement($id, $updatedRequirement);
            return QueryResultHelper::successUpdate('requirement');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createSchool($newSchool)
    {
        try {
            $this->repository->createSchool($newSchool);
            return QueryResultHelper::successCreate('school');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getSchools()
    {
        return QueryResultHelper::successGet($this->repository->getSchools());
    }

    public function updateSchool($id, $updatedSchool)
    {
        try {
            $this->repository->updateSchool($id, $updatedSchool);
            return QueryResultHelper::successUpdate('school');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createSkill($newSkill)
    {
        try {
            $this->repository->createSkill($newSkill);
            return QueryResultHelper::successCreate('skill');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getSkills()
    {
        return QueryResultHelper::successGet($this->repository->getSkills());
    }

    public function updateSkill($id, $updatedSkill)
    {
        try {
            $this->repository->updateSkill($id, $updatedSkill);
            return QueryResultHelper::successUpdate('skill');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createSuffix($newSuffix)
    {
        try {
            $this->repository->createSuffix($newSuffix);
            return QueryResultHelper::successCreate('suffix');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getSuffixes()
    {
        return QueryResultHelper::successGet($this->repository->getSuffixes());
    }

    public function updateSuffix($id, $updatedSuffix)
    {
        try {
            $this->repository->updateSuffix($id, $updatedSuffix);
            return QueryResultHelper::successUpdate('suffix');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createViolation($newViolation)
    {
        try {
            $this->repository->createViolation($newViolation);
            return QueryResultHelper::successCreate('violation');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getViolations()
    {
        return QueryResultHelper::successGet($this->repository->getViolations());
    }

    public function updateViolation($id, $updatedViolation)
    {
        try {
            $this->repository->updateViolation($id, $updatedViolation);
            return QueryResultHelper::successUpdate('violation');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
}
