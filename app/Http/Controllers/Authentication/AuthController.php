<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('Admin.Authentication.login',[
            'login'=>Admin::first(), 
        ]);
    }
    public function register(){
        return view('Admin.Authentication.register');
    }
}
