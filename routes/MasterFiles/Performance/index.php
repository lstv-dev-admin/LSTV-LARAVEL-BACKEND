<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\PerformanceController;

Route::controller(PerformanceController::class)->group(function () {
    Route::prefix('masterfile/performance')->group(function () {
        Route::post('evaluation-level', 'createMfEvaluationLevel');
        Route::get('evaluation-level', 'getMfEvaluationLevels');
        Route::put('evaluation-level/{id}', 'updateMfEvaluationLevel');
        Route::delete('evaluation-level/{id}', 'deleteMfEvaluationLevel');

        Route::post('factor', 'createMfFactor');
        Route::get('factor', 'getMfFactors');
        Route::put('factor/{id}', 'updateMfFactor');
        Route::delete('factor/{id}', 'deleteMfFactor');
    });
});
