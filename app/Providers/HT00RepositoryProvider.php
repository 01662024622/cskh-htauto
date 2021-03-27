<?php

namespace App\Providers;

use App\Repositories\HT00\CategoryRepository;
use App\Repositories\HT00\PostRepository;
use App\Repositories\Impl\HT00\CategoryRepositoryImpl;
use App\Repositories\Impl\HT00\PostRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class HT00RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CategoryRepository::class,
            CategoryRepositoryImpl::class
        );
        $this->app->singleton(
            PostRepository::class,
            PostRepositoryImpl::class
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
