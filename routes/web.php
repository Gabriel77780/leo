<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
|------------------------- HomeController Routes --------------------------|
|--------------------------------------------------------------------------|
*/

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'getHomeView'])
        ->name('home');
});

/*
|--------------------------------------------------------------------------|
|------------------------- LoginController Routes -------------------------|
|--------------------------------------------------------------------------|
*/

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'getLoginView'])
        ->name('login');
    Route::post('/login', [AuthController::class, 'logIn']);
});

Route::get('/logout', [AuthController::class, 'logOut']);
