<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\EmployeesController;

Route::controller(EmployeesController::class)->group(function () {
    Route::prefix('masterfile/employees')->group(function () {
        Route::post('department', 'createDepartment');
        Route::get('department', 'getDepartments');
        Route::put('department/{id}', 'updateDepartment');

        Route::post('sub-department', 'createSubDepartment');
        Route::get('sub-department', 'getSubDepartments');
        Route::put('sub-department/{id}', 'updateSubDepartment');

        Route::post('division', 'createDivision');
        Route::get('division', 'getDivisions');
        Route::put('division/{id}', 'updateDivision');

        Route::post('branch', 'createBranch');
        Route::get('branch', 'getBranches');
        Route::put('branch/{id}', 'updateBranch');

        Route::post('employment-status', 'createEmploymentStatus');
        Route::get('employment-status', 'getEmploymentStatuses');
        Route::put('employment-status/{id}', 'updateEmploymentStatus');

        Route::post('job-rank-level', 'createJobRankLevel');
        Route::get('job-rank-level', 'getJobRankLevels');
        Route::put('job-rank-level/{id}', 'updateJobRankLevel');

        Route::post('proficiency-level', 'createProficiencyLevel');
        Route::get('proficiency-level', 'getProficiencyLevels');
        Route::put('proficiency-level/{id}', 'updateProficiencyLevel');

        Route::post('separation-reason', 'createSeparationReason');
        Route::get('separation-reason', 'getSeparationReasons');
        Route::put('separation-reason/{id}', 'updateSeparationReason');

        Route::post('incident-type', 'createIncidentType');
        Route::get('incident-type', 'getIncidentTypes');
        Route::put('incident-type/{id}', 'updateIncidentType');

        Route::post('experience-level', 'createExperienceLevel');
        Route::get('experience-level', 'getExperienceLevels');
        Route::put('experience-level/{id}', 'updateExperienceLevel');

        Route::post('civil-service-eligibility', 'createCivilServiceEligibility');
        Route::get('civil-service-eligibility', 'getCivilServiceEligibilities');
        Route::put('civil-service-eligibility/{id}', 'updateCivilServiceEligibility');

        Route::post('cost-center', 'createCostCenter');
        Route::get('cost-center', 'getCostCenters');
        Route::put('cost-center/{id}', 'updateCostCenter');

        Route::post('cost-center-group', 'createCostCenterGroup');
        Route::get('cost-center-group', 'getCostCenterGroups');
        Route::put('cost-center-group/{id}', 'updateCostCenterGroup');

        Route::post('employee-status', 'createEmployeeStatus');
        Route::get('employee-status', 'getEmployeeStatuses');
        Route::put('employee-status/{id}', 'updateEmployeeStatus');

        Route::post('non-payroll-benefit', 'createNonPayrollBenefit');
        Route::get('non-payroll-benefit', 'getNonPayrollBenefits');
        Route::put('non-payroll-benefit/{id}', 'updateNonPayrollBenefit');

        Route::post('medical-exam-type', 'createMedicalExamType');
        Route::get('medical-exam-type', 'getMedicalExamTypes');
        Route::put('medical-exam-type/{id}', 'updateMedicalExamType');

        Route::post('medical-condition-type', 'createMedicalConditionType');
        Route::get('medical-condition-type', 'getMedicalConditionTypes');
        Route::put('medical-condition-type/{id}', 'updateMedicalConditionType');

        Route::post('position', 'createPosition');
        Route::get('position', 'getPositions');
        Route::put('position/{id}', 'updatePosition');
    });
});

