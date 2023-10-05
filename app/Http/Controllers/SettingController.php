<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class SettingController extends Controller
{
    use FileDelete;
    use FileUpload;


    public function setting() {
        return view('Admin.Settings.index',[
            'settings'=>Setting::first(),
        ]);
    }
    public function settingUpdate(Request $request, $id) {
        // return $request->all();
        $setting=Setting::find($id);
        $setting->facebook_link=$request->facebook_link;
        $setting->facebook_icon=$request->facebook_icon;
        $setting->twitter_link=$request->twitter_link;
        $setting->twitter_icon=$request->twitter_icon;
        $setting->instagram_link=$request->instagram_link;
        $setting->instagram_icon=$request->instagram_icon;
        $setting->youtube_link=$request->youtube_link;
        $setting->youtube_icon=$request->youtube_icon;
        $setting->google_plus_link=$request->google_plus_link;
        $setting->google_plus_icon=$request->google_plus_icon;
        $setting->copyright=$request->copyright;
        if ($request->file('dark_logo')){
            if (file_exists($setting->dark_logo)){
                unlink($setting->dark_logo);
            }
            $setting->dark_logo =$this->uploadImage($request->dark_logo,'setting');
        }
        if ($request->file('light_logo')){
            if (file_exists($setting->light_logo)){
                unlink($setting->light_logo);
            }
            $setting->light_logo =$this->uploadImage($request->light_logo,'setting');
        }
        if ($request->file('favicon')){
            if (file_exists($setting->favicon)){
                unlink($setting->favicon);
            }
            $setting->favicon =$this->uploadImage($request->favicon,'setting');
        }
        $setting->save();
        Session::flash('message','Setting updated  successfully ');
         return redirect()->back();

    }

}
