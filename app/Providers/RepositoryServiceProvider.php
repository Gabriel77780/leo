<?php

namespace App\Providers;

use App\Repositories\Interfaces\Eloquent\PatientRepository;
use App\Repositories\Implementations\Eloquent\PatientRepositoryImpl;
use App\Repositories\Interfaces\Eloquent\UserRepository;
use App\Repositories\Implementations\Eloquent\UserRepositoryImpl;
use App\Repositories\Interfaces\Eloquent\DentistRepository;
use App\Repositories\Implementations\Eloquent\DentistRepositoryImpl;
use App\Repositories\Interfaces\Eloquent\AppointmentRepository;
use App\Repositories\Implementations\Eloquent\AppointmentRepositoryImpl;

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
        $this->app->bind(DentistRepository::class, DentistRepositoryImpl::class);
        $this->app->bind(AppointmentRepository::class, AppointmentRepositoryImpl::class);
        // Don't forget to add use App\Repositories\
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
