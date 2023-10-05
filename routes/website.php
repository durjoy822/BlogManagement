<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\UserController;
use App\Http\Controllers\Website_controllers\CommentsController;
use App\Http\Controllers\Website_controllers\WebsiteController;






Route::get('/', [WebsiteController::class,'Home'])->name('home');
Route::get('/blog/category/{id}', [WebsiteController::class,'blogCategory'])->name('blog.category');
Route::get('/blog/details/{id}', [WebsiteController::class,'blogDetails'])->name('blog.details');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');


Route::get('/user/auth', [UserController::class,'auth'])->name('user.auth');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/user/register/info', [UserController::class, 'info'])->name('user.info');
Route::post('/user/login/check', [UserController::class, 'loginCheck'])->name('user.login.check');
Route::post('/user/logout', [UserController::class, 'logout'])->name('user.logout');



Route::post('/comments/store', [CommentsController::class, 'commentsStore'])->name('comments');
Route::post('/replay/store', [CommentsController::class, 'replayStore'])->name('replay');






