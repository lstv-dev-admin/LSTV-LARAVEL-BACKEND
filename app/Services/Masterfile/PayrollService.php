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
}