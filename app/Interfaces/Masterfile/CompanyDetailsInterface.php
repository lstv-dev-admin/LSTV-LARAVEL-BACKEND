<?php

namespace App\Interfaces\Masterfile;

interface CompanyDetailsInterface
{
    public function createCompanyProfile($data);
    public function getCompanyProfiles();
    public function updateCompanyProfile($id, $data);

    public function createCompanyPayrollInformation($data);
    public function updateCompanyPayrollInformation($id, $data);
    public function getCompanyPayrollInformations();

    public function createCompanyForm($data);
    public function getCompanyForms();
    public function updateCompanyForm($id, $data);

    public function createHrForm($data);
    public function getHrForms();
    public function updateHrForm($id, $data);

    public function createOrganizationalChart($data);
    public function getOrganizationalCharts();
    public function updateOrganizationalChart($id, $data);
}
