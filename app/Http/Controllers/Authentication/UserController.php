<?php

namespace App\Http\Controllers\Authentication;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash as FacadesHash;


class UserController extends Controller
{
    public function auth(){
        return view('Frontend.Authentication.login');
    }

    public function info( Request $request)  {
        // dd($request->all());
        $request->validate([
            'name'      => 'required',
            'email'     => 'required',
            'password'  => 'required|min:8|max:64',
        ],
            [
                'name.required'=>'please input your name!',
                'email.required'=>'You forget to use your email!',
                'password.required'=>'password is required!',
                'password.min'=>'Minimum 8 digit is required!',
                'password.max'=>'More then 64 digit are not allowed!',
            ]
        );
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=FacadesHash::make($request->password);
        $user->save();

        Auth::guard('admin')->login($user);
        Session::flash('success','Successfully User Register Done!');
        return redirect()->route('home');

    }

    public function loginCheck(Request $request){
        // dd($request->all());
        if (Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password],$request->has('remember_token'))){
            Session::flash('login','Login Successfully Done!');
            return redirect()->route('home');
        }else{
            Session::flash('warning','Ops, Information Wrong! please Provide a Right information.');
            return redirect()->back();
        }

    }
    public function logout(){
        Auth::guard('admin')->logout();
        Session::flash('warning',' logout Successfully.');
        return redirect()->route('home');
    }
}
