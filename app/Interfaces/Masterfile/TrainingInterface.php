<?php

namespace App\Interfaces\Masterfile;

interface TrainingInterface
{
    public function createMfTrainingType($data);
    public function getMfTrainingTypes($filters);
    public function updateMfTrainingType($id, $data);
    public function deleteMfTrainingType($id);
    public function isTrainingTypeDescExist($desc);
}