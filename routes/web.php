<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Models\Permission;
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

    Route::get('/', [AuthController::class, 'getLoginView'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'logIn']);
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

    Route::get('/logout', [AuthController::class, 'logOut']);

    //----------------------- HomeController Routes -----------------------//

    Route::get('/home', [HomeController::class, 'getHomeView'])
        ->name('home');

    //--------------------- PermissionController Routes -------------------//

    Route::get('/permissions', [PermissionController::class, 'permissions']);

    //-------------------- PatientController Routes --------------------//

    Route::get('/patient', function () {
        return view('patient');
    });
});
