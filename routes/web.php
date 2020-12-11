<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------|
|------------------------------ Guest Routes ------------------------------|
|--------------------------------------------------------------------------|
|----------- Routes that need to go through the guest middleware ----------|
|--------------------------------------------------------------------------|
*/

Route::middleware('guest')->group(function () {

    //----------------------- AuthController Routes ----------------------//

    Route::get('/', [UserController::class, 'getLoginView'])
        ->name('login');

    Route::post('/login', [UserController::class, 'logIn']);
});

/*
|--------------------------------------------------------------------------|
|------------------------------ Auth Routes -------------------------------|
|--------------------------------------------------------------------------|
|----------- Routes that need to go through the auth middleware -----------|
|--------------------------------------------------------------------------|
*/

Route::middleware('auth')->group(function () {

    //----------------------- AuthController Routes ----------------------//

    Route::get('/logout', [UserController::class, 'logOut']);

    //----------------------- HomeController Routes -----------------------//

    Route::get('/home', [HomeController::class, 'getHomeView'])
        ->name('home');

    //--------------------- PermissionController Routes -------------------//

    Route::get('/permissions', [PermissionController::class, 'permissions']);

    //--------------------- PatientController Routes ----------------------//

    Route::get('/patient', [PatientController::class, 'getPatientView']);
    Route::post('/patient/save', [PatientController::class, 'save']);

    //--------------------- DentistController Routes ----------------------//

    Route::get('/dentist', [DentistController::class, 'getDentistView']);
    Route::post('/dentist/save', [DentistController::class, 'save']);
});
