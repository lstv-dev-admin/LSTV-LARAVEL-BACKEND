<?php 

namespace App\Interfaces;

interface IUserRepository 
{
    public function createUser($newUser);
    public function getUsers();
}
