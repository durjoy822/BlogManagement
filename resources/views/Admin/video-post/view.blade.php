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
                     <a href="{{route('video.index')}}"><span class="float-end"> <i class="fa-solid fa-backward"></i> Back</span></a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table border col-12">
                            <tr>
                                <td>SL</td>
                                <td>{{$video->id}}</td>
                            </tr>
                            <tr>
                                <td>Creator</td>
                                <td>{{$video->creator}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{$video->Category->name}}</td>
                            </tr>
                            <tr>
                                <td>Tag</td>
                                <td>{{$video->tag}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$video->title}}</td>
                            </tr>
                            <tr>
                                <td>Summary</td>
                                <td>{!!$video->summary!!}</td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td>{!!$video->content!!}</td>
                            </tr>
                            <tr>
                                <td>Thumbnail</td>
                                <td><img src="{{asset($video->thumbnail)}}" style="width:70px"></td>
                            </tr>
                            <tr>
                                <td>Uploaded video file</td>
                                <td>
                                    <video width="150" height="150" controls>
                                    <source src="{{asset($video->video_file)}}"  type="video/ogg" style="width: 70px">
                                    Your browser does not support the video tag.
                                    </video>
                                </td>
                            </tr>
                            <tr>
                                <td>Video url</td>
                                <td>{{$video->video_url}}</td>
                            </tr>
                            <tr>
                                <td>Embed video provider</td>
                                <td>{{$video->provider}}</td>
                            </tr>
                            <tr>
                                <td>Embed video link</td>
                                <td>{{$video->embed_link}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$video->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

@endsection
