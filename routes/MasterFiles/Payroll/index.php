<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Masterfile\PayrollController;

Route::controller(PayrollController::class)->group(function () {
    Route::prefix('masterfile/payroll')->group(function () {
        Route::post('bank', 'createMfBank');
        Route::get('bank', 'getMfBanks');
        Route::put('bank/{id}', 'updateMfBank');
        Route::delete('bank/{id}', 'deleteMfBank');

        Route::post('bank-account-type', 'createMfBankAccountType');
        Route::get('bank-account-type', 'getMfBankAccountTypes');
        Route::put('bank-account-type/{id}', 'updateMfBankAccountType');
        Route::delete('bank-account-type/{id}', 'deleteMfBankAccountType');

        Route::post('tax-code', 'createMfTaxCode');
        Route::get('tax-code', 'getMfTaxCodes');
        Route::put('tax-code/{id}', 'updateMfTaxCode');
        Route::delete('tax-code/{id}', 'deleteMfTaxCode');
    });
});

