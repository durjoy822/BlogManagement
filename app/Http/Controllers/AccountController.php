<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_account;
use Illuminate\Support\Facades\Session;
use App\Traits\FileDelete;
use App\Traits\FileUpload;

class AccountController extends Controller
{
    use FileUpload;
    use FileDelete;

    public function account(){
        return view('Admin.Admin-account.index',[
            'adminAccount'=>Admin_account::where('admin_id', Auth()->guard('admin')->user()->id)->first(),
        ]);
    }
    public function accountUpdate(Request $request,  $id){
        $adminAccount=Admin_account::find($id);
        $adminAccount->name=$request->name;
        $adminAccount->email=$request->email;
        $adminAccount->phone=$request->phone;
        $adminAccount->occupation=$request->occupation;
        $adminAccount->about=$request->about;
        $adminAccount->facebook=$request->facebook;
        $adminAccount->twitter=$request->twitter;
        $adminAccount->linkedin=$request->linkedin;
        $adminAccount->youtube=$request->youtube;
        $adminAccount->instagram=$request->instagram;
        if ($request->file('image')){
            if (file_exists($adminAccount->image)){
                unlink($adminAccount->image);
            }
            $adminAccount->image =$this->uploadImage($request->image,'admin_account');
        }
        $adminAccount->save();
        Session::flash('message','Admin Account info updated');
        return redirect()->route('account.index');
    }

}
