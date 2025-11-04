<?php

use App\Http\Pager\PagerController;
use Illuminate\Support\Facades\Route;


Route::controller(PagerController::class)->group(function () {
    Route::prefix('pager')->group(function () {
        Route::POST('/store', 'store')->name('pager.add');
        Route::GET('/show/{record_id}', 'show')->name('pager.edit');
        Route::POST('/update', 'update')->name('pager.update');
        Route::GET('/delete/{record_id}', 'delete')->name('pager.delete');
        // Route::GET('/export', 'exportReport')->name('pager.export');
        // Route::POST('/import/pager', 'import')->name('pager.import');
        // Route::GET('/export-errors', 'exportErrors')->name('pager.exportErrors');
        // Route::POST('/export-template-header', 'exportTemplateHeader')->name('pager.exportTemplateHeader');
    });
});
