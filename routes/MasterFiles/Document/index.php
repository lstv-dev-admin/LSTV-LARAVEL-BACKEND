<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\DocumentController;

Route::controller(DocumentController::class)->group(function () {
    Route::prefix('masterfile/document')->group(function () {
        Route::post('document-type', 'createMfDocumentType');
        Route::get('document-type', 'getMfDocumentTypes');
        Route::put('document-type/{id}', 'updateMfDocumentType');
        Route::delete('document-type/{id}', 'deleteMfDocumentType');
        Route::post('document-type/import', 'importMfDocumentType');
    });
});

