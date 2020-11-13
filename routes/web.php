<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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

Route::get('/', function () {
    return view('home');
})->middleware(Authenticate::class);

Route::get('/home', function () {
    return view('home');
});

Route::get(
    '/login',
    [LoginController::class, 'login']
)->name('login');


Route::post(
    '/login/enter',
    [LoginController::class, 'enter']
);
