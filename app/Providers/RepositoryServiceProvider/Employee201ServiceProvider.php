<?php

namespace App\Providers\RepositoryServiceProvider;

use App\Interfaces\Employee201\SetupInterface;

use App\Repositories\Employee201\SetupRepository;

use Illuminate\Support\ServiceProvider;

class Employee201ServiceProvider extends ServiceProvider {
    public function register(): void
    {
        $this->app->singleton(SetupInterface::class, SetupRepository::class);
    }
}