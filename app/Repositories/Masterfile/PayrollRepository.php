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
}