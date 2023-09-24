<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin_account;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('Admin.Admin-account.index',[
            'adminAccount'=>Admin_account::where('admin_id', Auth()->guard('admin')->user()->id)->first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all()); 
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
        }else{
            Session::flash('message','Admin Account info image not updated');
            return redirect()->route('account.index');
        }
        $adminAccount->save();
        Session::flash('message','Admin Account info updated');
        return redirect()->route('account.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
