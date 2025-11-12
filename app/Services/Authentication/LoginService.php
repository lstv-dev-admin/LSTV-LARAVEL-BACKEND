<?php 

namespace App\Services\Authentication;

use App\Interfaces\Authentication\LoginInterface;

class LoginService implements LoginInterface
{
    protected $repository;

    public function __construct(LoginInterface $repository)
    {
        $this->repository = $repository;
    }
}