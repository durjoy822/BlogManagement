<?php

namespace App\Http\Controllers\Website_controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin_account;
use App\Models\BlogCategory;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function Home(){
        // $creatorImage=Admin_account('id',Auth::guard('admin')->user()->id)->first();
        return view('Frontend.home',[
            'categories'=>BlogCategory::all(),
            'posts'=>Post::where('status','Public')->orderBy('id','DESC')->paginate(3),
            'creator'=>Admin_account::first(),
        ]);
    }
    public function blogCategory(){
        return view('Frontend.blog-category',[
            'categories'=>BlogCategory::all(),
        ]);
    }
    public function blogDetails($id){
        // dd($id);
        return view('Frontend.blog-details',[
            'categories'=>BlogCategory::all(),
            'postDetails'=>Post::find($id),
            'creator'=>Admin_account::first(),
        ]);
    }
    public function contact(){
        return view('Frontend.contact',[
            'categories'=>BlogCategory::all(),
        ]);
    }
}
