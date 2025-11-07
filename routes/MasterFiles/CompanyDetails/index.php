<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Masterfile\CompanyDetailsController;

Route::controller(CompanyDetailsController::class)->group(function () {
    Route::prefix('masterfile/company-details')->group(function () {
        Route::post('company-form', 'createMfCompanyForm');
        Route::get('company-form', 'getMfCompanyForms');
        Route::put('company-form/{id}', 'updateMfCompanyForm');
        Route::delete('company-form/{id}', 'deleteMfCompanyForm');
        Route::get('company-form/download/{id}', 'downloadMfCompanyForm');
        
        Route::post('hr-form', 'createMfHrForm');
        Route::get('hr-form', 'getMfHrForms');
        Route::put('hr-form/{id}', 'updateMfHrForm');
        Route::delete('hr-form/{id}', 'deleteMfHrForm');
        Route::get('hr-form/download/{id}', 'downloadMfHrForm');
        
        Route::post('organizational-chart', 'createMfOrganizationalChart');
        Route::get('organizational-chart', 'getMfOrganizationalCharts');
        Route::put('organizational-chart/{id}', 'updateMfOrganizationalChart');
        Route::delete('organizational-chart/{id}', 'deleteMfOrganizationalChart');
        Route::post('organizational-chart/import', 'importMfOrganizationalChart');
        
        Route::post('company-information', 'createCompanyInformation');
        Route::post('company-snapshot', 'createCompanySnapshot');
        Route::post('company-overview', 'createCompanyOverview');
        Route::post('company-payroll-information', 'createCompanyPayrollInformation');
    });
});
