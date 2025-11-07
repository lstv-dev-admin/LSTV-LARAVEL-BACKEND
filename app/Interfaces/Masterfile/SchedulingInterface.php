<?php

namespace App\Interfaces\Masterfile;

interface SchedulingInterface
{
    public function createMfEventType($data);
    public function getMfEventTypes($filters);
    public function updateMfEventType($id, $data);
    public function deleteMfEventType($id);
    public function isEventTypeDescExist($desc);
}