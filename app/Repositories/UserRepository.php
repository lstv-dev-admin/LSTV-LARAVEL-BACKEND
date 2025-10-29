<?php 

namespace App\Repositories;

use App\Interfaces\IUserRepository;

use App\Models\User;

class UserRepository implements IUserRepository
{
    public function createUser($newUser) {
        return User::create($newUser);
    }

    public function getUsers() {
        return User::all();
    }
}
