<?php

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

Route::get('/', [App\Http\Controllers\ButikController::class, 'index'])->name('index');
Route::get('/search', [App\Http\Controllers\ButikController::class, 'search'])->name('search');

Auth::routes();
Route::post('/logowanie',[App\Http\Controllers\ButikController::class, 'login'])->name('login');
Route::get('/lista',[App\Http\Controllers\ButikController::class, 'lista'])->name('lista');
Route::get('lista/filtr',[App\Http\Controllers\ButikController::class, 'listaproduktow'])->name('listaproduktow');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
