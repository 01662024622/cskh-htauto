<?php

namespace App\Providers;

use App\Models\HT30\Target;
use App\Repositories\HT30\KpiRepository;
use App\Repositories\HT30\KpiResultRepository;
use App\Repositories\HT30\ResultRepository;
use App\Repositories\HT30\TargetKpiRepository;
use App\Repositories\HT30\TargetRepository;
use App\Repositories\Impl\HT30\KpiRepositoryImpl;
use App\Repositories\Impl\HT30\KpiResultRepositoryImpl;
use App\Repositories\Impl\HT30\ResultRepositoryImpl;
use App\Repositories\Impl\HT30\TargetKpiRepositoryImpl;
use App\Repositories\Impl\HT30\TargetRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class HT30RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            TargetRepository::class,
            TargetRepositoryImpl::class
        );
        $this->app->singleton(
            KpiRepository::class,
            KpiRepositoryImpl::class
        );
        $this->app->singleton(
            ResultRepository::class,
            ResultRepositoryImpl::class
        );
        $this->app->singleton(
            KpiResultRepository::class,
            KpiResultRepositoryImpl::class
        );
        $this->app->singleton(
            TargetKpiRepository::class,
            TargetKpiRepositoryImpl::class
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
