<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\Masterfile\{
    GeneralSetupInterface
};

use App\Repositories\Masterfile\{
    GeneralSetupRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(GeneralSetupInterface::class, GeneralSetupRepository::class);
    }
}
