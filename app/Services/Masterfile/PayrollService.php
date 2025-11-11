<?php

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\PayrollInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class PayrollService
{
    protected $repository;

    public function __construct(PayrollInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfBank($data)
    {
        try {
            $res = $this->repository->createMfBank($data);
            return QueryResultHelper::successCreate('bank', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfBanks($filters)
    {
        return QueryResultHelper::successGet('Bank', $this->repository->getMfBanks($filters));
    }

    public function updateMfBank($id, $data)
    {
        try {
            $res = $this->repository->updateMfBank($id, $data);
            return QueryResultHelper::successUpdate('Bank', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfBank($id)
    {
        $this->repository->deleteMfBank($id);
        return QueryResultHelper::successDelete('Bank');
    }

    public function createMfBankAccountType($data)
    {
        try {
            $res = $this->repository->createMfBankAccountType($data);
            return QueryResultHelper::successCreate('bank account type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfBankAccountTypes($filters)
    {
        return QueryResultHelper::successGet('Bank Account Type', $this->repository->getMfBankAccountTypes($filters));
    }

    public function updateMfBankAccountType($id, $data)
    {
        try {
            $res = $this->repository->updateMfBankAccountType($id, $data);
            return QueryResultHelper::successUpdate('Bank Account Type', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfBankAccountType($id)
    {
        $this->repository->deleteMfBankAccountType($id);
        return QueryResultHelper::successDelete('Bank Account Type');
    }

    public function createMfTaxCode($data)
    {
        try {
            $res = $this->repository->createMfTaxCode($data);
            return QueryResultHelper::successCreate('tax code', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfTaxCodes($filters)
    {
        return QueryResultHelper::successGet('Tax Code', $this->repository->getMfTaxCodes($filters));
    }

    public function updateMfTaxCode($id, $data)
    {
        try {
            $res = $this->repository->updateMfTaxCode($id, $data);
            return QueryResultHelper::successUpdate('Tax Code', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfTaxCode($id)
    {
        $this->repository->deleteMfTaxCode($id);
        return QueryResultHelper::successDelete('Tax Code');
    }

    public function createMfCurrency($data)
    {
        try {
            $res = $this->repository->createMfCurrency($data);
            return QueryResultHelper::successCreate('currency', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfCurrencies($filters)
    {
        return QueryResultHelper::successGet('Currency', $this->repository->getMfCurrencies($filters));
    }

    public function updateMfCurrency($id, $data)
    {
        try {
            $res = $this->repository->updateMfCurrency($id, $data);
            return QueryResultHelper::successUpdate('Currency', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfCurrency($id)
    {
        $this->repository->deleteMfCurrency($id);
        return QueryResultHelper::successDelete('Currency');
    }

    public function createMfLoan($data)
    {
        try {
            $res = $this->repository->createMfLoan($data);
            return QueryResultHelper::successCreate('loan', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfLoans($filters)
    {
        return QueryResultHelper::successGet('Loan', $this->repository->getMfLoans($filters));
    }

    public function updateMfLoan($id, $data)
    {
        try {
            $res = $this->repository->updateMfLoan($id, $data);
            return QueryResultHelper::successUpdate('Loan', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfLoan($id)
    {
        $this->repository->deleteMfLoan($id);
        return QueryResultHelper::successDelete('Loan');
    }

    public function createMfOtherDeduction($data)
    {
        try {
            $res = $this->repository->createMfOtherDeduction($data);
            return QueryResultHelper::successCreate('other deduction', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfOtherDeductions($filters)
    {
        return QueryResultHelper::successGet('Other Deduction', $this->repository->getMfOtherDeductions($filters));
    }

    public function updateMfOtherDeduction($id, $data)
    {
        try {
            $res = $this->repository->updateMfOtherDeduction($id, $data);
            return QueryResultHelper::successUpdate('Other Deduction', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfOtherDeduction($id)
    {
        $this->repository->deleteMfOtherDeduction($id);
        return QueryResultHelper::successDelete('Other Deduction');
    }
    
    public function createMfOtherEarning($data)
    {
        try {
            $res = $this->repository->createMfOtherEarning($data);
            return QueryResultHelper::successCreate('other earning', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfOtherEarnings($filters)
    {
        return QueryResultHelper::successGet('Other Earning', $this->repository->getMfOtherEarnings($filters));
    }

    public function updateMfOtherEarning($id, $data)
    {
        try {
            $res = $this->repository->updateMfOtherEarning($id, $data);
            return QueryResultHelper::successUpdate('Other Earning', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfOtherEarning($id)
    {
        $this->repository->deleteMfOtherEarning($id);
        return QueryResultHelper::successDelete('Other Earning');
    }

    public function createMfPieceRate($data)
    {
        try {
            $res = $this->repository->createMfPieceRate($data);
            return QueryResultHelper::successCreate('piece rate', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfPieceRates($filters)
    {
        return QueryResultHelper::successGet('Piece Rate', $this->repository->getMfPieceRates($filters));
    }

    public function updateMfPieceRate($id, $data)
    {
        try {
            $res = $this->repository->updateMfPieceRate($id, $data);
            return QueryResultHelper::successUpdate('Piece Rate', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfPieceRate($id)
    {
        $this->repository->deleteMfPieceRate($id);
        return QueryResultHelper::successDelete('Piece Rate');
    }

    public function createMfAllowance($data)
    {
        try {
            $res = $this->repository->createMfAllowance($data);
            return QueryResultHelper::successCreate('allowance', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function getMfAllowances($filters)
    {
        return QueryResultHelper::successGet('Allowance', $this->repository->getMfAllowances($filters));
    }

    public function updateMfAllowance($id, $data)
    {
        try {
            $res = $this->repository->updateMfAllowance($id, $data);
            return QueryResultHelper::successUpdate('Allowance', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfAllowance($id)
    {
        $this->repository->deleteMfAllowance($id);
        return QueryResultHelper::successDelete('Allowance');
    }
}