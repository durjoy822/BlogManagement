<?php

use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [DashboardController::class, 'login'])->name('login');

Route::resource('/category', CategoryController::class);
Route::resource('/video', VideoController::class);
Route::resource('/audio', AudioController::class);
