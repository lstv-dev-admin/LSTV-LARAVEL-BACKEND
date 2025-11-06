<?php 

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\CompanyDetailsInterface;

use App\Helpers\QueryResultHelper;

use Exception;
use Illuminate\Support\Facades\Storage;

class CompanyDetailsService 
{
    protected $repository;

    public function __construct(CompanyDetailsInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createMfCompanyForm($data)
    {
        return QueryResultHelper::successCreate('company form', $this->repository->createMfCompanyForm($data));
    }

    public function getMfCompanyForms($filters)
    {
        return QueryResultHelper::successGet('Company form', $this->repository->getMfCompanyForms($filters));
    }

    public function updateMfCompanyForm($id, $data)
    {
        try {
            $res = $this->repository->updateMfCompanyForm($id, $data);
            return QueryResultHelper::successUpdate('Company form', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfCompanyForm($id)
    {
        $this->repository->deleteMfCompanyForm($id);
        return QueryResultHelper::successDelete('Company form');
    }

    public function downloadMfCompanyForm($id)
    {
        try {
            $res = $this->repository->downloadMfCompanyForm($id);
            return $res;
        } catch (Exception $e) {
            return QueryResultHelper::errorDownload();
        }
    }

    public function createMfHrForm($data)
    {
        return QueryResultHelper::successCreate('HR form', $this->repository->createMfHrForm($data));
    }

    public function getMfHrForms($filters)
    {
        return QueryResultHelper::successGet('HR form', $this->repository->getMfHrForms($filters));
    }

    public function updateMfHrForm($id, $data)
    {
        try {
            $res = $this->repository->updateMfHrForm($id, $data);
            return QueryResultHelper::successUpdate('HR form', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfHrForm($id)
    {
        $this->repository->deleteMfHrForm($id);
        return QueryResultHelper::successDelete('HR form');
    }

    public function downloadMfHrForm($id)
    {
        try {
            $res = $this->repository->downloadMfHrForm($id);
            return $res;
        } catch (Exception $e) {
            return QueryResultHelper::errorDownload();
        }
    }

    public function createMfOrganizationalChart($data)
    {
        try {
            $res = $this->repository->createMfOrganizationalChart($data);
            return QueryResultHelper::successCreate('organizational chart', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getMfOrganizationalCharts($filters)
    {
        return QueryResultHelper::successGet('Organizational chart', $this->repository->getMfOrganizationalCharts($filters));
    }

    public function updateMfOrganizationalChart($id, $data)
    {
        try {
            $res = $this->repository->updateMfOrganizationalChart($id, $data);
            return QueryResultHelper::successUpdate('Organizational chart', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function deleteMfOrganizationalChart($id)
    {
        $this->repository->deleteMfOrganizationalChart($id);
        return QueryResultHelper::successDelete('Organizational chart');
    }

    public function createCompanyInformation($data)
    {
        try {
            $res = $this->repository->createCompanyInformation($data);
            return QueryResultHelper::successCreate('company information', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCompanySnapshot($data)
    {
        try {
            $res = $this->repository->createCompanySnapshot($data);
            return QueryResultHelper::successCreate('company snapshot', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCompanyOverview($data)
    {
        try {
            $res = $this->repository->createCompanyOverview($data);
            return QueryResultHelper::successCreate('company overview', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCompanyPayrollInformation($data)
    {
        try {
            $res = $this->repository->createCompanyPayrollInformation($data);
            return QueryResultHelper::successCreate('company payroll information', $res);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
}