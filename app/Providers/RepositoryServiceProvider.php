<?php

namespace App\Providers;

use App\Repositories\Interfaces\Eloquent\PatientRepository;
use App\Repositories\Implementations\Eloquent\PatientRepositoryImpl;
use App\Repositories\Interfaces\Eloquent\UserRepository;
use App\Repositories\Implementations\Eloquent\UserRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PatientRepository::class, PatientRepositoryImpl::class);
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
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
