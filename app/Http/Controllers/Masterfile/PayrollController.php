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
    UpdateMfBankAccountTypeRequest,
    UpdateMfBankRequest,
    UpdateMfTaxCodeRequest
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
}