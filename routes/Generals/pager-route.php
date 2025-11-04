<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\GeneralSetupController;

Route::controller(GeneralSetupController::class)->group(function () {
    Route::prefix('general-setup')->group(function () {
        Route::post('area', 'createArea');
        Route::get('area', 'getAreas');
        Route::put('area/{id}', 'updateArea');
    });
});
