<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\GeneralSetupController;

Route::controller(GeneralSetupController::class)->group(function () {
    Route::prefix('masterfile/general-setup')->group(function () {
        Route::post('area', 'createArea');
        Route::get('area', 'getAreas');
        Route::put('area/{id}', 'updateArea');

        Route::post('blood-type', 'createBloodType');
        Route::get('blood-type', 'getBloodTypes');
        Route::put('blood-type/{id}', 'updateBloodType');

        Route::post('citizenship', 'createCitizenship');
        Route::get('citizenship', 'getCitizenships');
        Route::put('citizenship/{id}', 'updateCitizenship');

        Route::post('city', 'createCity');
        Route::get('city', 'getCities');
        Route::put('city/{id}', 'updateCity');

        Route::post('civil-status', 'createCivilStatus');
        Route::get('civil-status', 'getCivilStatuses');
        Route::put('civil-status/{id}', 'updateCivilStatus');

        Route::post('country', 'createCountry');
        Route::get('country', 'getCountries');
        Route::put('country/{id}', 'updateCountry');

        Route::post('employment-type', 'createEmploymentType');
        Route::get('employment-type', 'getEmploymentTypes');
        Route::put('employment-type/{id}', 'updateEmploymentType');

        Route::post('language', 'createLanguage');
        Route::get('language', 'getLanguages');
        Route::put('language/{id}', 'updateLanguage');

        Route::post('license-type', 'createLicenseType');
        Route::get('license-type', 'getLicenseTypes');
        Route::put('license-type/{id}', 'updateLicenseType');

        Route::post('membership-type', 'createMembershipType');
        Route::get('membership-type', 'getMembershipTypes');
        Route::put('membership-type/{id}', 'updateMembershipType');

        Route::post('nationality', 'createNationality');
        Route::get('nationality', 'getNationalities');
        Route::put('nationality/{id}', 'updateNationality');

        Route::post('position-type', 'createPositionType');
        Route::get('position-type', 'getPositionTypes');
        Route::put('position-type/{id}', 'updatePositionType');

        Route::post('prefix', 'createPrefix');
        Route::get('prefix', 'getPrefixes');
        Route::put('prefix/{id}', 'updatePrefix');

        Route::post('province', 'createProvince');
        Route::get('province', 'getProvinces');
        Route::put('province/{id}', 'updateProvince');

        Route::post('region', 'createRegion');
        Route::get('region', 'getRegions');
        Route::put('region/{id}', 'updateRegion');

        Route::post('region-province-city', 'createRegionProvinceCity');
        Route::get('region-province-city', 'getRegionProvinceCities');
        Route::put('region-province-city/{id}', 'updateRegionProvinceCity');

        Route::post('religion', 'createReligion');
        Route::get('religion', 'getReligions');
        Route::put('religion/{id}', 'updateReligion');

        Route::post('requirement', 'createRequirement');
        Route::get('requirement', 'getRequirements');
        Route::put('requirement/{id}', 'updateRequirement');

        Route::post('school', 'createSchool');
        Route::get('school', 'getSchools');
        Route::put('school/{id}', 'updateSchool');

        Route::post('skill', 'createSkill');
        Route::get('skill', 'getSkills');
        Route::put('skill/{id}', 'updateSkill');

        Route::post('suffix', 'createSuffix');
        Route::get('suffix', 'getSuffixes');
        Route::put('suffix/{id}', 'updateSuffix');

        Route::post('violation', 'createViolation');
        Route::get('violation', 'getViolations');
        Route::put('violation/{id}', 'updateViolation');
    });
});

