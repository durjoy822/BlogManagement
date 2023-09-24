@extends('Admin.layout.master')
@section('title')
    Category Index
@endsection
@section('content')
    <nav aria-label="breadcrumb" class="my-4 mx-4 px-1">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Categories</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">index</a>
            </li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light">Blog category
                <a href="{{route('category.create')}}" >
                    <div class="btn btn-info float-end btn-sm" id="showButton" >
                        <i class="fa-solid fa-plus"></i> Category add
                    </div>
                </a>
        </h4>
        <!--table -->

        <div class="row">
            <div class="col-md-8 py-2 order-md-first">
                <!--store message -->
                @if (Session::has('message'))
                    <div class="alert alert-primary alert-dismissible p-0" role="alert">
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <h5 class="card-header">Blog category table
                        <span class="px-2">
                            <input type="search" class="form-control float-end  " placeholder="search.." style="width:300px">
                        </span>
                    </h5>


                    <div class="table-responsive text-nowrap">
                        <table class="table" id="myTable">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Category name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0 text-center ">
                                @foreach ($blogCategories as $blogCategory)
                                    <tr>
                                        <td> <strong>{{ $loop->iteration }}</strong></td>
                                        <td><img src="{{ asset($blogCategory->image) }}" style="width: 50px"></td>
                                        <td>{{ $blogCategory->name }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('category.edit',$blogCategory->id)}}"  ><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <form action="{{route('category.destroy',$blogCategory->id)}}" method="post">@csrf
                                                        @method("DELETE")
                                                        <button type="submit" class="btn btn-block" style="padding-right: 95px;"><i class="bx bx-trash me-1"></i>  Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="px-4">{{ $blogCategories->links("pagination::bootstrap-5") }}</div>

                    </div>
                </div>
            </div>
            <!--form-->
            <!--Edit form-->
            @isset($blogcategory)
            <div class="col-md-4  order-sm-first order-first py-2 update-form ">
                <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Category edit</h5>
                      </div>
                       <div class="card-body">
                        <form action="{{route('category.update',$blogcategory->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category  Name</label>
                            <input type="text" name="name" value="{{$blogcategory->name}}" class="form-control" id="basic-default-fullname"  />
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" name="image" type="file"  />
                          </div>
                          <span><img src="{{asset($blogcategory->image)}}" style="width: 70px"></span>
                          <button type="submit" class="btn btn-primary float-end">Update</button>
                        </form>
                      </div>
                    </div>

                  </div>
            </div>
            @else
            <!--create form-->
            <div class="col-md-4  order-sm-first order-first py-2 create-form " >
                <div class="col-xl">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Category add</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">@csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Category Name</label>
                                    <input type="text" name="name" class="form-control" id="basic-default-fullname" />
                                    @error('name')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Image</label>
                                    <input class="form-control" name="image" type="file" id="formFile" />
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            @endisset

        </div>
    </div>
@endsection
