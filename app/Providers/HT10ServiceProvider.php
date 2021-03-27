<?php

namespace App\Providers;
use App\Services\HT10\CustomerFeedbackService;
use App\Services\HT10\FeedbackPRService;
use App\Services\HT10\FeedbackService;
use App\Services\HT10\FeedbackWarehouseService;
use App\Services\Impl\HT10\CustomerFeedbackServiceImpl;
use App\Services\Impl\HT10\FeedbackPRServiceImpl;
use App\Services\Impl\HT10\FeedbackServiceImpl;
use App\Services\Impl\HT10\FeedbackWarehouseServiceImpl;
use App\Services\Impl\HT10\ReportMarketServiceImpl;
use App\Services\Impl\HT10\ReviewServiceImpl;
use App\Services\HT10\ReportMarketService;
use App\Services\HT10\ReviewService;
use Illuminate\Support\ServiceProvider;

class HT10ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton(
            ReviewService::class,
            ReviewServiceImpl::class
        );
        $this->app->singleton(
            FeedbackService::class,
            FeedbackServiceImpl::class
        );
        $this->app->singleton(
            CustomerFeedbackService::class,
            CustomerFeedbackServiceImpl::class
        );
        $this->app->singleton(
            FeedbackWarehouseService::class,
            FeedbackWarehouseServiceImpl::class
        );
        $this->app->singleton(
            FeedbackPRService::class,
            FeedbackPRServiceImpl::class
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
