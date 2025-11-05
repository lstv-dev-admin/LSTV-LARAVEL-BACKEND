<?php

namespace App\Interfaces\Utilities;

interface UserFilesInterface 
{
    public function createUser($data);
    public function getUsers($filters);
    public function updateUser($id, $data);

    public function getUserTypes();

    public function getStatuses();
}