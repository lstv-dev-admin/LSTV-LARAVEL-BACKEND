<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\TimekeepingController;

Route::controller(TimekeepingController::class)->group(function () {
    Route::prefix('masterfile/timekeeping')->group(function () {
        Route::post('authorization-reason', 'createMfAuthorizationReason');
        Route::get('authorization-reason', 'getMfAuthorizationReasons');
        Route::put('authorization-reason/{id}', 'updateMfAuthorizationReason');
        Route::delete('authorization-reason/{id}', 'deleteMfAuthorizationReason');
    });
});

