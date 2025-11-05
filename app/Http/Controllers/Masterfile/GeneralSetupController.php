<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\GeneralSetupService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\GeneralSetup\{
    CreateMfAreaRequest,
    UpdateMfAreaRequest,
    CreateMfAwardRequest,
    UpdateMfAwardRequest,
    CreateMfBloodTypeRequest,
    UpdateMfBloodTypeRequest,
    CreateMfCitizenshipRequest,
    UpdateMfCitizenshipRequest,
    CreateMfCityRequest,
    UpdateMfCityRequest,
    CreateMfCivilStatusRequest,
    UpdateMfCivilStatusRequest,
    CreateMfCountryRequest,
    UpdateMfCountryRequest,
    CreateMfEmploymentTypeRequest,
    UpdateMfEmploymentTypeRequest,
    CreateMfLanguageRequest,
    UpdateMfLanguageRequest,
    CreateMfLicenseTypeRequest,
    UpdateMfLicenseTypeRequest,
    CreateMfMembershipTypeRequest,
    UpdateMfMembershipTypeRequest,
    CreateMfNationalityRequest,
    UpdateMfNationalityRequest,
    CreateMfPositionTypeRequest,
    UpdateMfPositionTypeRequest,
    CreateMfPrefixRequest,
    UpdateMfPrefixRequest,
    CreateMfProvinceRequest,
    UpdateMfProvinceRequest,
    CreateMfRegionRequest,
    UpdateMfRegionRequest,
    CreateMfReligionRequest,
    UpdateMfReligionRequest,
    CreateMfRequirementRequest,
    UpdateMfRequirementRequest,
    CreateMfSchoolRequest,
    UpdateMfSchoolRequest,
    CreateMfSkillRequest,
    UpdateMfSkillRequest,
    CreateMfSuffixRequest,
    UpdateMfSuffixRequest,
    CreateMfViolationRequest,
    UpdateMfViolationRequest,
};

class GeneralSetupController extends Controller
{
    protected $service;

    public function __construct(GeneralSetupService $service)
    {
        $this->service = $service;
    }

    public function createMfArea(CreateMfAreaRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfArea($request->validated()));
    }

    public function getMfAreas(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfAreas($filters));
    }

    public function updateMfArea(string $id, UpdateMfAreaRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfArea($id, $request->validated()));
    }

    public function createMfAward(CreateMfAwardRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfAward($request->validated()));
    }

    public function getMfAwards(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfAwards($filters));
    }

    public function updateMfAward(string $id, UpdateMfAwardRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfAward($id, $request->validated()));
    }


    public function createMfBloodType(CreateMfBloodTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfBloodType($request->validated()));
    }

    public function getMfBloodTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfBloodTypes($filters));
    }

    public function updateMfBloodType(string $id, UpdateMfBloodTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfBloodType($id, $request->validated()));
    }


    public function createMfCitizenship(CreateMfCitizenshipRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCitizenship($request->validated()));
    }

    public function getMfCitizenships(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCitizenships($filters));
    }

    public function updateMfCitizenship(string $id, UpdateMfCitizenshipRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCitizenship($id, $request->validated()));
    }


    public function createMfCity(CreateMfCityRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCity($request->validated()));
    }

    public function getMfCities(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCities($filters));
    }

    public function updateMfCity(string $id, UpdateMfCityRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCity($id, $request->validated()));
    }


    public function createMfCivilStatus(CreateMfCivilStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCivilStatus($request->validated()));
    }

    public function getMfCivilStatuses(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCivilStatuses($filters));
    }

    public function updateMfCivilStatus(string $id, UpdateMfCivilStatusRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCivilStatus($id, $request->validated()));
    }


    public function createMfCountry(CreateMfCountryRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCountry($request->validated()));
    }

    public function getMfCountries(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCountries($filters));
    }

    public function updateMfCountry(string $id, UpdateMfCountryRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCountry($id, $request->validated()));
    }


    public function createMfEmploymentType(CreateMfEmploymentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfEmploymentType($request->validated()));
    }

    public function getMfEmploymentTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfEmploymentTypes($filters));
    }

    public function updateMfEmploymentType(string $id, UpdateMfEmploymentTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfEmploymentType($id, $request->validated()));
    }


    public function createMfLanguage(CreateMfLanguageRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfLanguage($request->validated()));
    }

    public function getMfLanguages(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfLanguages($filters));
    }

    public function updateMfLanguage(string $id, UpdateMfLanguageRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfLanguage($id, $request->validated()));
    }


    public function createMfLicenseType(CreateMfLicenseTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfLicenseType($request->validated()));
    }

    public function getMfLicenseTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfLicenseTypes($filters));
    }

    public function updateMfLicenseType(string $id, UpdateMfLicenseTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfLicenseType($id, $request->validated()));
    }


    public function createMfMembershipType(CreateMfMembershipTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfMembershipType($request->validated()));
    }

    public function getMfMembershipTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfMembershipTypes($filters));
    }

    public function updateMfMembershipType(string $id, UpdateMfMembershipTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfMembershipType($id, $request->validated()));
    }


    public function createMfNationality(CreateMfNationalityRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfNationality($request->validated()));
    }

    public function getMfNationalities(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfNationalities($filters));
    }

    public function updateMfNationality(string $id, UpdateMfNationalityRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfNationality($id, $request->validated()));
    }


    public function createMfPositionType(CreateMfPositionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfPositionType($request->validated()));
    }

    public function getMfPositionTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfPositionTypes($filters));
    }

    public function updateMfPositionType(string $id, UpdateMfPositionTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfPositionType($id, $request->validated()));
    }


    public function createMfPrefix(CreateMfPrefixRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfPrefix($request->validated()));
    }

    public function getMfPrefixes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfPrefixes($filters));
    }

    public function updateMfPrefix(string $id, UpdateMfPrefixRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfPrefix($id, $request->validated()));
    }


    public function createMfProvince(CreateMfProvinceRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfProvince($request->validated()));
    }

    public function getMfProvinces(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfProvinces($filters));
    }

    public function updateMfProvince(string $id, UpdateMfProvinceRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfProvince($id, $request->validated()));
    }


    public function createMfRegion(CreateMfRegionRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfRegion($request->validated()));
    }

    public function getMfRegions(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfRegions($filters));
    }

    public function updateMfRegion(string $id, UpdateMfRegionRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfRegion($id, $request->validated()));
    }


    public function createMfReligion(CreateMfReligionRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfReligion($request->validated()));
    }

    public function getMfReligions(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfReligions($filters));
    }

    public function updateMfReligion(string $id, UpdateMfReligionRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfReligion($id, $request->validated()));
    }


    public function createMfRequirement(CreateMfRequirementRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfRequirement($request->validated()));
    }

    public function getMfRequirements(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfRequirements($filters));
    }

    public function updateMfRequirement(string $id, UpdateMfRequirementRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfRequirement($id, $request->validated()));
    }


    public function createMfSchool(CreateMfSchoolRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfSchool($request->validated()));
    }

    public function getMfSchools(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfSchools($filters));
    }

    public function updateMfSchool(string $id, UpdateMfSchoolRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfSchool($id, $request->validated()));
    }


    public function createMfSkill(CreateMfSkillRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfSkill($request->validated()));
    }

    public function getMfSkills(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfSkills($filters));
    }

    public function updateMfSkill(string $id, UpdateMfSkillRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfSkill($id, $request->validated()));
    }


    public function createMfSuffix(CreateMfSuffixRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfSuffix($request->validated()));
    }

    public function getMfSuffixes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfSuffixes($filters));
    }

    public function updateMfSuffix(string $id, UpdateMfSuffixRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfSuffix($id, $request->validated()));
    }


    public function createMfViolation(CreateMfViolationRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfViolation($request->validated()));
    }

    public function getMfViolations(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfViolations($filters));
    }

    public function updateMfViolation(string $id, UpdateMfViolationRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfViolation($id, $request->validated()));
    }
}
