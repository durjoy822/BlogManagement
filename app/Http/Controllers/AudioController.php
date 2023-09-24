<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Requests\AudioRequest;
use App\Models\Audio;
use App\Services\Admin\AudioService;
use Illuminate\Support\Facades\Session;

class AudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Audio-post.index',[
            'audios'=>Audio::orderBy('id','DESC')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Audio-post.add',[
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AudioRequest $request , AudioService $audioService)
    {
        // dd($request->all());
        $audioService->store($request);
        Session::flash('message','Audio file store successfully');
        return redirect()->route('audio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Admin.Audio-post.view',[
            'audio'=>Audio::find($id),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Admin.Audio-post.edit',[
            'audio'=>Audio::find($id),
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AudioRequest $request, $id , AudioService $audioService)
    {
        // dd($request->all());
        $audioService->update($request, $id);
        Session::flash('message','Audio file store successfully');
        return redirect()->route('audio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id , AudioService $audioService)
    {
        $audioService->destroy( $id );
        Session::flash('message','Audio file delete successfully');
        return redirect()->route('audio.index');
    }
}
