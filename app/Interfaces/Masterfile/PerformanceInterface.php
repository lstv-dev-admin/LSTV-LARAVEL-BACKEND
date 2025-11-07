<?php

namespace App\Interfaces\Masterfile;

interface PerformanceInterface
{
    public function createMfEvaluationLevel($data);
    public function getMfEvaluationLevels($filters);
    public function updateMfEvaluationLevel($id, $data);
    public function deleteMfEvaluationLevel($id);
    
    public function createMfFactor($data);
    public function getMfFactors($filters);
    public function updateMfFactor($id, $data);
    public function deleteMfFactor($id);
}