<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\GeneralSetupInterface;
use Exception;

class GeneralSetupService 
{
    protected $repository;

    public function __construct(GeneralSetupInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createArea($newArea) {
        try {
            $this->repository->createArea($newArea);
            return $this->onSuccessCreate('area');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function getAreas() {
        return $this->onSuccessGet($this->repository->getAreas());
    }

    public function updateArea($id, $updatedArea) {
        try {
            $this->repository->updateArea($id, $updatedArea);
            return  $this->onSuccessUpdate('area');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createBloodType($newBloodType) {
        try {
            $this->repository->createBloodType($newBloodType);
            return $this->onSuccessCreate('blood type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getBloodTypes() {
        return $this->onSuccessGet($this->repository->getBloodTypes());
    }
    
    public function updateBloodType($id, $updatedBloodType) {
        try {
            $this->repository->updateBloodType($id, $updatedBloodType);
            return $this->onSuccessUpdate('blood type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createCitizenship($newCitizenship) {
        try {
            $this->repository->createCitizenship($newCitizenship);
            return $this->onSuccessCreate('citizenship');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getCitizenships() {
        return $this->onSuccessGet($this->repository->getCitizenships());
    }
    
    public function updateCitizenship($id, $updatedCitizenship) {
        try {
            $this->repository->updateCitizenship($id, $updatedCitizenship);
            return $this->onSuccessUpdate('citizenship');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createCity($newCity) {
        try {
            $this->repository->createCity($newCity);
            return $this->onSuccessCreate('city');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getCities() {
        return $this->onSuccessGet($this->repository->getCities());
    }
    
    public function updateCity($id, $updatedCity) {
        try {
            $this->repository->updateCity($id, $updatedCity);
            return $this->onSuccessUpdate('city');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createCivilStatus($newCivilStatus) {
        try {
            $this->repository->createCivilStatus($newCivilStatus);
            return $this->onSuccessCreate('civil status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getCivilStatuses() {
        return $this->onSuccessGet($this->repository->getCivilStatuses());
    }
    
    public function updateCivilStatus($id, $updatedCivilStatus) {
        try {
            $this->repository->updateCivilStatus($id, $updatedCivilStatus);
            return $this->onSuccessUpdate('civil status');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createCountry($newCountry) {
        try {
            $this->repository->createCountry($newCountry);
            return $this->onSuccessCreate('country');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getCountries() {
        return $this->onSuccessGet($this->repository->getCountries());
    }
    
    public function updateCountry($id, $updatedCountry) {
        try {
            $this->repository->updateCountry($id, $updatedCountry);
            return $this->onSuccessUpdate('country');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createEmploymentType($newEmploymentType) {
        try {
            $this->repository->createEmploymentType($newEmploymentType);
            return $this->onSuccessCreate('employment type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getEmploymentTypes() {
        return $this->onSuccessGet($this->repository->getEmploymentTypes());
    }
    
    public function updateEmploymentType($id, $updatedEmploymentType) {
        try {
            $this->repository->updateEmploymentType($id, $updatedEmploymentType);
            return $this->onSuccessUpdate('employment type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createLanguage($newLanguage) {
        try {
            $this->repository->createLanguage($newLanguage);
            return $this->onSuccessCreate('language');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getLanguages() {
        return $this->onSuccessGet($this->repository->getLanguages());
    }
    
    public function updateLanguage($id, $updatedLanguage) {
        try {
            $this->repository->updateLanguage($id, $updatedLanguage);
            return $this->onSuccessUpdate('language');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createLicenseType($newLicenseType) {
        try {
            $this->repository->createLicenseType($newLicenseType);
            return $this->onSuccessCreate('license type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getLicenseTypes() {
        return $this->onSuccessGet($this->repository->getLicenseTypes());
    }
    
    public function updateLicenseType($id, $updatedLicenseType) {
        try {
            $this->repository->updateLicenseType($id, $updatedLicenseType);
            return $this->onSuccessUpdate('license type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }    

    public function createMembershipType($newMembershipType) {
        try {
            $this->repository->createMembershipType($newMembershipType);
            return $this->onSuccessCreate('membership type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getMembershipTypes() {
        return $this->onSuccessGet($this->repository->getMembershipTypes());
    }
    
    public function updateMembershipType($id, $updatedMembershipType) {
        try {
            $this->repository->updateMembershipType($id, $updatedMembershipType);
            return $this->onSuccessUpdate('membership type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createNationality($newNationality) {
        try {
            $this->repository->createNationality($newNationality);
            return $this->onSuccessCreate('nationality');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getNationalities() {
        return $this->onSuccessGet($this->repository->getNationalities());
    }
    
    public function updateNationality($id, $updatedNationality) {
        try {
            $this->repository->updateNationality($id, $updatedNationality);
            return $this->onSuccessUpdate('nationality');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createPositionType($newPositionType) {
        try {
            $this->repository->createPositionType($newPositionType);
            return $this->onSuccessCreate('position type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getPositionTypes() {
        return $this->onSuccessGet($this->repository->getPositionTypes());
    }
    
    public function updatePositionType($id, $updatedPositionType) {
        try {
            $this->repository->updatePositionType($id, $updatedPositionType);
            return $this->onSuccessUpdate('position type');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createPrefix($newPrefix) {
        try {
            $this->repository->createPrefix($newPrefix);
            return $this->onSuccessCreate('prefix');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getPrefixes() {
        return $this->onSuccessGet($this->repository->getPrefixes());
    }
    
    public function updatePrefix($id, $updatedPrefix) {
        try {
            $this->repository->updatePrefix($id, $updatedPrefix);
            return $this->onSuccessUpdate('prefix');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createProvince($newProvince) {
        try {
            $this->repository->createProvince($newProvince);
            return $this->onSuccessCreate('province');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getProvinces() {
        return $this->onSuccessGet($this->repository->getProvinces());
    }
    
    public function updateProvince($id, $updatedProvince) {
        try {
            $this->repository->updateProvince($id, $updatedProvince);
            return $this->onSuccessUpdate('province');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createRegion($newRegion) {
        try {
            $this->repository->createRegion($newRegion);
            return $this->onSuccessCreate('region');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getRegions() {
        return $this->onSuccessGet($this->repository->getRegions());
    }
    
    public function updateRegion($id, $updatedRegion) {
        try {
            $this->repository->updateRegion($id, $updatedRegion);
            return $this->onSuccessUpdate('region');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }

    public function createRegionProvinceCity($newRegionProvinceCity) {
        try {
            $this->repository->createRegionProvinceCity($newRegionProvinceCity);
            return $this->onSuccessCreate('region province city');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getRegionProvinceCities() {
        return $this->onSuccessGet($this->repository->getRegionProvinceCities());
    }
    
    public function updateRegionProvinceCity($id, $updatedRegionProvinceCity) {
        try {
            $this->repository->updateRegionProvinceCity($id, $updatedRegionProvinceCity);
            return $this->onSuccessUpdate('region province city');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createReligion($newReligion) {
        try {
            $this->repository->createReligion($newReligion);
            return $this->onSuccessCreate('religion');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getReligions() {
        return $this->onSuccessGet($this->repository->getReligions());
    }
    
    public function updateReligion($id, $updatedReligion) {
        try {
            $this->repository->updateReligion($id, $updatedReligion);
            return $this->onSuccessUpdate('religion');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createRequirement($newRequirement) {
        try {
            $this->repository->createRequirement($newRequirement);
            return $this->onSuccessCreate('requirement');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getRequirements() {
        return $this->onSuccessGet($this->repository->getRequirements());
    }
    
    public function updateRequirement($id, $updatedRequirement) {
        try {
            $this->repository->updateRequirement($id, $updatedRequirement);
            return $this->onSuccessUpdate('requirement');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createSchool($newSchool) {
        try {
            $this->repository->createSchool($newSchool);
            return $this->onSuccessCreate('school');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getSchools() {
        return $this->onSuccessGet($this->repository->getSchools());
    }
    
    public function updateSchool($id, $updatedSchool) {
        try {
            $this->repository->updateSchool($id, $updatedSchool);
            return $this->onSuccessUpdate('school');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createSkill($newSkill) {
        try {
            $this->repository->createSkill($newSkill);
            return $this->onSuccessCreate('skill');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getSkills() {
        return $this->onSuccessGet($this->repository->getSkills());
    }
    
    public function updateSkill($id, $updatedSkill) {
        try {
            $this->repository->updateSkill($id, $updatedSkill);
            return $this->onSuccessUpdate('skill');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createSuffix($newSuffix) {
        try {
            $this->repository->createSuffix($newSuffix);
            return $this->onSuccessCreate('suffix');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getSuffixes() {
        return $this->onSuccessGet($this->repository->getSuffixes());
    }
    
    public function updateSuffix($id, $updatedSuffix) {
        try {
            $this->repository->updateSuffix($id, $updatedSuffix);
            return $this->onSuccessUpdate('suffix');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    
    public function createViolation($newViolation) {
        try {
            $this->repository->createViolation($newViolation);
            return $this->onSuccessCreate('violation');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    public function getViolations() {
        return $this->onSuccessGet($this->repository->getViolations());
    }
    
    public function updateViolation($id, $updatedViolation) {
        try {
            $this->repository->updateViolation($id, $updatedViolation);
            return $this->onSuccessUpdate('violation');
        } catch (Exception $e) {
            return $this->onError($e);
        }
    }
    
    private function onSuccessCreate(string $entity) {
        return [
            'status' => 'success',
            'message' => "New {$entity} added successfully"
        ];
    }

    private function onSuccessGet($data) {
        return [
            'status' => 'success',
            'data' => $data
        ];
    }

    private function onSuccessUpdate(string $entity) {
        return [
            'status' => 'success',
            'message' => "{$entity} updated successfully"
        ];
    }

    private function onError($e) {
        return [
            'status' => 'error',
            'message' => $e->getMessage()
        ];
    }
}