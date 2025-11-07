<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',

        api: [
            // MasterFiles
            __DIR__.'/../routes/utilities-api.php',
            __DIR__.'/../routes/MasterFiles/Employees/index.php',
            __DIR__.'/../routes/MasterFiles/CompanyDetails/index.php',
            __DIR__.'/../routes/MasterFiles/Recruitment/index.php',
            __DIR__.'/../routes/MasterFiles/GeneralSetup/index.php',
            __DIR__.'/../routes/MasterFiles/Timekeeping/index.php',
            __DIR__.'/../routes/MasterFiles/Payroll/index.php',
            __DIR__.'/../routes/MasterFiles/Performance/index.php',
            __DIR__.'/../routes/MasterFiles/Assets/index.php',
            
            // Pager
            __DIR__.'/../routes/Generals/pager-route.php',

            // Other API routes
            __DIR__.'/../routes/masterfile_api.php',
        ],

        // Broadcasting channels
        channels: __DIR__.'/../routes/channel.php',

        // Artisan commands
        commands: __DIR__.'/../routes/console.php',

        // Health check endpoint
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
