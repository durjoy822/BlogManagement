<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [DashboardController::class, 'login'])->name('login');

Route::resource('/category', CategoryController::class);
