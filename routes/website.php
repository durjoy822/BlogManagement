<?php

Route::get('/', function () {
    return view('Frontend/home');
});
Route::get('/blog/category', function () {
    return view('Frontend/blog-category');
});


