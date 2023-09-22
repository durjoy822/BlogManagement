@extends('Admin.layout.master')
@section('title')
    Category Index
@endsection
@section('content')
    <nav aria-label="breadcrumb" class="my-3 mx-4 px-1">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light">Blog category
                <a href="#" onclick="myFunction()" >
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
                    <h5 class="card-header">Blog category table</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
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
                                        {{-- {{ $loop->iteration }} --}}
                                        <td> <strong>{{$blogCategory->id}}</strong></td>
                                        <td><img src="{{ asset($blogCategory->image) }}" style="width: 50px"></td>
                                        <td>{{ $blogCategory->name }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('category.edit',$blogCategory->id)}}" onclick="myFunction()" ><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{route('category.destroy', $blogCategory->id)}}"><i
                                                            class="bx bx-trash me-1"></i>
                                                        Delete</a>
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
            <!--create form-->
            <div class="col-md-4  order-sm-first order-first py-2 create-form " id="createForm">
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
            <!--update form-->

            <div class="col-md-4  order-sm-first order-first py-2 update-form " id="updateForm">
                <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Category Update</h5>
                      </div>
                       <div class="card-body">
                        <form>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category  Name</label>
                            <input type="text" value="" class="form-control" id="basic-default-fullname"  />
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile" />
                          </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      </div>
                    </div>

                  </div>
            </div>
          
        </div>
    </div>



<style>
#updateForm{
    display:none;
}
#createForm{
    display:show;
}
</style>

<script>
function myFunction() {
    var x = document.getElementById("createForm");
    var y = document.getElementById("updateForm");

  if (x.style.display === "none" || x.style.display === "") {
    x.style.display = "block";
    y.style.display = "none";
  } else if (y.style.display === "none" || y.style.display === "") {
    y.style.display = "block";
    x.style.display = "none";
  }
}
</script>
@endsection
