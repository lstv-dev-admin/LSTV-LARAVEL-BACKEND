<?php 

namespace App\Interfaces;

interface IMasterfileRepository 
{
    public function createUserType($newUserType);
    public function getUserTypes();
}