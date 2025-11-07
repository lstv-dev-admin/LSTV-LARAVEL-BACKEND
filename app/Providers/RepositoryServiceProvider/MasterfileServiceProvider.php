<?php

namespace App\Providers\RepositoryServiceProvider;

use App\Interfaces\Masterfile\{
    EmployeesInterface,
    GeneralSetupInterface,
    CompanyDetailsInterface,
    RecruitmentInterface,
    TimekeepingInterface,
    PayrollInterface,
    PerformanceInterface,
    AssetsInterface,
    TrainingInterface,
    DocumentInterface,
    SchedulingInterface
};

use App\Repositories\Masterfile\{
    EmployeesRepository,
    GeneralSetupRepository,
    CompanyDetailsRepository,
    RecruitmentRepository,
    TimekeepingRepository,
    PayrollRepository,
    PerformanceRepository,
    AssetsRepository,
    TrainingRepository,
    DocumentRepository,
    SchedulingRepository
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
        $this->app->singleton(TimekeepingInterface::class, TimekeepingRepository::class);
        $this->app->singleton(PayrollInterface::class, PayrollRepository::class);
        $this->app->singleton(PerformanceInterface::class, PerformanceRepository::class);
        $this->app->singleton(AssetsInterface::class, AssetsRepository::class);
        $this->app->singleton(TrainingInterface::class, TrainingRepository::class);
        $this->app->singleton(DocumentInterface::class, DocumentRepository::class);
        $this->app->singleton(SchedulingInterface::class, SchedulingRepository::class);
    }
}
