<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Tag.index',[
            'tags'=>Tag::orderBY('id','DESC')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Tag.index',[
            'tags'=>Tag::orderBY('id','DESC')->paginate(5),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $tag= new Tag();
        $tag->name=$request->name;
        $tag->save();
        Session::flash('message', 'Tag add successfully');
        return redirect()->route('tag.index');
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
    public function edit( $id)
    {
        return view('Admin.Tag.index',[
            'tags'=>Tag::orderBY('id','DESC')->paginate(5),
            'postTag'=>Tag::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $tag= Tag::find($id);
        $tag->name=$request->name;
        $tag->save();
        Session::flash('message', 'Tag Updated successfully');
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         Tag::find($id)->delete();
         Session::flash('message', 'Tag delete successfully');
         return back(); 

    }
}
