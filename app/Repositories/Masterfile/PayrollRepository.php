<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\PayrollInterface;

use App\Helpers\{
    PaginationHelper,
    MasterfileRecordIdHelper
};

use App\Models\Masterfile\Payroll\{
    MfBank,
    MfBankAccountType,
    MfTaxCode,
    MfCurrency,
    MfLoan,
    MfOtherDeduction,
    MfOtherEarning,
    MfPieceRate,
    MfAllowance,
};

class PayrollRepository implements PayrollInterface
{
    public function createMfBank($data)
    {
        $data['bank_id'] = MasterfileRecordIdHelper::getNextSeries(MfBank::getMasterfileCode());
        return MfBank::create($data);
    }

    public function getMfBanks($filters)
    {
        $searchableColumns = ['bank_desc'];
        return PaginationHelper::render(MfBank::class, $filters, $searchableColumns);
    }

    public function updateMfBank($id, $data)
    {
        MfBank::findOrFail($id)->update($data);
        return MfBank::findOrFail($id);
    }

    public function deleteMfBank($id)
    {
        return MfBank::findOrFail($id)->delete();
    }

    public function createMfBankAccountType($data)
    {
        $data['bank_account_type_id'] = MasterfileRecordIdHelper::getNextSeries(MfBankAccountType::getMasterfileCode());
        return MfBankAccountType::create($data);
    }

    public function getMfBankAccountTypes($filters)
    {
        $searchableColumns = ['bank_account_type_desc'];
        return PaginationHelper::render(MfBankAccountType::class, $filters, $searchableColumns);
    }

    public function updateMfBankAccountType($id, $data)
    {
        MfBankAccountType::findOrFail($id)->update($data);
        return MfBankAccountType::findOrFail($id);
    }

    public function deleteMfBankAccountType($id)
    {
        return MfBankAccountType::findOrFail($id)->delete();
    }

    public function createMfTaxCode($data)
    {
        $data['tax_code_id'] = MasterfileRecordIdHelper::getNextSeries(MfTaxCode::getMasterfileCode());
        return MfTaxCode::create($data);
    }

    public function getMfTaxCodes($filters)
    {
        $searchableColumns = ['tax_code_desc'];
        return PaginationHelper::render(MfTaxCode::class, $filters, $searchableColumns);
    }

    public function updateMfTaxCode($id, $data)
    {
        MfTaxCode::findOrFail($id)->update($data);
        return MfTaxCode::findOrFail($id);
    }

    public function deleteMfTaxCode($id)
    {
        return MfTaxCode::findOrFail($id)->delete();
    }

    public function createMfCurrency($data) 
    {
        $data['currency_id'] = MasterfileRecordIdHelper::getNextSeries(MfCurrency::getMasterfileCode());
        return MfCurrency::create($data);
    }

    public function getMfCurrencies($filters)
    {
        $searchableColumns = ['currency_desc', 'currency_rate'];
        return PaginationHelper::render(MfCurrency::class, $filters, $searchableColumns);
    }

    public function updateMfCurrency($id, $data)
    {
        MfCurrency::findOrFail($id)->update($data);
        return MfCurrency::findOrFail($id);
    }

    public function deleteMfCurrency($id)
    {
        return MfCurrency::findOrFail($id)->delete();
    }

    public function createMfLoan($data)
    {
        $data['loan_id'] = MasterfileRecordIdHelper::getNextSeries(MfLoan::getMasterfileCode());
        return MfLoan::create($data);
    }

    public function getMfLoans($filters)
    {
        $searchableColumns = ['loan_desc'];
        return PaginationHelper::render(MfLoan::class, $filters, $searchableColumns);
    }

    public function updateMfLoan($id, $data)
    {
        MfLoan::findOrFail($id)->update($data);
        return MfLoan::findOrFail($id);
    }

    public function deleteMfLoan($id)
    {
        return MfLoan::findOrFail($id)->delete();
    }

    public function createMfOtherDeduction($data)
    {
        $data['other_deduction_id'] = MasterfileRecordIdHelper::getNextSeries(MfOtherDeduction::getMasterfileCode());
        return MfOtherDeduction::create($data);
    }

    public function getMfOtherDeductions($filters)
    {
        $searchableColumns = ['other_deduction_desc'];
        return PaginationHelper::render(MfOtherDeduction::class, $filters, $searchableColumns);
    }

    public function updateMfOtherDeduction($id, $data)
    {
        MfOtherDeduction::findOrFail($id)->update($data);
        return MfOtherDeduction::findOrFail($id);
    }

    public function deleteMfOtherDeduction($id)
    {
        return MfOtherDeduction::findOrFail($id)->delete();
    }

    public function createMfOtherEarning($data)
    {
        $data['other_earning_id'] = MasterfileRecordIdHelper::getNextSeries(MfOtherEarning::getMasterfileCode());
        return MfOtherEarning::create($data);
    }

    public function getMfOtherEarnings($filters)
    {
        $searchableColumns = ['other_earning_desc'];
        return PaginationHelper::render(MfOtherEarning::class, $filters, $searchableColumns);
    }

    public function updateMfOtherEarning($id, $data)
    {
        MfOtherEarning::findOrFail($id)->update($data);
        return MfOtherEarning::findOrFail($id);
    }

    public function deleteMfOtherEarning($id)
    {
        return MfOtherEarning::findOrFail($id)->delete();
    }

    public function createMfPieceRate($data)
    {
        $data['piece_rate_id'] = MasterfileRecordIdHelper::getNextSeries(MfPieceRate::getMasterfileCode());
        return MfPieceRate::create($data);
    }

    public function getMfPieceRates($filters)
    {
        $searchableColumns = ['piece_rate_desc'];
        return PaginationHelper::render(MfPieceRate::class, $filters, $searchableColumns);
    }

    public function updateMfPieceRate($id, $data)
    {
        MfPieceRate::findOrFail($id)->update($data);
        return MfPieceRate::findOrFail($id);
    }

    public function deleteMfPieceRate($id)
    {
        return MfPieceRate::findOrFail($id)->delete();
    }

    public function createMfAllowance($data)
    {
        $data['allowance_id'] = MasterfileRecordIdHelper::getNextSeries(MfAllowance::getMasterfileCode());
        return MfAllowance::create($data);
    }

    public function getMfAllowances($filters)
    {
        $searchableColumns = ['allowance_desc'];
        return PaginationHelper::render(MfAllowance::class, $filters, $searchableColumns);
    }

    public function updateMfAllowance($id, $data)
    {
        MfAllowance::findOrFail($id)->update($data);
        return MfAllowance::findOrFail($id);
    }

    public function deleteMfAllowance($id)
    {
        return MfAllowance::findOrFail($id)->delete();
    }
}