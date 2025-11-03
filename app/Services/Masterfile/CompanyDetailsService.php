<?php 

namespace App\Services\Masterfile;

use App\Interfaces\Masterfile\CompanyDetailsInterface;

use App\Helpers\QueryResultHelper;

use Exception;

class CompanyDetailsService 
{
    protected $repository;

    public function __construct(CompanyDetailsInterface $repository)
    {
        $this->repository = $repository;
    }

    public function createCompanyProfile($data)
    {
        try {
            $this->repository->createCompanyProfile($data);
            return QueryResultHelper::successCreate('company profile');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCompanyProfiles() 
    {
        try {
            $data = $this->repository->getCompanyProfiles();
            return QueryResultHelper::successGet($data);
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateCompanyProfile($id, $data)
    {
        try {
            $this->repository->updateCompanyProfile($id, $data);
            return QueryResultHelper::successUpdate('company profile');
        } catch (Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCompanyPayrollInformation($data)
    {
        try {
            $this->repository->createCompanyPayrollInformation($data);
            return QueryResultHelper::successCreate('company payroll information');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
    
    public function updateCompanyPayrollInformation($id, $data)
    {
        try {
            $this->repository->updateCompanyPayrollInformation($id, $data);
            return QueryResultHelper::successUpdate('company payroll information');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCompanyPayrollInformations()
    {
        try {
            $data = $this->repository->getCompanyPayrollInformations();
            return QueryResultHelper::successGet($data);
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createCompanyForm($data)
    {
        try {
            $this->repository->createCompanyForm($data);
            return QueryResultHelper::successCreate('company form');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getCompanyForms()
    {
        try {
            $data = $this->repository->getCompanyForms();
            return QueryResultHelper::successGet($data);
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateCompanyForm($id, $data)
    {
        try {
            $this->repository->updateCompanyForm($id, $data);
            return QueryResultHelper::successUpdate('company form');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createHrForm($data)
    {
        try {
            $this->repository->createHrForm($data);
            return QueryResultHelper::successCreate('hr form');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getHrForms()
    {
        try {
            $data = $this->repository->getHrForms();
            return QueryResultHelper::successGet($data);
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateHrForm($id, $data)
    {
        try {
            $this->repository->updateHrForm($id, $data);
            return QueryResultHelper::successUpdate('hr form');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function createOrganizationalChart($data)
    {
        try {
            $this->repository->createOrganizationalChart($data);
            return QueryResultHelper::successCreate('organizational chart');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function getOrganizationalCharts()
    {
        try {
            $data = $this->repository->getOrganizationalCharts();
            return QueryResultHelper::successGet($data);
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }

    public function updateOrganizationalChart($id, $data)
    {
        try {
            $this->repository->updateOrganizationalChart($id, $data);
            return QueryResultHelper::successUpdate('organizational chart');
        } catch (\Exception $e) {
            return QueryResultHelper::error($e);
        }
    }
}