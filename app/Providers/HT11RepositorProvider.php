<?php

namespace App\Providers;

use App\Repositories\HT11\InsuranceRepository;
use App\Repositories\Impl\HT11\InsuranceRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class HT11RepositorProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            InsuranceRepository::class,
            InsuranceRepositoryImpl::class
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
