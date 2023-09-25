<?php

namespace App\Services\Admin;

use App\Models\Post;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostService
{
    use FileUpload;
    use FileDelete;

    public function store($request)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $post = new Post();
            $post->category = $request->category;
            $post->tag = $request->tag;
            $post->status = $request->status;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->summary = $request->summary;
            $post->creator =Auth::guard('admin')->user()->name;
            if($request->thumbnail){
                $post->thumbnail = $this->uploadImage($request->thumbnail,'post');
            }
            $post->save();

            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return 'post  creation failed';
        }
    }
    public function update($request, $id)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $post=Post::find($id);
            $post->category = $request->category;
            $post->tag = $request->tag;
            $post->status = $request->status;
            $post->title = $request->title;
            $post->content = $request->content;
            $post->summary = $request->summary;
            $post->creator =Auth::guard('admin')->user()->name;
            if ($request->file('thumbnail')){
                if (file_exists($post->thumbnail)){
                    unlink($post->thumbnail);
                }
                $post->thumbnail =$this->uploadImage($request->thumbnail,'post');
            }else{
                Session::flash('message','thumbnail image file updated failed');
                return redirect()->route('post.index');
            }
            $post->save();
            DB::commit();

        } catch (\Exception $e) {
            // DB::rollback();
            return 'post  updated  failed';
        }
    }


    public function destroy($id){
        $post=Post::find($id);
        $post->thumbnail=$this->deleteImage($post->thumbnail);
        $post->delete();

    }


}
