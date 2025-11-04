<?php

use App\Http\Controllers\Utilities\{
    UserFilesController
};

use Illuminate\Support\Facades\Route;

Route::controller(UserFilesController::class)->group(function () {
    Route::post('utilities/user-files/user', 'createUser');
    Route::get('utilities/user-files/user', 'getUsers');
    Route::put('utilities/user-files/user/{id}', 'updateUser');

    Route::get('utilities/user-files/user-type', 'getUserTypes');
    Route::get('utilities/user-files/status', 'getStatuses');
});
