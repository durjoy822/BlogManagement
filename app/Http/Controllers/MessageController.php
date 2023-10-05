<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function message(){
        return view('Admin.Message.index',[
            'messages'=>Message::orderBy('id','DESC')->paginate(5),
        ]);
    }
    public function messageView($id){
        return view('Admin.Message.view',[
            'message'=>Message::find($id),
        ]);
    }
    public function messageStore(Request $request){
         $request->validate([

         ]);
         $message=new Message();
         $message->name=$request->name;
         $message->email=$request->email;
         $message->subject=$request->subject;
         $message->message=$request->message;
         $message->save();
         Session::flash('success','Message successfully Sent');
         return back();
    }
    public function messageDelete($id){
       $message=Message::find($id);
       $message->delete();
       Session::flash('message','Message Delete successfully');
       return back(); 
    }

}
