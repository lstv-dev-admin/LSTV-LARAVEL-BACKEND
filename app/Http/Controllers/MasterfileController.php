<?php

namespace App\Http\Controllers;

use App\Services\MasterfileService;

use App\Http\Requests\Masterfile\{
    CreateUserTypeRequest,
};

class MasterfileController extends Controller
{
    protected $masterfileService;

    public function __construct(MasterfileService $masterfileService) {
        $this->masterfileService = $masterfileService;
    }

    public function createUserType(CreateUserTypeRequest $request) {
        return $this->masterfileService->createUserType($request->validated());
    }

    public function getUserTypes() {
        return $this->masterfileService->getUserTypes();
    }
}
