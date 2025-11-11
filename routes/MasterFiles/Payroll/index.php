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

        Route::post('currency', 'createMfCurrency');
        Route::get('currency', 'getMfCurrencies');
        Route::put('currency/{id}', 'updateMfCurrency');
        Route::delete('currency/{id}', 'deleteMfCurrency');

        Route::post('loan', 'createMfLoan');
        Route::get('loan', 'getMfLoans');
        Route::put('loan/{id}', 'updateMfLoan');
        Route::delete('loan/{id}', 'deleteMfLoan');

        Route::post('other-deduction', 'createMfOtherDeduction');
        Route::get('other-deduction', 'getMfOtherDeductions');
        Route::put('other-deduction/{id}', 'updateMfOtherDeduction');
        Route::delete('other-deduction/{id}', 'deleteMfOtherDeduction');

        Route::post('other-earning', 'createMfOtherEarning');
        Route::get('other-earning', 'getMfOtherEarnings');
        Route::put('other-earning/{id}', 'updateMfOtherEarning');
        Route::delete('other-earning/{id}', 'deleteMfOtherEarning');

        Route::post('piece-rate', 'createMfPieceRate');
        Route::get('piece-rate', 'getMfPieceRates');
        Route::put('piece-rate/{id}', 'updateMfPieceRate');
        Route::delete('piece-rate/{id}', 'deleteMfPieceRate');

        Route::post('allowance', 'createMfAllowance');
        Route::get('allowance', 'getMfAllowances');
        Route::put('allowance/{id}', 'updateMfAllowance');
        Route::delete('allowance/{id}', 'deleteMfAllowance');
    });
});

