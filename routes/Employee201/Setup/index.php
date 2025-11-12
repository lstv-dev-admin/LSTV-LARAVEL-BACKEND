<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Employee201\SetupController;

Route::controller(SetupController::class)->group(function () {
    Route::prefix('employee201/setup')->group(function () {
        Route::post('onboarding-category', 'createSetupOnboardingCategory');
        Route::put('onboarding-category/{id}', 'updateSetupOnboardingCategory');
        Route::delete('onboarding-category/{id}', 'deleteSetupOnboardingCategory');

        Route::post('onboarding-category-task', 'createSetupOnboardingCategoryTask');
        Route::put('onboarding-category-task/{id}', 'updateSetupOnboardingCategoryTask');
        Route::delete('onboarding-category-task/{id}', 'deleteSetupOnboardingCategoryTask');
    });
});