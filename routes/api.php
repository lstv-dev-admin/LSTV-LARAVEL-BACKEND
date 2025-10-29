<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\{
    GeneralSetupController
};

Route::controller(GeneralSetupController::class)->group(function () {
    Route::post('masterfile/general-setup/area', 'createArea');
    Route::get('masterfile/general-setup/area', 'getAreas');
    Route::put('masterfile/general-setup/area/{id}', 'updateArea');

    Route::post('masterfile/general-setup/blood-type', 'createBloodType');
    Route::get('masterfile/general-setup/blood-type', 'getBloodTypes');
    Route::put('masterfile/general-setup/blood-type/{id}', 'updateBloodType');

    Route::post('masterfile/general-setup/citizenship', 'createCitizenship');
    Route::get('masterfile/general-setup/citizenship', 'getCitizenships');
    Route::put('masterfile/general-setup/citizenship/{id}', 'updateCitizenship');

    Route::post('masterfile/general-setup/city', 'createCity');
    Route::get('masterfile/general-setup/city', 'getCities');
    Route::put('masterfile/general-setup/city/{id}', 'updateCity');

    Route::post('masterfile/general-setup/civil-status', 'createCivilStatus');
    Route::get('masterfile/general-setup/civil-status', 'getCivilStatuses');
    Route::put('masterfile/general-setup/civil-status/{id}', 'updateCivilStatus');

    Route::post('masterfile/general-setup/country', 'createCountry');
    Route::get('masterfile/general-setup/country', 'getCountries');
    Route::put('masterfile/general-setup/country/{id}', 'updateCountry');

    Route::post('masterfile/general-setup/employment-type', 'createEmploymentType');
    Route::get('masterfile/general-setup/employment-type', 'getEmploymentTypes');
    Route::put('masterfile/general-setup/employment-type/{id}', 'updateEmploymentType');

    Route::post('masterfile/general-setup/language', 'createLanguage');
    Route::get('masterfile/general-setup/language', 'getLanguages');
    Route::put('masterfile/general-setup/language/{id}', 'updateLanguage');

    Route::post('masterfile/general-setup/license-type', 'createLicenseType');
    Route::get('masterfile/general-setup/license-type', 'getLicenseTypes');
    Route::put('masterfile/general-setup/license-type/{id}', 'updateLicenseType');

    Route::post('masterfile/general-setup/membership-type', 'createMembershipType');
    Route::get('masterfile/general-setup/membership-type', 'getMembershipTypes');
    Route::put('masterfile/general-setup/membership-type/{id}', 'updateMembershipType');

    Route::post('masterfile/general-setup/nationality', 'createNationality');
    Route::get('masterfile/general-setup/nationality', 'getNationalities');
    Route::put('masterfile/general-setup/nationality/{id}', 'updateNationality');

    Route::post('masterfile/general-setup/position-type', 'createPositionType');
    Route::get('masterfile/general-setup/position-type', 'getPositionTypes');
    Route::put('masterfile/general-setup/position-type/{id}', 'updatePositionType');

    Route::post('masterfile/general-setup/prefix', 'createPrefix');
    Route::get('masterfile/general-setup/prefix', 'getPrefixes');
    Route::put('masterfile/general-setup/prefix/{id}', 'updatePrefix');

    Route::post('masterfile/general-setup/province', 'createProvince');
    Route::get('masterfile/general-setup/province', 'getProvinces');
    Route::put('masterfile/general-setup/province/{id}', 'updateProvince');

    Route::post('masterfile/general-setup/region', 'createRegion');
    Route::get('masterfile/general-setup/region', 'getRegions');
    Route::put('masterfile/general-setup/region/{id}', 'updateRegion');

    Route::post('masterfile/general-setup/region-province-city', 'createRegionProvinceCity');
    Route::get('masterfile/general-setup/region-province-city', 'getRegionProvinceCities');
    Route::put('masterfile/general-setup/region-province-city/{id}', 'updateRegionProvinceCity');

    Route::post('masterfile/general-setup/religion', 'createReligion');
    Route::get('masterfile/general-setup/religion', 'getReligions');
    Route::put('masterfile/general-setup/religion/{id}', 'updateReligion');

    Route::post('masterfile/general-setup/requirement', 'createRequirement');
    Route::get('masterfile/general-setup/requirement', 'getRequirements');
    Route::put('masterfile/general-setup/requirement/{id}', 'updateRequirement');

    Route::post('masterfile/general-setup/school', 'createSchool');
    Route::get('masterfile/general-setup/school', 'getSchools');
    Route::put('masterfile/general-setup/school/{id}', 'updateSchool');

    Route::post('masterfile/general-setup/skill', 'createSkill');
    Route::get('masterfile/general-setup/skill', 'getSkills');
    Route::put('masterfile/general-setup/skill/{id}', 'updateSkill');

    Route::post('masterfile/general-setup/suffix', 'createSuffix');
    Route::get('masterfile/general-setup/suffix', 'getSuffixes');
    Route::put('masterfile/general-setup/suffix/{id}', 'updateSuffix');

    Route::post('masterfile/general-setup/violation', 'createViolation');
    Route::get('masterfile/general-setup/violation', 'getViolations');
    Route::put('masterfile/general-setup/violation/{id}', 'updateViolation');
});