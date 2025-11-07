<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\SchedulingController;

Route::controller(SchedulingController::class)->group(function () {
    Route::prefix('masterfile/scheduling')->group(function () {
        Route::post('event-type', 'createMfEventType');
        Route::get('event-type', 'getMfEventTypes');
        Route::put('event-type/{id}', 'updateMfEventType');
        Route::delete('event-type/{id}', 'deleteMfEventType');
        Route::post('event-type/import', 'importMfEventType');
    });
});

