<?php

namespace App\Http\Controllers\Website_controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function commentsStore(Request $request){
        // return $request->all();
        $comment= new Comment();
        $comment->post_id=$request->post_id;
        $comment->user_id=1;
        $comment->parent_id=null;
        $comment->comment=$request->comment;
        $comment->save();
        return back();
    }
    public function replayStore(Request  $request){
        // return $request->all();
        $replay=new Comment();
        $replay->post_id=$request->post_id;
        $replay->user_id=1;
        $replay->parent_id=$request->comment_id;
        $replay->comment=$request->replay;
        $replay->save();
        return back(); 

    }
}
