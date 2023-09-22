<?php

namespace App\Services\Admin;

use App\Models\BlogCategory;
use App\Traits\FileDelete;
use App\Traits\FileUpload;
use Illuminate\Support\Facades\DB;

class BlogCategoryService
{
    use FileUpload;
    use FileDelete;

    public function store($request)
    {
        DB::beginTransaction();

        try {
            $blog = new BlogCategory();
            $blog->name = $request->name;
            $blog->image = $this->uploadImage($request->image,'admin');
            $blog->save();

            DB::commit();

            return 'Blog category created successfully';
            return back();
        } catch (\Exception $e) {

            // DB::rollback();

            return 'Blog category creation failed';
        }
    }
    public function destroy($id){
        $blog=BlogCategory::find($id);
        $blog->image=$this->deleteImage($id);
        $blog->delete();

    }


}
