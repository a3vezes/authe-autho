<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisteredController;
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

Route::get('/', fn () => view('welcome'));

Route::get('/login', [LoginController::class, 'create'])->name('login.create')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.store')->middleware('guest');
Route::delete('/logout', [LoginController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::get('/users', [RegisteredController::class, 'index'])->name('registered.index')->middleware('auth');
Route::delete('/users/{user}', [RegisteredController::class, 'destroy'])->name('registered.destroy')->middleware('auth');
