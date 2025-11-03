<?php

use App\Http\Controllers\Utilities\{
    UserFilesController
};

use Illuminate\Support\Facades\Route;

Route::controller(UserFilesController::class)->group(function () {
    Route::post('utilities/user-files', 'createUser');
    Route::get('utilities/user-files', 'getUsers');
    Route::put('utilities/user-files/{id}', 'updateUser');
});