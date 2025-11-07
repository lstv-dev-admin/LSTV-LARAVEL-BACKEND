<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\TrainingController;

Route::controller(TrainingController::class)->group(function () {
    Route::prefix('masterfile/training')->group(function () {
        Route::post('training-type', 'createMfTrainingType');
        Route::get('training-type', 'getMfTrainingTypes');
        Route::put('training-type/{id}', 'updateMfTrainingType');
        Route::delete('training-type/{id}', 'deleteMfTrainingType');
        Route::post('training-type/import', 'importMfTrainingType');
    });
});

