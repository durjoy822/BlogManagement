<?php

namespace App\Services\Admin;

use App\Models\Audio;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AudioService
{
    use FileUpload;
    use FileDelete;

    public function store($request)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $audio = new Audio();
            $audio->audio_url = $request->audio_url;
            $audio->embed_link = $request->embed_link;
            $audio->category = $request->category;
            $audio->tag = $request->tag;
            $audio->status = $request->status;
            $audio->title = $request->title;
            $audio->content = $request->content;
            $audio->summary = $request->summary;
            $audio->creator =Auth::guard('admin')->user()->name;
            if($request->audio_file){
                $audio->audio_file = $this->uploadImage($request->audio_file,'audio');
            }
            if($request->thumbnail){
                $audio->thumbnail = $this->uploadImage($request->thumbnail,'audio');
            }
            $audio->save();

            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return 'audio post creation failed';
        }
    }
    public function update($request, $id)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $audio=Audio::find($id);
            $audio->audio_url = $request->audio_url;
            $audio->embed_link = $request->embed_link;
            $audio->category = $request->category;
            $audio->tag = $request->tag;
            $audio->status = $request->status;
            $audio->title = $request->title;
            $audio->content = $request->content;
            $audio->summary = $request->summary;
            $audio->creator = Auth::guard('admin')->user()->name;
            if ($request->file('audio_file')){
                if (file_exists($audio->audio_file)){
                    unlink($audio->audio_file);
                }
                $audio->audio_file =$this->uploadImage($request->audio_file,'audio');
            }else{
                Session::flash('message','audio file updated failed');
                return redirect()->route('audio.index');
            }

            if ($request->file('thumbnail')){
                if (file_exists($audio->thumbnail)){
                    unlink($audio->thumbnail);
                }
                $audio->thumbnail =$this->uploadImage($request->thumbnail,'audio');
            }else{
                Session::flash('message','thumbnail image file updated failed');
                return redirect()->route('audio.index');
            }
            $audio->save();
            DB::commit();

        } catch (\Exception $e) {
            // DB::rollback();
            return 'Blog category updated  failed';
        }
    }


    public function destroy($id){
        $audio=Audio::find($id);
        $audio->thumbnail=$this->deleteImage($audio->thumbnail);
        $audio->audio_file=$this->deleteImage($audio->audio_file);
        $audio->delete();

    }


}
