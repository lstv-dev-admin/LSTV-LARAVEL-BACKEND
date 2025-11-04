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

    public function createMfArea($data)
    {
        try {
            $res = $this->repository->createMfArea($data);
            return QueryResultHelper::successCreate('Area', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfAreas($filters)
    {
        return QueryResultHelper::successGet('Area', $this->repository->getMfAreas($filters));
    }

    public function updateMfArea($id, $data)
    {
        try {
            $res = $this->repository->updateMfArea($id, $data);
            return QueryResultHelper::successUpdate('Area', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfAward($data)
    {
        try {
            $res = $this->repository->createMfAward($data);
            return QueryResultHelper::successCreate('Award', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfAwards($filters)
    {
        return QueryResultHelper::successGet('Award', $this->repository->getMfAwards($filters));
    }

    public function updateMfAward($id, $data)
    {
        try {
            $res = $this->repository->updateMfAward($id, $data);
            return QueryResultHelper::successUpdate('Award', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfBloodType($data)
    {
        try {
            $res = $this->repository->createMfBloodType($data);
            return QueryResultHelper::successCreate('Blood Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfBloodTypes($filters)
    {
        return QueryResultHelper::successGet('Blood Type', $this->repository->getMfBloodTypes($filters));
    }

    public function updateMfBloodType($id, $data)
    {
        try {
            $res = $this->repository->updateMfBloodType($id, $data);
            return QueryResultHelper::successUpdate('Blood Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfCitizenship($data)
    {
        try {
            $res = $this->repository->createMfCitizenship($data);
            return QueryResultHelper::successCreate('Citizenship', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCitizenships($filters)
    {
        return QueryResultHelper::successGet('Citizenship', $this->repository->getMfCitizenships($filters));
    }

    public function updateMfCitizenship($id, $data)
    {
        try {
            $res = $this->repository->updateMfCitizenship($id, $data);
            return QueryResultHelper::successUpdate('Citizenship', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfCity($data)
    {
        try {
            $res = $this->repository->createMfCity($data);
            return QueryResultHelper::successCreate('City', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCities($filters)
    {
        return QueryResultHelper::successGet('City', $this->repository->getMfCitizenships($filters));
    }

    public function updateMfCity($id, $data)
    {
        try {
            $res = $this->repository->updateMfCity($id, $data);
            return QueryResultHelper::successUpdate('City', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfCivilStatus($data)
    {
        try {
            $res = $this->repository->createMfCivilStatus($data);
            return QueryResultHelper::successCreate('Civil Status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCivilStatuses($filters)
    {
        return QueryResultHelper::successGet('Civil Status', $this->repository->getMfCivilStatuses($filters));
    }

    public function updateMfCivilStatus($id, $data)
    {
        try {
            $res = $this->repository->updateMfCivilStatus($id, $data);
            return QueryResultHelper::successUpdate('Civil Status', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfCountry($data)
    {
        try {
            $res = $this->repository->createMfCountry($data);
            return QueryResultHelper::successCreate('Country', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCountries($filters)
    {
        return QueryResultHelper::successGet('Country', $this->repository->getMfCountries($filters));
    }

    public function updateMfCountry($id, $data)
    {
        try {
            $res = $this->repository->updateMfCountry($id, $data);
            return QueryResultHelper::successUpdate('Country', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfEmploymentType($data)
    {
        try {
            $res = $this->repository->createMfEmploymentType($data);
            return QueryResultHelper::successCreate('Employment Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfEmploymentTypes($filters)
    {
        return QueryResultHelper::successGet('Employment Type', $this->repository->getMfEmploymentTypes($filters));
    }

    public function updateMfEmploymentType($id, $data)
    {
        try {
            $res = $this->repository->updateMfEmploymentType($id, $data);
            return QueryResultHelper::successUpdate('Employment Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfLanguage($data)
    {
        try {
            $res = $this->repository->createMfLanguage($data);
            return QueryResultHelper::successCreate('Language', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfLanguages($filters)
    {
        return QueryResultHelper::successGet('Language', $this->repository->getMfLanguages($filters));
    }

    public function updateMfLanguage($id, $data)
    {
        try {
            $res = $this->repository->updateMfLanguage($id, $data);
            return QueryResultHelper::successUpdate('Language', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfLicenseType($data)
    {
        try {
            $res = $this->repository->createMfLicenseType($data);
            return QueryResultHelper::successCreate('License Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfLicenseTypes($filters)
    {
        return QueryResultHelper::successGet('License Type', $this->repository->getMfLicenseTypes($filters));
    }

    public function updateMfLicenseType($id, $data)
    {
        try {
            $res = $this->repository->updateMfLicenseType($id, $data);
            return QueryResultHelper::successUpdate('License Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfMembershipType($data)
    {
        try {
            $res = $this->repository->createMfMembershipType($data);
            return QueryResultHelper::successCreate('Membership Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfMembershipTypes($filters)
    {
        return QueryResultHelper::successGet('Membership Type', $this->repository->getMfMembershipTypes($filters));
    }

    public function updateMfMembershipType($id, $data)
    {
        try {
            $res = $this->repository->updateMfMembershipType($id, $data);
            return QueryResultHelper::successUpdate('Membership Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfNationality($data)
    {
        try {
            $res = $this->repository->createMfNationality($data);
            return QueryResultHelper::successCreate('Nationality', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfNationalities($filters)
    {
        return QueryResultHelper::successGet('Nationality', $this->repository->getMfNationalities($filters));
    }

    public function updateMfNationality($id, $data)
    {
        try {
            $res = $this->repository->updateMfNationality($id, $data);
            return QueryResultHelper::successUpdate('Nationality', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfPositionType($data)
    {
        try {
            $res = $this->repository->createMfPositionType($data);
            return QueryResultHelper::successCreate('Position Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfPositionTypes($filters)
    {
        return QueryResultHelper::successGet('Position Type', $this->repository->getMfPositionTypes($filters));
    }

    public function updateMfPositionType($id, $data)
    {
        try {
            $res = $this->repository->updateMfPositionType($id, $data);
            return QueryResultHelper::successUpdate('Position Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfPrefix($data)
    {
        try {
            $res = $this->repository->createMfPrefix($data);
            return QueryResultHelper::successCreate('Prefix', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfPrefixes($filters)
    {
        return QueryResultHelper::successGet('Prefix', $this->repository->getMfPrefixes($filters));
    }

    public function updateMfPrefix($id, $data)
    {
        try {
            $res = $this->repository->updateMfPrefix($id, $data);
            return QueryResultHelper::successUpdate('Prefix', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfProvince($data)
    {
        try {
            $res = $this->repository->createMfProvince($data);
            return QueryResultHelper::successCreate('Province', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfProvinces($filters)
    {
        return QueryResultHelper::successGet('Province', $this->repository->getMfProvinces($filters));
    }

    public function updateMfProvince($id, $data)
    {
        try {
            $res = $this->repository->updateMfProvince($id, $data);
            return QueryResultHelper::successUpdate('Province', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfRegion($data)
    {
        try {
            $res = $this->repository->createMfRegion($data);
            return QueryResultHelper::successCreate('Region', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfRegions($filters)
    {
        return QueryResultHelper::successGet('Region', $this->repository->getMfRegions($filters));
    }

    public function updateMfRegion($id, $data)
    {
        try {
            $res = $this->repository->updateMfRegion($id, $data);
            return QueryResultHelper::successUpdate('Region', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createMfReligion($data)
    {
        try {
            $res = $this->repository->createMfReligion($data);
            return QueryResultHelper::successCreate('Religion', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfReligions($filters)
    {
        return QueryResultHelper::successGet('Religion', $this->repository->getMfReligions($filters));
    }

    public function updateMfReligion($id, $data)
    {
        try {
            $res = $this->repository->updateMfReligion($id, $data);
            return QueryResultHelper::successUpdate('Religion', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }


    public function createMfRequirement($data)
    {
        try {
            $res = $this->repository->createMfRequirement($data);
            return QueryResultHelper::successCreate('Requirement', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfRequirements($filters)
    {
        return QueryResultHelper::successGet('Requirement', $this->repository->getMfRequirements($filters));
    }

    public function updateMfRequirement($id, $data)
    {
        try {
            $res = $this->repository->updateMfRequirement($id, $data);
            return QueryResultHelper::successUpdate('Requirement', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }


    public function createMfSchool($data)
    {
        try {
            $res = $this->repository->createMfSchool($data);
            return QueryResultHelper::successCreate('School', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfSchools($filters)
    {
        return QueryResultHelper::successGet('School', $this->repository->getMfSchools($filters));
    }

    public function updateMfSchool($id, $data)
    {
        try {
            $res = $this->repository->updateMfSchool($id, $data);
            return QueryResultHelper::successUpdate('School', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }


    public function createMfSkill($data)
    {
        try {
            $res = $this->repository->createMfSkill($data);
            return QueryResultHelper::successCreate('Skill', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfSkills($filters)
    {
        return QueryResultHelper::successGet('Skill', $this->repository->getMfSkills($filters));
    }

    public function updateMfSkill($id, $data)
    {
        try {
            $res = $this->repository->updateMfSkill($id, $data);
            return QueryResultHelper::successUpdate('Skill', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }


    public function createMfSuffix($data)
    {
        try {
            $res = $this->repository->createMfSuffix($data);
            return QueryResultHelper::successCreate('Suffix', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfSuffixes($filters)
    {
        return QueryResultHelper::successGet('Suffix', $this->repository->getMfSuffixes($filters));
    }

    public function updateMfSuffix($id, $data)
    {
        try {
            $res = $this->repository->updateMfSuffix($id, $data);
            return QueryResultHelper::successUpdate('Suffix', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }


    public function createMfViolation($data)
    {
        try {
            $res = $this->repository->createMfViolation($data);
            return QueryResultHelper::successCreate('Violation', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfViolations($filters)
    {
        return QueryResultHelper::successGet('Violation', $this->repository->getMfViolations($filters));
    }

    public function updateMfViolation($id, $data)
    {
        try {
            $res = $this->repository->updateMfViolation($id, $data);
            return QueryResultHelper::successUpdate('Violation', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

}
