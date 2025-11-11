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

    public function createMfCurrency($data);
    public function getMfCurrencies($filters);
    public function updateMfCurrency($id, $data);
    public function deleteMfCurrency($id);

    public function createMfLoan($data);
    public function getMfLoans($filters);
    public function updateMfLoan($id, $data);
    public function deleteMfLoan($id);

    public function createMfOtherDeduction($data);
    public function getMfOtherDeductions($filters);
    public function updateMfOtherDeduction($id, $data);
    public function deleteMfOtherDeduction($id);

    public function createMfOtherEarning($data);
    public function getMfOtherEarnings($filters);
    public function updateMfOtherEarning($id, $data);
    public function deleteMfOtherEarning($id);

    public function createMfPieceRate($data);
    public function getMfPieceRates($filters);
    public function updateMfPieceRate($id, $data);
    public function deleteMfPieceRate($id);

    public function createMfAllowance($data);
    public function getMfAllowances($filters);
    public function updateMfAllowance($id, $data);
    public function deleteMfAllowance($id);
}