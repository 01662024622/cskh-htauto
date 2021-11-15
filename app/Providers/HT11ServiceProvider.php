<?php

namespace App\Providers;

use App\Services\HT11\InsuranceService;
use App\Services\Impl\HT11\InsuranceServiceImpl;
use Illuminate\Support\ServiceProvider;

class HT11ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            InsuranceService::class,
            InsuranceServiceImpl::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
