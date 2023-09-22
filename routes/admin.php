<?php

use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Authentication\RegisterController;

Route::middleware(admin::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/info', [RegisterController::class, 'info'])->name('info');
Route::post('/login/check', [RegisterController::class, 'loginCheck'])->name('login.check');


Route::resource('/category', CategoryController::class);
Route::resource('/video', VideoController::class);
Route::resource('/audio', AudioController::class);



