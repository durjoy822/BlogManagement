<?php
use App\Http\Controllers\Website_controllers\WebsiteController;
use Illuminate\Support\Facades\Route;






Route::get('/', [WebsiteController::class,'Home'])->name('home');
Route::get('/blog/category/{id}', [WebsiteController::class,'blogCategory'])->name('blog.category');
Route::get('/blog/details/{id}', [WebsiteController::class,'blogDetails'])->name('blog.details');
Route::get('/contact', [WebsiteController::class,'contact'])->name('contact');



Route::get('/max', [WebsiteController::class,'contact'])->name('contact');


// Route::get('/', function () {
//     return view('Frontend/home');
// });
// Route::get('/blog/category', function () {
//     return view('Frontend/blog-category');
// });


