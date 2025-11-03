<?php

namespace App\Repositories\Masterfile;

use App\Interfaces\Masterfile\CompanyDetailsInterface;

use App\Models\Masterfile\CompanyDetails\{
    CompanyProfile,
    CompanyPayrollInformation,
    CompanyForm,
    HrForm,
    OrganizationalChart
};

class CompanyDetailsRepository implements CompanyDetailsInterface
{
    public function createCompanyProfile($data)
    {
        return CompanyProfile::create($data);
    } 

    public function getCompanyProfiles()
    {
        return CompanyProfile::all();
    }
    
    public function updateCompanyProfile($id, $data)
    {
        CompanyProfile::findOrFail($id)->update($data);
    }

    public function createCompanyPayrollInformation($data)
    {
        return CompanyPayrollInformation::create($data);
    }
    
    public function updateCompanyPayrollInformation($id, $data)
    {
        CompanyPayrollInformation::findOrFail($id)->update($data);
    }

    public function getCompanyPayrollInformations()
    {
        return CompanyPayrollInformation::all();
    }

    public function createCompanyForm($data)
    {
        return CompanyForm::create($data);
    }

    public function getCompanyForms()
    {
        return CompanyForm::all();
    }

    public function updateCompanyForm($id, $data)
    {
        CompanyForm::findOrFail($id)->update($data);
    }

    public function createHrForm($data)
    {
        return HrForm::create($data);
    }

    public function getHrForms()
    {
        return HrForm::all();
    }

    public function updateHrForm($id, $data)
    {
        HrForm::findOrFail($id)->update($data);
    }

    public function createOrganizationalChart($data)
    {
        return OrganizationalChart::create($data);
    }

    public function getOrganizationalCharts()
    {
        return OrganizationalChart::all();
    }

    public function updateOrganizationalChart($id, $data)
    {
        OrganizationalChart::findOrFail($id)->update($data);
    }
}