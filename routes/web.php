<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Select Products for Client
Route::get('/producto', [ProductController::class, 'index'])->name('client.product')->middleware('auth');
Route::post('/buy', [ProductController::class, 'buy'])->name('client.buy')->middleware('auth');

//List Products for Admin
Route::get('/producto-admin', [AdminProductController::class, 'index'])->name('admin.product')->middleware('auth');

