<?php

namespace App\Providers\RepositoryServiceProvider;

use App\Interfaces\Masterfile\{
    EmployeesInterface,
    GeneralSetupInterface,
    CompanyDetailsInterface,
    RecruitmentInterface
};

use App\Repositories\Masterfile\{
    EmployeesRepository,
    GeneralSetupRepository,
    CompanyDetailsRepository,
    RecruitmentRepository
};

use Illuminate\Support\ServiceProvider;

class MasterfileServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(GeneralSetupInterface::class, GeneralSetupRepository::class);
        $this->app->singleton(EmployeesInterface::class, EmployeesRepository::class);
        $this->app->singleton(CompanyDetailsInterface::class, CompanyDetailsRepository::class);
        $this->app->singleton(RecruitmentInterface::class, RecruitmentRepository::class);
    }
}
