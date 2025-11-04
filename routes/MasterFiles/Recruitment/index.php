<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\RecruitmentController;

Route::controller(RecruitmentController::class)->group(function () {
    Route::prefix('masterfile/recruitment')->group(function () {
        Route::post('organizational-chart', 'createOrganizationalChart');
        Route::get('organizational-chart', 'getOrganizationalChart');
        Route::put('organizational-chart/{id}', 'updateOrganizationalChart');

        Route::post('recruitment-reason', 'createRecruitmentReason');
        Route::get('recruitment-reason', 'getRecruitmentReasons');
        Route::put('recruitment-reason/{id}', 'updateRecruitmentReason');

        Route::post('job-vacancy-status', 'createJobVacancyStatus');
        Route::get('job-vacancy-status', 'getJobVacancyStatuses');
        Route::put('job-vacancy-status/{id}', 'updateJobVacancyStatus');

        Route::post('other-qualification', 'createOtherQualification');
        Route::get('other-qualification', 'getOtherQualifications');
        Route::put('other-qualification/{id}', 'updateOtherQualification');
    });
});

