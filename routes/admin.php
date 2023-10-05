<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AudioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TagController;






Route::middleware(admin::class)->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/info', [RegisterController::class, 'info'])->name('info');
Route::post('/login/check', [RegisterController::class, 'loginCheck'])->name('login.check');

Route::get('/setting', [SettingController::class, 'setting'])->name('setting.general');
Route::post('/setting/update/{id}', [SettingController::class, 'settingUpdate'])->name('setting.update');

Route::get('/account', [AccountController::class, 'account'])->name('account.index');
Route::post('/account/update/{id}', [AccountController::class, 'accountUpdate'])->name('account.update');




Route::resource('/category', CategoryController::class);
Route::resource('/post', PostController::class);
Route::resource('/tag', TagController::class);
Route::resource('/video', VideoController::class);
Route::resource('/audio', AudioController::class);




