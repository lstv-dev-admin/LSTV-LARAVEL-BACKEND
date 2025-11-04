<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\CompanyDetailsController;

Route::controller(CompanyDetailsController::class)->group(function () {
    Route::prefix('masterfile/company-details')->group(function () {
        Route::post('company-profile', 'createCompanyProfile');
        Route::get('company-profile', 'getCompanyProfiles');
        Route::put('company-profile/{id}', 'updateCompanyProfile');

        Route::post('company-payroll-information', 'createCompanyPayrollInformation');
        Route::get('company-payroll-information', 'getCompanyPayrollInformations');
        Route::put('company-payroll-information/{id}', 'updateCompanyPayrollInformation');

        Route::post('company-form', 'createCompanyForm');
        Route::get('company-form', 'getCompanyForms');
        Route::put('company-form/{id}', 'updateCompanyForm');

        Route::post('hr-form', 'createHrForm');
        Route::get('hr-form', 'getHrForms');
        Route::put('hr-form/{id}', 'updateHrForm');

        Route::post('organizational-chart', 'createOrganizationalChart');
        Route::get('organizational-chart', 'getOrganizationalCharts');
        Route::put('organizational-chart/{id}', 'updateOrganizationalChart');
    });
});
