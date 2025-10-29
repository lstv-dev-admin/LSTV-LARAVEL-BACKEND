<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Http\Requests\User\CreateUserFormRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function createUser(CreateUserFormRequest $request) {
        return $this->userService->createUser($request->validated());
    }

    public function getUsers() {
        return $this->userService->getUsers();
    }
}
