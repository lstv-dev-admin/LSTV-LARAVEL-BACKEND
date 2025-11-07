<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\GeneralSetupController;

Route::controller(GeneralSetupController::class)->group(function () {
    Route::prefix('masterfile/general-setup')->group(function () {
        Route::post('area', 'createMfArea');
        Route::get('area', 'getMfAreas');
        Route::put('area/{id}', 'updateMfArea');
        Route::delete('area/{id}', 'deleteMfArea');
        Route::post('area/import', 'importMfArea');

        Route::post('award', 'createMfAward');
        Route::get('award', 'getMfAwards');
        Route::put('award/{id}', 'updateMfAward');
        Route::delete('award/{id}', 'deleteMfAward');
        Route::post('award/import', 'importMfAward');

        Route::post('blood-type', 'createMfBloodType');
        Route::get('blood-type', 'getMfBloodTypes');
        Route::put('blood-type/{id}', 'updateMfBloodType');
        Route::delete('blood-type/{id}', 'deleteMfBloodType');
        Route::post('blood-type/import', 'importMfBloodType');

        Route::post('citizenship', 'createMfCitizenship');
        Route::get('citizenship', 'getMfCitizenships');
        Route::put('citizenship/{id}', 'updateMfCitizenship');
        Route::delete('citizenship/{id}', 'deleteMfCitizenship');
        Route::post('citizenship/import', 'importMfCitizenship');

        Route::post('city', 'createMfCity');
        Route::get('city', 'getMfCities');
        Route::put('city/{id}', 'updateMfCity');
        Route::delete('city/{id}', 'deleteMfCity');
        Route::post('city/import', 'importMfCity');

        Route::post('civil-status', 'createMfCivilStatus');
        Route::get('civil-status', 'getMfCivilStatuses');
        Route::put('civil-status/{id}', 'updateMfCivilStatus');
        Route::delete('civil-status/{id}', 'deleteMfCivilStatus');
        Route::post('civil-status/import', 'importMfCivilStatus');
        
        Route::post('country', 'createMfCountry');
        Route::get('country', 'getMfCountries');
        Route::put('country/{id}', 'updateMfCountry');
        Route::delete('country/{id}', 'deleteMfCountry');
        Route::post('country/import', 'importMfCountry');
        
        Route::post('employment-type', 'createMfEmploymentType');
        Route::get('employment-type', 'getMfEmploymentTypes');
        Route::put('employment-type/{id}', 'updateMfEmploymentType');
        Route::delete('employment-type/{id}', 'deleteMfEmploymentType');
        Route::post('employment-type/import', 'importMfEmploymentType');
        
        Route::post('language', 'createMfLanguage');
        Route::get('language', 'getMfLanguages');
        Route::put('language/{id}', 'updateMfLanguage');
        Route::delete('language/{id}', 'deleteMfLanguage');
        Route::post('language/import', 'importMfLanguage');
        
        Route::post('license-type', 'createMfLicenseType');
        Route::get('license-type', 'getMfLicenseTypes');
        Route::put('license-type/{id}', 'updateMfLicenseType');
        Route::delete('license-type/{id}', 'deleteMfLicenseType');
        Route::post('license-type/import', 'importMfLicenseType');
        
        Route::post('membership-type', 'createMfMembershipType');
        Route::get('membership-type', 'getMfMembershipTypes');
        Route::put('membership-type/{id}', 'updateMfMembershipType');
        Route::delete('membership-type/{id}', 'deleteMfMembershipType');
        Route::post('membership-type/import', 'importMfMembershipType');
        
        Route::post('nationality', 'createMfNationality');
        Route::get('nationality', 'getMfNationalities');
        Route::put('nationality/{id}', 'updateMfNationality');
        Route::delete('nationality/{id}', 'deleteMfNationality');
        Route::post('nationality/import', 'importMfNationality');
        
        Route::post('position-type', 'createMfPositionType');
        Route::get('position-type', 'getMfPositionTypes');
        Route::put('position-type/{id}', 'updateMfPositionType');
        Route::delete('position-type/{id}', 'deleteMfPositionType');
        Route::post('position-type/import', 'importMfPositionType');
        
        Route::post('prefix', 'createMfPrefix');
        Route::get('prefix', 'getMfPrefixes');
        Route::put('prefix/{id}', 'updateMfPrefix');
        Route::delete('prefix/{id}', 'deleteMfPrefix');
        Route::post('prefix/import', 'importMfPrefix');
        
        Route::post('province', 'createMfProvince');
        Route::get('province', 'getMfProvinces');
        Route::put('province/{id}', 'updateMfProvince');
        Route::delete('province/{id}', 'deleteMfProvince');
        Route::post('province/import', 'importMfProvince');
        
        Route::post('region', 'createMfRegion');
        Route::get('region', 'getMfRegions');
        Route::put('region/{id}', 'updateMfRegion');
        Route::delete('region/{id}', 'deleteMfRegion');
        Route::post('region/import', 'importMfRegion');
        
        Route::post('religion', 'createMfReligion');
        Route::get('religion', 'getMfReligions');
        Route::put('religion/{id}', 'updateMfReligion');
        Route::delete('religion/{id}', 'deleteMfReligion');
        Route::post('religion/import', 'importMfReligion');

        Route::post('requirement', 'createMfRequirement');
        Route::get('requirement', 'getMfRequirements');
        Route::put('requirement/{id}', 'updateMfRequirement');
        Route::delete('requirement/{id}', 'deleteMfRequirement');
        Route::post('requirement/import', 'importMfRequirement');
        
        Route::post('school', 'createMfSchool');
        Route::get('school', 'getMfSchools');
        Route::put('school/{id}', 'updateMfSchool');
        Route::delete('school/{id}', 'deleteMfSchool');
        Route::post('school/import', 'importMfSchool');
        
        Route::post('skill', 'createMfSkill');
        Route::get('skill', 'getMfSkills');
        Route::put('skill/{id}', 'updateMfSkill');
        Route::delete('skill/{id}', 'deleteMfSkill');
        Route::post('skill/import', 'importMfSkill');
        
        Route::post('suffix', 'createMfSuffix');
        Route::get('suffix', 'getMfSuffixes');
        Route::put('suffix/{id}', 'updateMfSuffix');
        Route::delete('suffix/{id}', 'deleteMfSuffix');
        Route::post('suffix/import', 'importMfSuffix');
        
        Route::post('violation', 'createMfViolation');
        Route::get('violation', 'getMfViolations');
        Route::put('violation/{id}', 'updateMfViolation');
        Route::delete('violation/{id}', 'deleteMfViolation');
        Route::post('violation/import', 'importMfViolation');
    });
});

