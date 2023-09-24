<?php

namespace App\Services\Admin;

use App\Models\Video;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VideoService
{
    use FileUpload;
    use FileDelete;

    public function store($request)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $video = new Video();
            $video->video_url = $request->video_url;
            $video->provider = $request->provider;
            $video->embed_link = $request->embed_link;
            $video->category = $request->category;
            $video->tag = $request->tag;
            $video->status = $request->status;
            $video->title = $request->title;
            $video->content = $request->content;
            $video->summary = $request->summary;
            $video->creator ="Nayem";
            if($request->video_file){
                $video->video_file = $this->uploadImage($request->video_file,'video');
            }
            if($request->thumbnail){
                $video->thumbnail = $this->uploadImage($request->thumbnail,'video');
            }
            $video->save();

            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return 'video post creation failed';
        }
    }
    public function update($request, $id)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $video=Video::find($id);
            $video->video_url = $request->video_url;
            $video->provider = $request->provider;
            $video->embed_link = $request->embed_link;
            $video->category = $request->category;
            $video->tag = $request->tag;
            $video->status = $request->status;
            $video->title = $request->title;
            $video->content = $request->content;
            $video->summary = $request->summary;
            $video->creator ="Nayem";
            if ($request->file('video_file')){
                if (file_exists($video->video_file)){
                    unlink($video->video_file);
                }
                $video->video_file =$this->uploadImage($request->video_file,'video');
            }else{
                Session::flash('message','Video file updated failed');
                return redirect()->route('video.index');
            }

            if ($request->file('thumbnail')){
                if (file_exists($video->thumbnail)){
                    unlink($video->thumbnail);
                }
                $video->thumbnail =$this->uploadImage($request->thumbnail,'video');
            }else{
                Session::flash('message','thumbnail image file updated failed');
                return redirect()->route('video.index');
            }

            $video->save();
            DB::commit();

        } catch (\Exception $e) {
            // DB::rollback();
            return 'Blog category updated  failed';
        }
    }


    public function destroy($id){
        $video=Video::find($id);
        $video->video_file=$this->deleteImage($video->video_file);
        $video->thumbnail=$this->deleteImage($video->thumbnail);
        $video->delete();

    }


}
