@extends('Admin.layout.master')
@section('title')
   Video-post
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
            <span class=" fw-light">Video post
                <a href="{{route('video.create')}}"  >
                    <div class="btn btn-info float-end btn-sm" id="showButton" >
                        <i class="fa-solid fa-plus"></i> video add
                    </div>
                </a>
        </h4>
        <!--table -->

        <div class="row">
            <div class="col-md-12 py-2 order-md-first">
                <!--store message -->
                @if (Session::has('message'))
                    <div class="alert alert-primary alert-dismissible p-0" role="alert">
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="card">
                    <h5 class="card-header">Video post table</h5>
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
                                {{-- @foreach ($blogCategories as $blogCategory) --}}
                                    <tr>
                                        {{-- {{ $loop->iteration }} --}}
                                        <td> <strong></strong></td>
                                        <td><img src="" style="width: 50px"></td>
                                        <td></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="" ><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href=""><i
                                                            class="bx bx-trash me-1"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                        {{-- <div class="px-4">{{ $blogCategories->links("pagination::bootstrap-5") }}</div> --}}

                    </div>
                </div>
            </div>

@endsection
