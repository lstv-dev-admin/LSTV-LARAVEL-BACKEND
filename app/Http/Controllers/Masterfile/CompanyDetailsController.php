<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\CompanyDetailsService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\Masterfile\CompanyDetails\{
    CreateCompanyProfileRequest,
    UpdateCompanyProfileRequest,
    CreateCompanyPayrollInformationRequest,
    UpdateCompanyPayrollInformationRequest,
    CreateCompanyFormRequest,
    UpdateCompanyFormRequest,
    CreateHrFormRequest,
    UpdateHrFormRequest,
    CreateOrganizationalChartRequest,
    UpdateOrganizationalChartRequest
};

class CompanyDetailsController extends Controller
{
    protected $service;

    public function __construct(CompanyDetailsService $service)
    {
        $this->service = $service;
    }

    public function createCompanyProfile(CreateCompanyProfileRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyProfile($request->validated()));
    }

    public function getCompanyProfiles()
    {
        return ResponseHelper::respond($this->service->getCompanyProfiles());
    }

    public function updateCompanyProfile(string $id, UpdateCompanyProfileRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCompanyProfile($id, $request->validated()));
    }

    public function createCompanyPayrollInformation(CreateCompanyPayrollInformationRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyPayrollInformation($request->validated()));
    }

    public function updateCompanyPayrollInformation(string $id, UpdateCompanyPayrollInformationRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCompanyPayrollInformation($id, $request->validated()));
    }

    public function getCompanyPayrollInformations()
    {
        return ResponseHelper::respond($this->service->getCompanyPayrollInformations());
    }

    public function createCompanyForm(CreateCompanyFormRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyForm($request->validated()));
    }

    public function updateCompanyForm(string $id, UpdateCompanyFormRequest $request)
    {
        return ResponseHelper::respond($this->service->updateCompanyForm($id, $request->validated()));
    }

    public function getCompanyForms()
    {
        return ResponseHelper::respond($this->service->getCompanyForms());
    }

    public function createHrForm(CreateHrFormRequest $request)
    {
        return ResponseHelper::respond($this->service->createHrForm($request->validated()));
    }

    public function updateHrForm(string $id, UpdateHrFormRequest $request)
    {
        return ResponseHelper::respond($this->service->updateHrForm($id, $request->validated()));
    }

    public function getHrForms()
    {
        return ResponseHelper::respond($this->service->getHrForms());
    }

    public function createOrganizationalChart(CreateOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->createOrganizationalChart($request->validated()));
    }

    public function updateOrganizationalChart(string $id, UpdateOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->updateOrganizationalChart($id, $request->validated()));
    }
    
    public function getOrganizationalCharts()
    {
        return ResponseHelper::respond($this->service->getOrganizationalCharts());
    }
}
