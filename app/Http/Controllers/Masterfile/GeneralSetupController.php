<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\GeneralSetupService;

use App\Http\Requests\Masterfile\GeneralSetup\{
    CreateAreaRequest,
    UpdateAreaRequest,
    CreateBloodTypeRequest,
    UpdateBloodTypeRequest,
    CreateCitizenshipRequest,
    UpdateCitizenshipRequest,
    CreateCityRequest,
    UpdateCityRequest,
    CreateCivilStatusRequest,
    UpdateCivilStatusRequest,
    CreateCountryRequest,
    UpdateCountryRequest,
    CreateEmploymentTypeRequest,
    UpdateEmploymentTypeRequest,
    CreateLanguageRequest,
    UpdateLanguageRequest,
    CreateLicenseTypeRequest,
    UpdateLicenseTypeRequest,
    CreateMembershipTypeRequest,
    UpdateMembershipTypeRequest,
    CreateNationalityRequest,
    UpdateNationalityRequest,
    CreatePositionTypeRequest,
    UpdatePositionTypeRequest,
    CreatePrefixRequest,
    UpdatePrefixRequest,
    CreateProvinceRequest,
    UpdateProvinceRequest,
    CreateRegionRequest,
    UpdateRegionRequest,
    CreateRegionProvinceCityRequest,
    UpdateRegionProvinceCityRequest,
    CreateReligionRequest,
    UpdateReligionRequest,
    CreateRequirementRequest,
    UpdateRequirementRequest,
    CreateSchoolRequest,
    UpdateSchoolRequest,
    CreateSkillRequest,
    UpdateSkillRequest,
    CreateSuffixRequest,
    UpdateSuffixRequest,
    CreateViolationRequest,
    UpdateViolationRequest
};

use App\Helpers\ResponseHelper;

class GeneralSetupController extends Controller
{
    protected $service;

    public function __construct(GeneralSetupService $service)
    {
        $this->service = $service;
    }

    public function createArea(CreateAreaRequest $request) {
        return ResponseHelper::respond($this->service->createArea($request->validated()));
    }

    public function getAreas() {
        return ResponseHelper::respond($this->service->getAreas());
    }

    public function updateArea(string $id, UpdateAreaRequest $request) {
        return ResponseHelper::respond($this->service->updateArea($id, $request->validated()));
    }

    public function createBloodType(CreateBloodTypeRequest $request) {
        return ResponseHelper::respond($this->service->createBloodType($request->validated()));
    }
    
    public function getBloodTypes() {
        return ResponseHelper::respond($this->service->getBloodTypes());
    }

    public function updateBloodType(string $id, UpdateBloodTypeRequest $request) {
        return ResponseHelper::respond($this->service->updateBloodType($id, $request->validated()));
    }

    public function createCitizenship(CreateCitizenshipRequest $request) { 
        return ResponseHelper::respond($this->service->createCitizenship($request->validated())); 
    }

    public function getCitizenships() { 
        return ResponseHelper::respond($this->service->getCitizenships());
    }

    public function updateCitizenship(string $id, UpdateCitizenshipRequest $request) {
        return ResponseHelper::respond($this->service->updateCitizenship($id, $request->validated()));
    }

    public function createCity(CreateCityRequest $request) {
        return ResponseHelper::respond($this->service->createCity($request->validated()));
    }

    public function getCities() {
        return ResponseHelper::respond($this->service->getCities());
    }

    public function updateCity(string $id, UpdateCityRequest $request) {
        return ResponseHelper::respond($this->service->updateCity($id, $request->validated()));
    }

    public function createCivilStatus(CreateCivilStatusRequest $request) {
        return ResponseHelper::respond($this->service->createCivilStatus($request->validated()));
    }

    public function getCivilStatuses() {
        return ResponseHelper::respond($this->service->getCivilStatuses());
    }

    public function updateCivilStatus(string $id, UpdateCivilStatusRequest $request) {
        return ResponseHelper::respond($this->service->updateCivilStatus($id, $request->validated()));
    }

    public function createCountry(CreateCountryRequest $request) {
        return ResponseHelper::respond($this->service->createCountry($request->validated()));
    }

    public function getCountries() {
        return ResponseHelper::respond($this->service->getCountries());
    }

    public function updateCountry(string $id, UpdateCountryRequest $request) {
        return ResponseHelper::respond($this->service->updateCountry($id, $request->validated()));
    }

    public function createEmploymentType(CreateEmploymentTypeRequest $request) {
        return ResponseHelper::respond($this->service->createEmploymentType($request->validated()));
    }

    public function getEmploymentTypes() {
        return ResponseHelper::respond($this->service->getEmploymentTypes());
    }

    public function updateEmploymentType(string $id, UpdateEmploymentTypeRequest $request) {
        return ResponseHelper::respond($this->service->updateEmploymentType($id, $request->validated()));
    }

    public function createLanguage(CreateLanguageRequest $request) {
        return ResponseHelper::respond($this->service->createLanguage($request->validated()));
    }

    public function getLanguages() {
        return ResponseHelper::respond($this->service->getLanguages());
    }

    public function updateLanguage(string $id, UpdateLanguageRequest $request) {
        return ResponseHelper::respond($this->service->updateLanguage($id, $request->validated()));
    }

    public function createLicenseType(CreateLicenseTypeRequest $request) {
        return ResponseHelper::respond($this->service->createLicenseType($request->validated()));
    }

    public function getLicenseTypes() {
        return ResponseHelper::respond($this->service->getLicenseTypes());
    }

    public function updateLicenseType(string $id, UpdateLicenseTypeRequest $request) {
        return ResponseHelper::respond($this->service->updateLicenseType($id, $request->validated()));
    }

    public function createMembershipType(CreateMembershipTypeRequest $request) {
        return ResponseHelper::respond($this->service->createMembershipType($request->validated()));
    }

    public function getMembershipTypes() {
        return ResponseHelper::respond($this->service->getMembershipTypes());
    }

    public function updateMembershipType(string $id, UpdateMembershipTypeRequest $request) {
        return ResponseHelper::respond($this->service->updateMembershipType($id, $request->validated()));
    }

    public function createNationality(CreateNationalityRequest $request) {
        return ResponseHelper::respond($this->service->createNationality($request->validated()));
    }

    public function getNationalities() {
        return ResponseHelper::respond($this->service->getNationalities());
    }

    public function updateNationality(string $id, UpdateNationalityRequest $request) {
        return ResponseHelper::respond($this->service->updateNationality($id, $request->validated()));
    }

    public function createPositionType(CreatePositionTypeRequest $request) {
        return ResponseHelper::respond($this->service->createPositionType($request->validated()));
    }

    public function getPositionTypes() {
        return ResponseHelper::respond($this->service->getPositionTypes());
    }

    public function updatePositionType(string $id, UpdatePositionTypeRequest $request) {
        return ResponseHelper::respond($this->service->updatePositionType($id, $request->validated()));
    }

    public function createPrefix(CreatePrefixRequest $request) {
        return ResponseHelper::respond($this->service->createPrefix($request->validated()));
    }

    public function getPrefixes() {
        return ResponseHelper::respond($this->service->getPrefixes());
    }

    public function updatePrefix(string $id, UpdatePrefixRequest $request) {
        return ResponseHelper::respond($this->service->updatePrefix($id, $request->validated()));
    }

    public function createProvince(CreateProvinceRequest $request) {
        return ResponseHelper::respond($this->service->createProvince($request->validated()));
    }

    public function getProvinces() {
        return ResponseHelper::respond($this->service->getProvinces());
    }

    public function updateProvince(string $id, UpdateProvinceRequest $request) {
        return ResponseHelper::respond($this->service->updateProvince($id, $request->validated()));
    }

    public function createRegion(CreateRegionRequest $request) {
        return ResponseHelper::respond($this->service->createRegion($request->validated()));
    }

    public function getRegions() {
        return ResponseHelper::respond($this->service->getRegions());
    }

    public function updateRegion(string $id, UpdateRegionRequest $request) {
        return ResponseHelper::respond($this->service->updateRegion($id, $request->validated()));
    }

    public function createRegionProvinceCity(CreateRegionProvinceCityRequest $request) {
        return ResponseHelper::respond($this->service->createRegionProvinceCity($request->validated()));
    }

    public function getRegionProvinceCities() {
        return ResponseHelper::respond($this->service->getRegionProvinceCities());
    }

    public function updateRegionProvinceCity(string $id, UpdateRegionProvinceCityRequest $request) { 
        return ResponseHelper::respond($this->service->updateRegionProvinceCity($id, $request->validated()));
    }

    public function createReligion(CreateReligionRequest $request) { 
        return ResponseHelper::respond($this->service->createReligion($request->validated()));
    }

    public function getReligions() {
        return ResponseHelper::respond($this->service->getReligions());
    }

    public function updateReligion(string $id, UpdateReligionRequest $request) {
        return ResponseHelper::respond($this->service->updateReligion($id, $request->validated()));
    }

    public function createRequirement(CreateRequirementRequest $request) {
        return ResponseHelper::respond($this->service->createRequirement($request->validated()));
    }

    public function getRequirements() {
        return ResponseHelper::respond($this->service->getRequirements());
    }

    public function updateRequirement(string $id, UpdateRequirementRequest $request) {
        return ResponseHelper::respond($this->service->updateRequirement($id, $request->validated()));
    }

    public function createSchool(CreateSchoolRequest $request) {
        return ResponseHelper::respond($this->service->createSchool($request->validated()));
    }

    public function getSchools() {
        return ResponseHelper::respond($this->service->getSchools());
    }

    public function updateSchool(string $id, UpdateSchoolRequest $request) {
        return ResponseHelper::respond($this->service->updateSchool($id, $request->validated()));
    }

    public function createSkill(CreateSkillRequest $request) {
        return ResponseHelper::respond($this->service->createSkill($request->validated()));
    }

    public function getSkills() {
        return ResponseHelper::respond($this->service->getSkills());
    }

    public function updateSkill(string $id, UpdateSkillRequest $request) {
        return ResponseHelper::respond($this->service->updateSkill($id, $request->validated()));
    }

    public function createSuffix(CreateSuffixRequest $request) {
        return ResponseHelper::respond($this->service->createSuffix($request->validated()));
    }

    public function getSuffixes() {
        return ResponseHelper::respond($this->service->getSuffixes());
    }

    public function updateSuffix(string $id, UpdateSuffixRequest $request) {
        return ResponseHelper::respond($this->service->updateSuffix($id, $request->validated()));
    }

    public function createViolation(CreateViolationRequest $request) {
        return ResponseHelper::respond($this->service->createViolation($request->validated()));
    }

    public function getViolations() {
        return ResponseHelper::respond($this->service->getViolations());
    }

    public function updateViolation(string $id, UpdateViolationRequest $request) {
        return ResponseHelper::respond($this->service->updateViolation($id, $request->validated()));
    }
}
