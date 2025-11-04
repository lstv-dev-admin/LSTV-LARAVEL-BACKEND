<?php

namespace App\Http\Controllers\Utilities;

use App\Http\Controllers\Controller;

use App\Services\Utilities\UserFilesService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\Utilities\UserFiles\{
    CreateUserRequest,
    GetUserRequest,
    UpdateUserRequest
};
use App\Http\Requests\Utilities\UserFiles\SelectUserColumnsRequest;

class UserFilesController extends Controller
{
    protected $service;

    public function __construct(UserFilesService $service)
    {
        $this->service = $service;
    }

    public function createUser(CreateUserRequest $request)
    {
        return ResponseHelper::respond($this->service->createUser($request->validated()));
    }

    public function getUsers(GetUserRequest $request)
    {
        return ResponseHelper::respond($this->service->getUsers($request->validated()));
    }

    public function updateUser(string $id, UpdateUserRequest $request)
    {
        return ResponseHelper::respond($this->service->updateUser($id, $request->validated()));
    }

    public function selectUsersColumns(SelectUserColumnsRequest $request)
    {
        return ResponseHelper::respond($this->service->selectUsersColumns($request->validated()));
    }
}
