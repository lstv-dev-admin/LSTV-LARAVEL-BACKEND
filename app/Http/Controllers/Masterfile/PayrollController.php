<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\PayrollService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use App\Http\Requests\Masterfile\Payroll\{
    CreateMfBankAccountTypeRequest,
    CreateMfBankRequest,
    CreateMfTaxCodeRequest,
    CreateMfCurrencyRequest,
    UpdateMfBankAccountTypeRequest,
    UpdateMfBankRequest,
    UpdateMfTaxCodeRequest,
    UpdateMfCurrencyRequest,
    CreateMfLoanRequest,
    UpdateMfLoanRequest,
    CreateMfOtherDeductionRequest,
    UpdateMfOtherDeductionRequest,
    CreateMfOtherEarningRequest,
    UpdateMfOtherEarningRequest,
    CreateMfPieceRateRequest,
    UpdateMfPieceRateRequest,
    CreateMfAllowanceRequest,
    UpdateMfAllowanceRequest,
};

class PayrollController extends Controller
{
    protected $service;

    public function __construct(PayrollService $service)
    {
        $this->service = $service;
    }

    public function createMfBank(CreateMfBankRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfBank($request->validated()));
    }

    public function getMfBanks(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfBanks($filters));
    }

    public function updateMfBank(string $id, UpdateMfBankRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfBank($id, $request->validated()));
    }

    public function deleteMfBank($id)
    {
        return ResponseHelper::respond($this->service->deleteMfBank($id));
    }

    public function createMfBankAccountType(CreateMfBankAccountTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfBankAccountType($request->validated()));
    }

    public function getMfBankAccountTypes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfBankAccountTypes($filters));
    }

    public function updateMfBankAccountType(string $id, UpdateMfBankAccountTypeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfBankAccountType($id, $request->validated()));
    }

    public function deleteMfBankAccountType($id)
    {
        return ResponseHelper::respond($this->service->deleteMfBankAccountType($id));
    }

    public function createMfTaxCode(CreateMfTaxCodeRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfTaxCode($request->validated()));
    }

    public function getMfTaxCodes(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfTaxCodes($filters));
    }

    public function updateMfTaxCode(string $id, UpdateMfTaxCodeRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfTaxCode($id, $request->validated()));
    }

    public function deleteMfTaxCode($id)
    {
        return ResponseHelper::respond($this->service->deleteMfTaxCode($id));
    }

    public function createMfCurrency(CreateMfCurrencyRequest $request) 
    {
        return ResponseHelper::respond($this->service->createMfCurrency($request->validated()));
    }

    public function getMfCurrencies(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCurrencies($filters));
    }

    public function updateMfCurrency(string $id, UpdateMfCurrencyRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfCurrency($id, $request->validated()));
    }

    public function deleteMfCurrency($id)
    {
        return ResponseHelper::respond($this->service->deleteMfCurrency($id));
    }

    public function createMfLoan(CreateMfLoanRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfLoan($request->validated()));
    }

    public function getMfLoans(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfLoans($filters));
    }

    public function updateMfLoan(string $id, UpdateMfLoanRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfLoan($id, $request->validated()));
    }

    public function deleteMfLoan($id)
    {
        return ResponseHelper::respond($this->service->deleteMfLoan($id));
    }

    public function createMfOtherDeduction(CreateMfOtherDeductionRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfOtherDeduction($request->validated()));
    }

    public function getMfOtherDeductions(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfOtherDeductions($filters));
    }

    public function updateMfOtherDeduction(string $id, UpdateMfOtherDeductionRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfOtherDeduction($id, $request->validated()));
    }

    public function deleteMfOtherDeduction($id)
    {
        return ResponseHelper::respond($this->service->deleteMfOtherDeduction($id));
    }

    public function createMfOtherEarning(CreateMfOtherEarningRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfOtherEarning($request->validated()));
    }

    public function getMfOtherEarnings(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfOtherEarnings($filters));
    }

    public function updateMfOtherEarning(string $id, UpdateMfOtherEarningRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfOtherEarning($id, $request->validated()));
    }

    public function deleteMfOtherEarning($id)
    {
        return ResponseHelper::respond($this->service->deleteMfOtherEarning($id));
    }

    public function createMfPieceRate(CreateMfPieceRateRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfPieceRate($request->validated()));
    }

    public function getMfPieceRates(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfPieceRates($filters));
    }

    public function updateMfPieceRate(string $id, UpdateMfPieceRateRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfPieceRate($id, $request->validated()));
    }

    public function deleteMfPieceRate($id)
    {
        return ResponseHelper::respond($this->service->deleteMfPieceRate($id));
    }

    public function createMfAllowance(CreateMfAllowanceRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfAllowance($request->validated()));
    }

    public function getMfAllowances(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfAllowances($filters));
    }

    public function updateMfAllowance(string $id, UpdateMfAllowanceRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfAllowance($id, $request->validated()));
    }

    public function deleteMfAllowance($id)
    {
        return ResponseHelper::respond($this->service->deleteMfAllowance($id));
    }
}