<?php

namespace App\Providers\RepositoryServiceProvider;

use App\Interfaces\Utilities\{
    UserFilesInterface
};

use App\Repositories\Utilities\{
    UserFilesRepository
};

use Illuminate\Support\ServiceProvider;

class UtilitiesServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(UserFilesInterface::class, UserFilesRepository::class);
    }
}
