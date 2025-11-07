<?php

namespace App\Interfaces\Masterfile;

interface TimekeepingInterface
{
    public function createMfAuthorizationReason($data);
    public function getMfAuthorizationReasons($filters);
    public function updateMfAuthorizationReason($id, $data);
    public function deleteMfAuthorizationReason($id);
}