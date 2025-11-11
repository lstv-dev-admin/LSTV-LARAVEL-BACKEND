<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\EmployeesController;

Route::controller(EmployeesController::class)->group(function () {
    Route::prefix('masterfile/employees')->group(function () {
        Route::post('branch', 'createMfBranch');
        Route::get('branch', 'getMfBranches');
        Route::put('branch/{id}', 'updateMfBranch');
        Route::delete('branch/{id}', 'deleteMfBranch');

        Route::post('department', 'createMfDepartment');
        Route::get('department', 'getMfDepartments');
        Route::put('department/{id}', 'updateMfDepartment');
        Route::delete('department/{id}', 'deleteMfDepartment');

        Route::post('sub-department', 'createMfSubDepartment');
        Route::get('sub-department', 'getMfSubDepartments');
        Route::put('sub-department/{id}', 'updateMfSubDepartment');
        Route::delete('sub-department/{id}', 'deleteMfSubDepartment');

        Route::post('division', 'createMfDivision');
        Route::get('division', 'getMfDivisions');
        Route::put('division/{id}', 'updateMfDivision');
        Route::delete('division/{id}', 'deleteMfDivision');

        Route::post('cost-center', 'createMfCostCenter');
        Route::get('cost-center', 'getMfCostCenters');
        Route::put('cost-center/{id}', 'updateMfCostCenter');
        Route::delete('cost-center/{id}', 'deleteMfCostCenter');

        Route::post('cost-center-group', 'createMfCostCenterGroup');
        Route::get('cost-center-group', 'getMfCostCenterGroups');
        Route::put('cost-center-group/{id}', 'updateMfCostCenterGroup');
        Route::delete('cost-center-group/{id}', 'deleteMfCostCenterGroup');

        Route::post('employee-status', 'createMfEmployeeStatus');
        Route::get('employee-status', 'getMfEmployeeStatuses');
        Route::put('employee-status/{id}', 'updateMfEmployeeStatus');
        Route::delete('employee-status/{id}', 'deleteMfEmployeeStatus');

        Route::post('employment-status', 'createMfEmploymentStatus');
        Route::get('employment-status', 'getMfEmploymentStatuses');
        Route::put('employment-status/{id}', 'updateMfEmploymentStatus');
        Route::delete('employment-status/{id}', 'deleteMfEmploymentStatus');

        Route::post('experience-level', 'createMfExperienceLevel');
        Route::get('experience-level', 'getMfExperienceLevels');
        Route::put('experience-level/{id}', 'updateMfExperienceLevel');
        Route::delete('experience-level/{id}', 'deleteMfExperienceLevel');

        Route::post('incident-type', 'createMfIncidentType');
        Route::get('incident-type', 'getMfIncidentTypes');
        Route::put('incident-type/{id}', 'updateMfIncidentType');
        Route::delete('incident-type/{id}', 'deleteMfIncidentType');

        Route::post('job-rank-level', 'createMfJobRankLevel');
        Route::get('job-rank-level', 'getMfJobRankLevels');
        Route::put('job-rank-level/{id}', 'updateMfJobRankLevel');
        Route::delete('job-rank-level/{id}', 'deleteMfJobRankLevel');

        Route::post('medical-condition-type', 'createMfMedicalConditionType');
        Route::get('medical-condition-type', 'getMfMedicalConditionTypes');
        Route::put('medical-condition-type/{id}', 'updateMfMedicalConditionType');
        Route::delete('medical-condition-type/{id}', 'deleteMfMedicalConditionType');

        Route::post('medical-exam-type', 'createMfMedicalExamType');
        Route::get('medical-exam-type', 'getMfMedicalExamTypes');
        Route::put('medical-exam-type/{id}', 'updateMfMedicalExamType');
        Route::delete('medical-exam-type/{id}', 'deleteMfMedicalExamType');

        Route::post('non-payroll-benefit', 'createMfNonPayrollBenefit');
        Route::get('non-payroll-benefit', 'getMfNonPayrollBenefits');
        Route::put('non-payroll-benefit/{id}', 'updateMfNonPayrollBenefit');
        Route::delete('non-payroll-benefit/{id}', 'deleteMfNonPayrollBenefit');

        Route::post('proficiency-level', 'createMfProficiencyLevel');
        Route::get('proficiency-level', 'getMfProficiencyLevels');
        Route::put('proficiency-level/{id}', 'updateMfProficiencyLevel');
        Route::delete('proficiency-level/{id}', 'deleteMfProficiencyLevel');

        Route::post('civil-service-eligibility', 'createMfCivilServiceEligibility');
        Route::get('civil-service-eligibility', 'getMfCivilServiceEligibilities');
        Route::put('civil-service-eligibility/{id}', 'updateMfCivilServiceEligibility');
        Route::delete('civil-service-eligibility/{id}', 'deleteMfCivilServiceEligibility');

        Route::post('payroll-group', 'createMfPayrollGroup');
        Route::get('payroll-group', 'getMfPayrollGroups');
        Route::put('payroll-group/{id}', 'updateMfPayrollGroup');
        Route::delete('payroll-group/{id}', 'deleteMfPayrollGroup');

        Route::post('leave', 'createMfLeave');
        Route::get('leave', 'getMfLeaves');
        Route::put('leave/{id}', 'updateMfLeave');
        Route::delete('leave/{id}', 'deleteMfLeave');

        Route::post('position', 'createMfPosition');
        Route::get('position', 'getMfPositions');
        Route::put('position/{id}', 'updateMfPosition');
        Route::delete('position/{id}', 'deleteMfPosition');

        Route::post('separation-reason', 'createSeparationReason');
        Route::get('separation-reason', 'getSeparationReasons');
        Route::put('separation-reason/{id}', 'updateSeparationReason');
        Route::delete('separation-reason/{id}', 'deleteSeparationReason');
    });
});

