@extends('Admin.layout.master')
@section('title')
    All video Edit
@endsection
@section('content')
    <style>
        .nav-align-top .nav-tabs~.tab-content {
            z-index: none;
            box-shadow: none;
        }

        .card_body {
            height: 300px;
        }
    </style>
    <div class="container-xxl flex-grow-1 mb-3 my-4 ">
        <div class="row">
            <div class="col-md-8  py-2 order-md-first">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Video post edit</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="card_body">
                            <form action="{{route('video.update',$video->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="nav-align-top mb-4">
                                    <ul class="nav nav-tabs nav-fill" role="tablist">
                                        <!--video upload btn-->
                                        <li class="nav-item">
                                            <button type="button" class="nav-link active" role="tab"
                                                data-bs-toggle="tab" data-bs-target="#video-upload"
                                                aria-controls="video-upload" aria-selected="true">
                                                <i class="fa-regular fa-file-video"></i> Video upload
                                        </li>
                                        <!--url btn-->
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#url" aria-controls="url" aria-selected="false">
                                                <i class="fa-solid fa-link"></i> Url
                                            </button>
                                        </li>
                                        <!--embed btn-->
                                        <li class="nav-item">
                                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                                data-bs-target="#embed" aria-controls="embed" aria-selected="false">
                                                <i class="fa-brands fa-nfc-symbol"></i> Embed
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <!--video upload-->
                                        <div class="tab-pane fade show active" id="video-upload" role="tabpanel">
                                            <h5>Video upload</h5>
                                            <input type="file" class="form-control" name="video_file">
                                            <div><img src="{{asset($video->video_file)}}" style="width: 100px"></div>
                                            <div>{{$video->video_file}}</div>
                                        </div>
                                        <!--url-->
                                        <div class="tab-pane fade" id="url" role="tabpanel">
                                            <h5>video url</h5>
                                            <input type="text" value="{{$video->video_url}}" class="form-control" name="video_url"
                                                placeholder="https://www.youtube.com/watch?v=QNgp59Hc_2g">
                                        </div>
                                        <!--Embed-->
                                        <div class="tab-pane fade" id="embed" role="tabpanel">
                                            <h5>Embed</h5>
                                            <div>
                                                <label for="exampleFormControlSelect2" class="form-label">Provider </label>
                                                <select  name="provider" class="form-select" id="exampleFormControlSelect2"
                                                    aria-label="Multiple select example">
                                                    <option selected>Select on Embed link provider</option>
                                                    <option value="Youtube" {{$video->provider=="Youtubr"?'selected':''}}> Youtube</option>
                                                    <option value="Google" {{$video->provider=="Google"?'selected':''}}> Google</option>
                                                    <option value="Other" {{$video->provider=="Other"?'selected':''}}> Other</option>
                                                </select>
                                            </div>
                                            <div class="mt-2">
                                                <label for="exampleFormControlSelect2" class="form-label">Embed link
                                                </label>
                                                <input type="text" value="{{$video->embed_link}}" class="form-control" name="embed_link"
                                                    placeholder="Embeded file link">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-2 order-md-last">
                <div class="card ">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Video Thumbnails </label>
                            <input type="file" name="thumbnail" class="form-control" id="basic-default-fullname" />
                            <div class="error text-danger"> @error('thumbnail'){{ $message }} @enderror</div>
                            <img src="{{asset($video->thumbnail)}}" style="width:70px" class="mt-2">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Select category</label>
                            <select class="form-select" name="category"  id="exampleFormControlSelect2" aria-label="Multiple select example">
                                <option selected disabled>Select post category</option>
                                @foreach ($BlogCategories as $category )
                                    <option value="{{$category->name}}"{{$video->id==$category->id?'selected':''}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                            <div class="error text-danger"> @error('category'){{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Select Tag</label>
                            <select class="form-select" name="tag" id="exampleFormControlSelect2" aria-label="Multiple select example">
                                <option selected disabled>Selete tag</option>
                                @foreach ($tags as $tag )
                                <option value="{{$tag ->name}}" {{ $video->id == $tag->id ? 'selected' : '' }}>{{$tag->name}}</option>
                               @endforeach
                            </select>
                            <div class="error text-danger"> @error('tag'){{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Visibility</label>
                            <select class="form-select" name="status" id="exampleFormControlSelect2"
                                aria-label="Multiple select example">
                                <option selected disabled>Visibility Status</option>
                                <option value="Public" {{$video->status=='Public'?'selected':''}}>Public</option>
                                <option value="Privet"  {{$video->status=='Privet'?'selected':''}}>Privet</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  py-2 order-md-first">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Title</label>
                            <input type="text" value="{{$video->title}}" name="title" class="form-control" id="basic-default-fullname"
                                placeholder="Title" />
                                <div class="error text-danger"> @error('title'){{ $message }} @enderror</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Summary</label>
                            <textarea id="basic-default-message" rows="1" class="form-control tinymce" name="summary" placeholder="Summary">{!! $video->summary!!}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">Content</label>
                            <textarea id="basic-default-message" class="form-control tinymce" placeholder="Content" name="content">{!! $video->content!!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
