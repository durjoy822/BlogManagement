@extends('Admin.layout.master')
@section('title')
   Audio post Details
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light"> Audio post details
        </h4>
        <!--table -->

        <div class="row">
            <div class="col-md-12 py-2 order-md-first">
                <div class="card">
                    <h5 class="card-header">Audio post details
                     <a href="{{route('audio.index')}}"><span class="float-end"> <i class="fa-solid fa-backward"></i> Back</span></a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table border col-12">
                            <tr>
                                <td>SL</td>
                                <td>{{$audio->id}}</td>
                            </tr>
                            <tr>
                                <td>Creator</td>
                                <td>{{$audio->creator}}</td>
                            </tr>
                            <tr>
                                <td>Category</td>
                                <td>{{$audio->Category->name}}</td>
                            </tr>
                            <tr>
                                <td>Tag</td>
                                <td>{{$audio->tag}}</td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>{{$audio->title}}</td>
                            </tr>
                            <tr>
                                <td>Summary</td>
                                <td>{!!$audio->summary!!}</td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td>{!!$audio->content!!}</td>
                            </tr>
                            <tr>
                                <td>Thumbnail</td>
                                <td><img src="{{asset($audio->thumbnail)}}" style="width: 70px"></td>
                            </tr>
                            <tr>
                                <td>Uploaded audio file</td>
                                <td>{{$audio->audio_file}}</td>
                            </tr>
                            <tr>
                                <td>Audio url</td>
                                <td>{{$audio->audio_url}}</td>
                            </tr>
                            <tr>
                                <td>Embed video link</td>
                                <td>{{$audio->embed_link}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$audio->status}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

@endsection
