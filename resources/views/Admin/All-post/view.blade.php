@extends('Admin.layout.master')
@section('title')
   Video post Details
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light"> Video post details
        </h4>
        <!--table -->

        <div class="row">
            <div class="col-md-12 py-2 order-md-first">
                <div class="card">
                    <h5 class="card-header">Video post details
                     <a href="{{route('post.index')}}"><span class="float-end"> <i class="fa-solid fa-backward"></i> Back</span></a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table border col-12">
                            <tr>
                                <td>SL</td>
                                <td>{{$post->id}}</td>
                            </tr>
                            <tr>
                                <td>Creator</td>
                                <td>{{$post->creator}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{$post->Category->name}}</td>
                            </tr>
                            <tr>
                                <td>Tag</td>
                                <td>{{$post->tag}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$post->title}}</td>
                            </tr>
                            <tr>
                                <td>Summary</td>
                                <td>{!!$post->summary!!}</td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td>{!!$post->content!!}</td>
                            </tr>
                            <tr>
                                <td>Thumbnail</td>
                                <td><img src="{{asset($post->thumbnail)}}" style="width: 70px"></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$post->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

@endsection
