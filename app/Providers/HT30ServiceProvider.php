<?php

namespace App\Providers;

use App\Services\HT30\KpiResultService;
use App\Services\HT30\KpiService;
use App\Services\HT30\ResultService;
use App\Services\HT30\TargetKpiService;
use App\Services\HT30\TargetService;
use App\Services\Impl\HT30\KpiResultServiceImpl;
use App\Services\Impl\HT30\KpiServiceImpl;
use App\Services\Impl\HT30\ResultServiceImpl;
use App\Services\Impl\HT30\TargetKpiServiceImpl;
use App\Services\Impl\HT30\TargetServiceImpl;
use Illuminate\Support\ServiceProvider;

class HT30ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            KpiService::class,
            KpiServiceImpl::class
        );
        $this->app->singleton(
            TargetService::class,
            TargetServiceImpl::class
        );
        $this->app->singleton(
            ResultService::class,
            ResultServiceImpl::class
        );
        $this->app->singleton(
            KpiResultService::class,
            KpiResultServiceImpl::class
        );
        $this->app->singleton(
            TargetKpiService::class,
            TargetKpiServiceImpl::class
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
