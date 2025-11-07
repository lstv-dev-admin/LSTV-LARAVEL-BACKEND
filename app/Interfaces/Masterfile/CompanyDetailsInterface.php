<?php

namespace App\Interfaces\Masterfile;

interface CompanyDetailsInterface
{
    public function createMfCompanyForm($data);
    public function getMfCompanyForms($filters);
    public function updateMfCompanyForm($id, $data);
    public function deleteMfCompanyForm($id);
    public function downloadMfCompanyForm($id);
    
    public function createMfHrForm($data);
    public function getMfHrForms($filters);
    public function updateMfHrForm($id, $data);
    public function deleteMfHrForm($id);
    public function downloadMfHrForm($id);

    public function createMfOrganizationalChart($data);
    public function getMfOrganizationalCharts($filters);
    public function updateMfOrganizationalChart($id, $data);
    public function deleteMfOrganizationalChart($id);
    public function isOrganizationalChartDescExist($desc);

    public function createCompanyInformation($data);
    public function createCompanySnapshot($data);
    public function createCompanyOverview($data);
    public function createCompanyPayrollInformation($data);
}
