<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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


Route::post('/public/authenticate', [LoginController::class, 'authenticate'])->name('public_authenticate');
Route::post('/public/user/create', [RegisterController::class, 'register'])->name('public_user_create');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'user'], function() {
    Route::middleware(['middleware' => 'role_or_permission:usuario_productos_nuevo'])->get('product', function () {
        return view('product.user-product-register');
    })->name('user_product_register');
});
