<?php

namespace App\Services;

use App\Interfaces\IUserRepository;


class UserService 
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository) 
    {
        $this->userRepository = $userRepository;
    }

    public function createUser($newUser) {
        return $this->userRepository->createUser($newUser);
    }

    public function getUsers() {
        return $this->userRepository->getUsers();
    }
}
