<?php 

namespace App\Repositories;

use App\Interfaces\IMasterfileRepository;

use App\Models\{
    UserType,
};

class MasterfileRepository implements IMasterfileRepository
{
    public function createUserType($newUserType) {
        return UserType::create($newUserType);
    }

    public function getUserTypes() {
        return UserType::all();
    }
}