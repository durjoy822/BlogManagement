@extends('Admin.layout.master')
@section('title')
    Tag Index
@endsection
@section('content')
    <nav aria-label="breadcrumb" class="my-4 mx-4 px-1">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Tag</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">index</a>
            </li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light">Tags
                <a href="{{route('tag.create')}}" >
                    <div class="btn btn-info float-end btn-sm" id="showButton" >
                        <i class="fa-solid fa-plus"></i> Tag add
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
                    <h5 class="card-header">Tags table
                        <span class="px-2 col-md-2 py-3">
                            <input type="search" class="form-control float-end  " placeholder="Search.." style="width:250px">
                        </span>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0 text-center ">
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td> <strong>{{ $loop->iteration }}</strong></td>
                                        <td>{{$tag->name}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('tag.edit',$tag->id)}}"  ><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <form action="{{route('tag.destroy',$tag->id)}}" method="post">@csrf
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
                        <div class="px-4">{{ $tags->links("pagination::bootstrap-5") }}</div>
                    </div>
                </div>
            </div>
            <!--form-->
            <!--Edit form-->
            @isset($postTag)
            <div class="col-md-4  order-sm-first order-first py-2 update-form ">
                <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Tag edit</h5>
                      </div>
                       <div class="card-body">
                        <form action="{{route('tag.update',$postTag->id)}}" method="POST" >
                            @csrf
                            @method('PATCH')
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Tag  Name</label>
                            <input type="text" name="name" value="{{$postTag->name}}" class="form-control" id="basic-default-fullname"  />
                          </div>
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
                            <h5 class="mb-0">Tag add</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('tag.store') }}" method="post" >@csrf
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Tag Name</label>
                                    <input type="text" name="name" class="form-control" id="basic-default-fullname" />
                                    @error('name')
                                        <div class="error">{{ $message }}</div>
                                    @enderror
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
