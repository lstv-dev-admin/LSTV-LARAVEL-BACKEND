<?php

use App\Http\Controllers\Masterfile\{
    GeneralSetupController,
    EmployeesController,
    CompanyDetailsController,
    RecruitmentController
};

use Illuminate\Support\Facades\Route;

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

Route::controller(EmployeesController::class)->group(function () {
    Route::post('masterfile/employees/department', 'createDepartment');
    Route::get('masterfile/employees/department', 'getDepartments');
    Route::put('masterfile/employees/department/{id}', 'updateDepartment');

    Route::post('masterfile/employees/sub-department', 'createSubDepartment');
    Route::get('masterfile/employees/sub-department', 'getSubDepartments');
    Route::put('masterfile/employees/sub-department/{id}', 'updateSubDepartment');

    Route::post('masterfile/employees/division', 'createDivision');
    Route::get('masterfile/employees/division', 'getDivisions');
    Route::put('masterfile/employees/division/{id}', 'updateDivision');

    Route::post('masterfile/employees/branch', 'createBranch');
    Route::get('masterfile/employees/branch', 'getBranches');
    Route::put('masterfile/employees/branch/{id}', 'updateBranch');

    Route::post('masterfile/employees/employment-status', 'createEmploymentStatus');
    Route::get('masterfile/employees/employment-status', 'getEmploymentStatuses');
    Route::put('masterfile/employees/employment-status/{id}', 'updateEmploymentStatus');

    Route::post('masterfile/employees/job-rank-level', 'createJobRankLevel');
    Route::get('masterfile/employees/job-rank-level', 'getJobRankLevels');
    Route::put('masterfile/employees/job-rank-level/{id}', 'updateJobRankLevel');

    Route::post('masterfile/employees/proficiency-level', 'createProficiencyLevel');
    Route::get('masterfile/employees/proficiency-level', 'getProficiencyLevels');
    Route::put('masterfile/employees/proficiency-level/{id}', 'updateProficiencyLevel');

    Route::post('masterfile/employees/separation-reason', 'createSeparationReason');
    Route::get('masterfile/employees/separation-reason', 'getSeparationReasons');
    Route::put('masterfile/employees/separation-reason/{id}', 'updateSeparationReason');

    Route::post('masterfile/employees/incident-type', 'createIncidentType');
    Route::get('masterfile/employees/incident-type', 'getIncidentTypes');
    Route::put('masterfile/employees/incident-type/{id}', 'updateIncidentType');

    Route::post('masterfile/employees/experience-level', 'createExperienceLevel');
    Route::get('masterfile/employees/experience-level', 'getExperienceLevels');
    Route::put('masterfile/employees/experience-level/{id}', 'updateExperienceLevel');

    Route::post('masterfile/employees/civil-service-eligibility', 'createCivilServiceEligibility');
    Route::get('masterfile/employees/civil-service-eligibility', 'getCivilServiceEligibilities');
    Route::put('masterfile/employees/civil-service-eligibility/{id}', 'updateCivilServiceEligibility');

    Route::post('masterfile/employees/cost-center', 'createCostCenter');
    Route::get('masterfile/employees/cost-center', 'getCostCenters');
    Route::put('masterfile/employees/cost-center/{id}', 'updateCostCenter');

    Route::post('masterfile/employees/cost-center-group', 'createCostCenterGroup');
    Route::get('masterfile/employees/cost-center-group', 'getCostCenterGroups');
    Route::put('masterfile/employees/cost-center-group/{id}', 'updateCostCenterGroup');

    Route::post('masterfile/employees/employee-status', 'createEmployeeStatus');
    Route::get('masterfile/employees/employee-status', 'getEmployeeStatuses');
    Route::put('masterfile/employees/employee-status/{id}', 'updateEmployeeStatus');

    Route::post('masterfile/employees/non-payroll-benefit', 'createNonPayrollBenefit');
    Route::get('masterfile/employees/non-payroll-benefit', 'getNonPayrollBenefits');
    Route::put('masterfile/employees/non-payroll-benefit/{id}', 'updateNonPayrollBenefit');

    Route::post('masterfile/employees/medical-exam-type', 'createMedicalExamType');
    Route::get('masterfile/employees/medical-exam-type', 'getMedicalExamTypes');
    Route::put('masterfile/employees/medical-exam-type/{id}', 'updateMedicalExamType');

    Route::post('masterfile/employees/medical-condition-type', 'createMedicalConditionType');
    Route::get('masterfile/employees/medical-condition-type', 'getMedicalConditionTypes');
    Route::put('masterfile/employees/medical-condition-type/{id}', 'updateMedicalConditionType');

    Route::post('masterfile/employees/position', 'createPosition');
    Route::get('masterfile/employees/position', 'getPositions');
    Route::put('masterfile/employees/position/{id}', 'updatePosition');
});

Route::controller(CompanyDetailsController::class)->group(function () {
    Route::post('masterfile/company-details/company-profile', 'createCompanyProfile');
    Route::get('masterfile/company-details/company-profile', 'getCompanyProfiles');
    Route::put('masterfile/company-details/company-profile/{id}', 'updateCompanyProfile');

    Route::post('masterfile/company-details/company-payroll-information', 'createCompanyPayrollInformation');
    Route::get('masterfile/company-details/company-payroll-information', 'getCompanyPayrollInformations');
    Route::put('masterfile/company-details/company-payroll-information/{id}', 'updateCompanyPayrollInformation');

    Route::post('masterfile/company-details/company-form', 'createCompanyForm');
    Route::get('masterfile/company-details/company-form', 'getCompanyForms');
    Route::put('masterfile/company-details/company-form/{id}', 'updateCompanyForm');

    Route::post('masterfile/company-details/hr-form', 'createHrForm');
    Route::get('masterfile/company-details/hr-form', 'getHrForms');
    Route::put('masterfile/company-details/hr-form/{id}', 'updateHrForm');

    Route::post('masterfile/company-details/organizational-chart', 'createOrganizationalChart');
    Route::get('masterfile/company-details/organizational-chart', 'getOrganizationalCharts');
    Route::put('masterfile/company-details/organizational-chart/{id}', 'updateOrganizationalChart');
});

Route::controller(RecruitmentController::class)->group(function () {
    Route::post('masterfile/recruitment/organizational-chart', 'createOrganizationalChart');
    Route::get('masterfile/recruitment/organizational-chart', 'getOrganizationalChart');
    Route::put('masterfile/recruitment/organizational-chart/{id}', 'updateOrganizationalChart');
    Route::post('masterfile/recruitment/recruitment-reason', 'createRecruitmentReason');
    Route::get('masterfile/recruitment/recruitment-reason', 'getRecruitmentReasons');
    Route::put('masterfile/recruitment/recruitment-reason/{id}', 'updateRecruitmentReason');
    Route::post('masterfile/recruitment/job-vacancy-status', 'createJobVacancyStatus');
    Route::get('masterfile/recruitment/job-vacancy-status', 'getJobVacancyStatuses');
    Route::put('masterfile/recruitment/job-vacancy-status/{id}', 'updateJobVacancyStatus');
    Route::post('masterfile/recruitment/other-qualification', 'createOtherQualification');
    Route::get('masterfile/recruitment/other-qualification', 'getOtherQualifications');
    Route::put('masterfile/recruitment/other-qualification/{id}', 'updateOtherQualification');
});
