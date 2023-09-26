<?php

namespace App\Http\Controllers\Website_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function Home(){
        return view('Frontend.home');
    }
    public function blogCategory(){
        return view('Frontend.blog-category');
    }
    public function blogDetails(){
        return view('Frontend.blog-details');
    }
    public function contact(){
        return view('Frontend.contact');
    }
}
