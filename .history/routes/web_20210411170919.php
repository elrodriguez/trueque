<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('home.main');
})->name('home');

Route::get('/login/pe', function () {
    return view('auth.public-login');
})->name('public_login');

Route::post('/public/authenticate', [LoginController::class, 'authenticate'])->name('public_authenticate');

Route::get('/register/pe', function () {
    return view('auth.public-register');
})->name('public_register');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
