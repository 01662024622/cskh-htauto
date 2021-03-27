<?php

namespace App\Providers;

use App\Repositories\HT10\CustomerFeedbackRepository;
use App\Repositories\HT10\FeedbackRepository;
use App\Repositories\HT10\FeedbackWarehouseRepository;
use App\Repositories\HT10\ReviewRepository;
use App\Repositories\Impl\HT00\FeedbackPRRepository;
use App\Repositories\Impl\HT10\CustomerFeedbackRepositoryImpl;
use App\Repositories\Impl\HT10\FeedbackPRRepositoryImpl;
use App\Repositories\Impl\HT10\FeedbackRepositoryImpl;
use App\Repositories\Impl\HT10\FeedbackWarehouseRepositoryImpl;
use App\Repositories\Impl\HT10\ReviewRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class HT10RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(
            ReviewRepository::class,
            ReviewRepositoryImpl::class
        );
        $this->app->singleton(
            FeedbackRepository::class,
            FeedbackRepositoryImpl::class
        );
        $this->app->singleton(
            CustomerFeedbackRepository::class,
            CustomerFeedbackRepositoryImpl::class
        );
        $this->app->singleton(
            FeedbackWarehouseRepository::class,
            FeedbackWarehouseRepositoryImpl::class
        );
        $this->app->singleton(
            FeedbackPRRepository::class,
            FeedbackPRRepositoryImpl::class
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
