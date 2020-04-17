<?php

namespace App\Providers;

use App\Contracts\Repositories\CredentialRepositoryContract;
use App\Contracts\Services\ServerServiceFactoryContract;
use App\PersonalAccessToken;
use App\Repositories\CredentialRepository;
use App\Services\ServerServiceFactory;
use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ServerServiceFactoryContract::class, ServerServiceFactory::class);
        $this->app->bind(CredentialRepositoryContract::class, CredentialRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Sanctum::usePersonalAccessTokenModel(PersonalAccessToken::class);
    }
}
