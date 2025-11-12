<?php

namespace App\Http\Controllers\Masterfile;

use App\Http\Controllers\Controller;

use App\Services\Masterfile\CompanyDetailsService;

use App\Helpers\ResponseHelper;

use App\Http\Requests\PaginationRequest;

use Illuminate\Http\Request;

use App\Http\Requests\Masterfile\CompanyDetails\{
    CreateMfCompanyFormRequest,
    CreateMfHrFormRequest,
    CreateMfOrganizationalChartRequest,
    UpdateMfOrganizationalChartRequest,
    CreateCompanyInformationRequest,
    CreateCompanySnapshotRequest,
    CreateCompanyOverviewRequest,
    CreateCompanyPayrollInformationRequest,
};

class CompanyDetailsController extends Controller
{
    protected $service;

    public function __construct(CompanyDetailsService $service)
    {
        $this->service = $service;
    }

    public function createMfCompanyForm(CreateMfCompanyFormRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfCompanyForm($request->validated()));
    }

    public function getMfCompanyForms(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfCompanyForms($filters));
    }

    public function deleteMfCompanyForm($id)
    {
        return ResponseHelper::respond($this->service->deleteMfCompanyForm($id));
    }

    public function downloadMfCompanyForm(string $id)
    {
        $res = $this->service->downloadMfCompanyForm($id);

        if (isset($res['status']) && !$res['status'])
            return ResponseHelper::respond($res);

        return response()->download($res['path'], $res['name']);
    }

    public function createMfHrForm(CreateMfHrFormRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfHrForm($request->validated()));
    }

    public function getMfHrForms(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfHrForms($filters));
    }

    public function deleteMfHrForm($id)
    {
        return ResponseHelper::respond($this->service->deleteMfHrForm($id));
    }

    public function downloadMfHrForm(string $id)
    {
        $res = $this->service->downloadMfHrForm($id);

        if (isset($res['status']) && !$res['status'])
            return ResponseHelper::respond($res);

        return response()->download($res['path'], $res['name']);
    }

    public function createMfOrganizationalChart(CreateMfOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->createMfOrganizationalChart($request->validated()));
    }

    public function getMfOrganizationalCharts(PaginationRequest $filters)
    {
        return ResponseHelper::respond($this->service->getMfOrganizationalCharts($filters));
    }

    public function updateMfOrganizationalChart(string $id, UpdateMfOrganizationalChartRequest $request)
    {
        return ResponseHelper::respond($this->service->updateMfOrganizationalChart($id, $request->validated()));
    }

    public function deleteMfOrganizationalChart($id)
    {
        return ResponseHelper::respond($this->service->deleteMfOrganizationalChart($id));
    }

    public function importMfOrganizationalChart(Request $request)
    {
        $res = $this->service->importMfOrganizationalChart($request->all());
        return response()->json($res, $res['status'] ? 200 : 409);
    }

    public function createCompanyInformation(CreateCompanyInformationRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyInformation($request->validated()));
    }

    public function createCompanySnapshot(CreateCompanySnapshotRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanySnapshot($request->validated()));
    }

    public function createCompanyOverview(CreateCompanyOverviewRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyOverview($request->validated()));
    }

    public function createCompanyPayrollInformation(CreateCompanyPayrollInformationRequest $request)
    {
        return ResponseHelper::respond($this->service->createCompanyPayrollInformation($request->validated()));
    }
}
