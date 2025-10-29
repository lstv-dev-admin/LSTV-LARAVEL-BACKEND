<?php

namespace App\Services;

use App\Interfaces\IMasterfileRepository;

class MasterfileService 
{
    protected $masterfileRepository;

    public function __construct(IMasterfileRepository $masterfileRepository) 
    {
        $this->masterfileRepository = $masterfileRepository;
    }

    public function createUserType($newUserType) {
        return $this->masterfileRepository->createUserType($newUserType);
    }

    public function getUserTypes() {
        return $this->masterfileRepository->getUserTypes();
    }
}