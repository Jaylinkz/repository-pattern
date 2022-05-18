<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\iMemberRepo;
use App\Repository\QuoteRepo;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(iMemberRepo::class,QuoteRepo::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       $this->app->bind('App\Repository\iMemberRepo','App\Repository\QuoteRepo');
    }
}
