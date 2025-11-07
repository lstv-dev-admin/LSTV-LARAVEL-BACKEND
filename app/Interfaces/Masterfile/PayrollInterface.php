<?php

namespace App\Interfaces\Masterfile;

interface PayrollInterface
{
    public function createMfBank($data);
    public function getMfBanks($filters);
    public function updateMfBank($id, $data);
    public function deleteMfBank($id);

    public function createMfBankAccountType($data);
    public function getMfBankAccountTypes($filters);
    public function updateMfBankAccountType($id, $data);
    public function deleteMfBankAccountType($id);
    
    public function createMfTaxCode($data);
    public function getMfTaxCodes($filters);
    public function updateMfTaxCode($id, $data);
    public function deleteMfTaxCode($id);
}