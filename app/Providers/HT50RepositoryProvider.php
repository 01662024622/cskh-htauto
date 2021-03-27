<?php

namespace App\Providers;

use App\Repositories\HT50\InforCustomerSurveyRepository;
use App\Repositories\HT50\SMSRepository;
use App\Repositories\Impl\HT50\InforCustomerSurveyRepositoryImpl;
use App\Repositories\Impl\HT50\SMSRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class HT50RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            InforCustomerSurveyRepository::class,
            InforCustomerSurveyRepositoryImpl::class
        );
        $this->app->singleton(
            SMSRepository::class,
            SMSRepositoryImpl::class
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
