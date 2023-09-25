<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Services\Admin\PostService;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.All-post.index',[
            'posts'=>Post::orderBy('id','DESC')->paginate(4),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.All-post.add',[
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request , PostService $postService)
    {
        // dd($request->all());
        $postService->store($request);
        Session::flash('message','Post  store successfully');
        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Admin.All-post.view',[
            'post'=>Post::find($id),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Admin.All-post.edit',[
            'post'=>Post::find($id),
            'BlogCategories'=>BlogCategory::all(),
            'tags'=>Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request,  $id,  PostService $postService)
    {
        $postService->update($request, $id);
        Session::flash('message','Post  update successfully');
        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id , PostService $postService)
    {
        $postService->destroy($id);
        Session::flash('message','Post  delete successfully');
        return redirect()->route('post.index');
    }
}
