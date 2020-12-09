<?php

namespace App\Providers;

use App\Repositories\Interfaces\Eloquent\PatientRepository;
use App\Repositories\Implementations\Eloquent\PatientRepositoryImpl;
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
