<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\RecruitmentController;

Route::controller(RecruitmentController::class)->group(function () {
    Route::prefix('masterfile/recruitment')->group(function () {
        Route::post('recruitment-reason', 'createMfRecruitmentReason');
        Route::get('recruitment-reason', 'getMfRecruitmentReasons');
        Route::put('recruitment-reason/{id}', 'updateMfRecruitmentReason');
        Route::delete('recruitment-reason/{id}', 'deleteMfRecruitmentReason');

        Route::post('job-vacancy-status', 'createMfJobVacancyStatus');
        Route::get('job-vacancy-status', 'getMfJobVacancyStatuses');
        Route::put('job-vacancy-status/{id}', 'updateMfJobVacancyStatus');
        Route::delete('job-vacancy-status/{id}', 'deleteMfJobVacancyStatus');

        Route::post('other-qualification', 'createMfOtherQualification');
        Route::get('other-qualification', 'getMfOtherQualifications');
        Route::put('other-qualification/{id}', 'updateMfOtherQualification');
        Route::delete('other-qualification/{id}', 'deleteMfOtherQualification');

        Route::post('job-vacancy-status', 'createMfJobVacancyStatus');
        Route::get('job-vacancy-status', 'getMfJobVacancyStatuses');
        Route::put('job-vacancy-status/{id}', 'updateMfJobVacancyStatus');
        Route::delete('job-vacancy-status/{id}', 'deleteMfJobVacancyStatus');
    });
});

