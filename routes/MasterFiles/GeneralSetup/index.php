<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\GeneralSetupController;

Route::controller(GeneralSetupController::class)->group(function () {
    Route::prefix('masterfile/general-setup')->group(function () {
        Route::post('area', 'createMfArea');
        Route::get('area', 'getMfAreas');
        Route::put('area/{id}', 'updateMfArea');

        Route::post('award', 'createMfAward');
        Route::get('award', 'getMfAwards');
        Route::put('award/{id}', 'updateMfAward');

        Route::post('blood-type', 'createMfBloodType');
        Route::get('blood-type', 'getMfBloodTypes');
        Route::put('blood-type/{id}', 'updateMfBloodType');

        Route::post('citizenship', 'createMfCitizenship');
        Route::get('citizenship', 'getMfCitizenships');
        Route::put('citizenship/{id}', 'updateMfCitizenship');

        Route::post('city', 'createMfCity');
        Route::get('city', 'getMfCities');
        Route::put('city/{id}', 'updateMfCity');

        Route::post('civil-status', 'createMfCivilStatus');
        Route::get('civil-status', 'getMfCivilStatuses');
        Route::put('civil-status/{id}', 'updateMfCivilStatus');

        Route::post('country', 'createMfCountry');
        Route::get('country', 'getMfCountries');
        Route::put('country/{id}', 'updateMfCountry');

        Route::post('employment-type', 'createMfEmploymentType');
        Route::get('employment-type', 'getMfEmploymentTypes');
        Route::put('employment-type/{id}', 'updateMfEmploymentType');

        Route::post('language', 'createMfLanguage');
        Route::get('language', 'getMfLanguages');
        Route::put('language/{id}', 'updateMfLanguage');

        Route::post('license-type', 'createMfLicenseType');
        Route::get('license-type', 'getMfLicenseTypes');
        Route::put('license-type/{id}', 'updateMfLicenseType');

        Route::post('membership-type', 'createMfMembershipType');
        Route::get('membership-type', 'getMfMembershipTypes');
        Route::put('membership-type/{id}', 'updateMfMembershipType');

        Route::post('nationality', 'createMfNationality');
        Route::get('nationality', 'getMfNationalities');
        Route::put('nationality/{id}', 'updateMfNationality');

        Route::post('position-type', 'createMfPositionType');
        Route::get('position-type', 'getMfPositionTypes');
        Route::put('position-type/{id}', 'updateMfPositionType');

        Route::post('prefix', 'createMfPrefix');
        Route::get('prefix', 'getMfPrefixes');
        Route::put('prefix/{id}', 'updateMfPrefix');

        Route::post('province', 'createMfProvince');
        Route::get('province', 'getMfProvinces');
        Route::put('province/{id}', 'updateMfProvince');

        Route::post('region', 'createMfRegion');
        Route::get('region', 'getMfRegions');
        Route::put('region/{id}', 'updateMfRegion');

        Route::post('religion', 'createMfReligion');
        Route::get('religion', 'getMfReligions');
        Route::put('religion/{id}', 'updateMfReligion');

        Route::post('requirement', 'createMfRequirement');
        Route::get('requirement', 'getMfRequirements');
        Route::put('requirement/{id}', 'updateMfRequirement');

        Route::post('school', 'createMfSchool');
        Route::get('school', 'getMfSchools');
        Route::put('school/{id}', 'updateMfSchool');

        Route::post('skill', 'createMfSkill');
        Route::get('skill', 'getMfSkills');
        Route::put('skill/{id}', 'updateMfSkill');

        Route::post('suffix', 'createMfSuffix');
        Route::get('suffix', 'getMfSuffixes');
        Route::put('suffix/{id}', 'updateMfSuffix');

        Route::post('violation', 'createMfViolation');
        Route::get('violation', 'getMfViolations');
        Route::put('violation/{id}', 'updateMfViolation');
    });
});

