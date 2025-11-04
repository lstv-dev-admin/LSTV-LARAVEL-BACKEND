<?php

use Illuminate\Support\Facades\Route;

// Include module route files
require __DIR__ . '/GeneralSetup/index.php';
require __DIR__ . '/Employees/index.php';
require __DIR__ . '/CompanyDetails/index.php';
require __DIR__ . '/Recruitment/index.php';

// Additional routes
Route::resource('masterfile/employeeFile', \App\Http\Controllers\Masterfile\RecruitmentController::class);
