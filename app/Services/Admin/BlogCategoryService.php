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
            $category = new BlogCategory();
            $category->name = $request->name;
            $category->image = $this->uploadImage($request->image,'blog-category');
            $category->save();

            DB::commit();
        } catch (\Exception $e) {
            // DB::rollback();
            return 'Blog category creation failed';
        }
    }
    public function update($request, $id)
    {
        // dd($request->all());
        DB::beginTransaction();

        try {
            $category=BlogCategory::find($id);
            $category->name = $request->name;
            if ($request->file('image')){
                if (file_exists($category->image)){
                    unlink($category->image);
                }
                $category->image =$this->uploadImage($request->image,'blog-category');
            }
            $category->save();
            DB::commit();

        } catch (\Exception $e) {
            // DB::rollback();
            return 'Blog category updated  failed';
        }
    }


    public function destroy($id){
        $blog=BlogCategory::find($id);
        $blog->image=$this->deleteImage($blog->image);
        $blog->delete();

    }


}
