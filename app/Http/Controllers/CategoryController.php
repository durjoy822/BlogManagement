<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Requests\BlogCategoryRequest;
use App\Services\Admin\BlogCategoryService;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.Category.index',[
            'blogCategories'=>BlogCategory::orderBy('id', 'DESC')->paginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Category.index',[
            'blogCategories'=>BlogCategory::orderBy('id', 'DESC')->paginate(5),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogCategoryRequest $request, BlogCategoryService $blogCategoryService)
    {
        $blogCategoryService->store($request);
        Session::flash('message', 'Blog category add successfully');
        return back();
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
    public function edit(string $id)
    {
        return view('Admin.Category.index',[
            'blogCategories'=>BlogCategory::orderBy('id', 'DESC')->paginate(5),
            'blogcategory'=>BlogCategory::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogCategoryRequest $request, $id, BlogCategoryService $blogCategoryService)
    {
        // dd($request->all());
        $blogCategoryService->update($request, $id);
        Session::flash('message', 'Blog category Updated successfully');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(  $id ,BlogCategoryService $blogCategoryService)
    {
        $blogCategoryService->destroy($id);
        Session::flash('message', 'Blog category Delete successfully');
        return back();

    }
}
