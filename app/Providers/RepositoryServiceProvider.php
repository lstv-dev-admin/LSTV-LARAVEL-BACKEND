<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\{
    IMasterfileRepository,
    IUserRepository
};

use App\Repositories\{
    MasterfileRepository,
    UserRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(IMasterfileRepository::class, MasterfileRepository::class);
        $this->app->singleton(IUserRepository::class, UserRepository::class);
    }
}
