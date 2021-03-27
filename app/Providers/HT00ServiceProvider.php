<?php

namespace App\Providers;

use App\Services\HT00\CategoryService;
use App\Services\HT00\PostService;
use App\Services\Impl\HT00\CategoryServiceImpl;
use App\Services\Impl\HT00\PostServiceImpl;
use Illuminate\Support\ServiceProvider;

class HT00ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CategoryService::class,
            CategoryServiceImpl::class
        );
        $this->app->singleton(
            PostService::class,
            PostServiceImpl::class
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
