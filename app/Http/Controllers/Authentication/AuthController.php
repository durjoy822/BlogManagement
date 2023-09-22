<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Admin.Authentication.login');
    }
    public function register(){
        return view('Admin.Authentication.register');
    }
}
