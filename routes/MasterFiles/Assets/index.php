<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\AssetsController;

Route::controller(AssetsController::class)->group(function () {
    Route::prefix('masterfile/assets')->group(function () {
        Route::post('asset-type', 'createMfAssetType');
        Route::get('asset-type', 'getMfAssetTypes');
        Route::put('asset-type/{id}', 'updateMfAssetType');
        Route::delete('asset-type/{id}', 'deleteMfAssetType');
        Route::post('asset-type/import', 'importMfAssetType');
    });
});
