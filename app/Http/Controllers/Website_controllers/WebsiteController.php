<?php

namespace App\Http\Controllers\Website_controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin_account;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Setting;
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
            'LatestPosts' => Post::where('status','Public')->inRandomOrder()->take(4)->get(),
            'settings'=>Setting::first(),


        ]);
    }
    public function blogCategory($id){
        return view('Frontend.blog-category',[
            'categories'=>BlogCategory::all(),
            'category'=>BlogCategory::find($id),
            'posts'=>Post::where('category_id',$id)->where('status','Public')->orderBy('id','DESC')->paginate(3),
            'creator'=>Admin_account::first(),
            'LatestPosts' => Post::where('status','Public')->inRandomOrder()->take(4)->get(),
            'settings'=>Setting::first(),


        ]);
    }
    public function blogDetails($id){
        // dd($id);
        return view('Frontend.blog-details',[
            'categories'=>BlogCategory::all(),
            'postDetails'=>Post::find($id),
            'creator'=>Admin_account::first(),
            'LatestPosts' => Post::where('status','Public')->inRandomOrder()->take(3)->get(),
            'settings'=>Setting::first(),
            'comments'=>Comment::where('parent_id',null)->get(),
            'replays' => Comment::whereNotNull('parent_id')->get(),

        ]);
    }
    public function contact(){
        return view('Frontend.contact',[
            'categories'=>BlogCategory::all(),
            'settings'=>Setting::first(),
        ]);
    }


}
