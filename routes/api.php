<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterfileController;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(MasterfileController::class)->group(function () {
    Route::post('masterfile/user-type', 'createUserType');
    Route::get('masterfile/user-type', 'getUserTypes');
});

Route::controller(UserController::class)->group(function () {
    Route::post('user', 'createUser');
    Route::get('user', 'getUsers');
});
