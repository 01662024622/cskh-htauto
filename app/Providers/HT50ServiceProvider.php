<?php

namespace App\Providers;

use App\Services\HT50\InforCustomerSurveyService;
use App\Services\HT50\SMSService;
use App\Services\HT50\SpeedSMSApiServerice;
use App\Services\Impl\HT50\InforCustomerSurveyServiceImpl;
use App\Services\Impl\HT50\SMSServiceImpl;
use App\Services\Impl\HT50\SpeedSMSApiServericeImpl;
use Illuminate\Support\ServiceProvider;

class HT50ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            SMSService::class,
            SMSServiceImpl::class
        );
        $this->app->singleton(
            InforCustomerSurveyService::class,
            InforCustomerSurveyServiceImpl::class
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
