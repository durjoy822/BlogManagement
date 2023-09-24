<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Tag;
use App\Models\BlogCategory;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Services\Admin\VideoService;
use Illuminate\Support\Facades\Session;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Video-post.index',[
            'videos'=>Video::orderBy('id','DESC')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Video-post.add',[
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoRequest $request, VideoService $videoService)
    {

        $videoService->store($request);
        Session::flash('message','Video post data store successfully');
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return view('Admin.video-post.view',[
            'video'=>Video::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Admin.video-post.edit',[
            'video'=>Video::find($id),
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoRequest $request, $id, VideoService $videoService)
    {
        // dd($request->all());
        $videoService->update($request,$id);
        Session::flash('message','Video post data updated successfully');
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
