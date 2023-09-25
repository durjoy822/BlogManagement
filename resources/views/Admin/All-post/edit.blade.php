@extends('Admin.layout.master')
@section('title')
    All video Edit
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 mb-3 my-4 ">
        <div class="row">
            <div class="col-md-8  py-2 order-md-first">
                <div class="card ">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Post Edit</h3>
                        <hr>
                    </div>
                    <div class="card-body">
                        <div class="card_body">
                            <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-fullname">Title</label>
                                            <input type="text" name="title" value="{{ $post->title }}"
                                                class="form-control" id="basic-default-fullname" placeholder="Title" />
                                        </div>
                                        <div class="error text-danger"> @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Summary</label>
                                            <textarea id="basic-default-message" rows="1" class="form-control tinymce" name="summary" placeholder="Summary">{!! $post->summary !!}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="basic-default-message">Content</label>
                                            <textarea id="basic-default-message" class="form-control tinymce" placeholder="Content" name="content">{!! $post->content !!}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
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
                            <label class="form-label" for="basic-default-fullname">Post Thumbnails </label>
                            <input type="file" name="thumbnail" class="form-control" id="basic-default-fullname" />
                            <img src="{{ asset($post->thumbnail) }}" style="width:70px" class="mt-2">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Select category</label>
                            <select class="form-select" name="category" id="exampleFormControlSelect2"
                                aria-label="Multiple select example">
                                <option selected disabled>Select post category</option>
                                @foreach ($BlogCategories as $category)
                                    <option value="{{ $category->name }}"{{ $post->id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div class="error text-danger"> @error('category')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Select Tag</label>
                            <select class="form-select" name="tag" id="exampleFormControlSelect2"
                                aria-label="Multiple select example">
                                <option selected disabled>Selete tag</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->name }}" {{ $post->id == $tag->id ? 'selected' : '' }}>
                                        {{ $tag->name }}</option>
                                @endforeach
                            </select>
                            <div class="error text-danger"> @error('tag')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect2" class="form-label">Visibility</label>
                            <select class="form-select" name="status" id="exampleFormControlSelect2"
                                aria-label="Multiple select example">
                                <option selected disabled>Visibility Status</option>
                                <option value="Public" {{ $post->status == 'Public' ? 'selected' : '' }}>Public</option>
                                <option value="Privet" {{ $post->status == 'Privet' ? 'selected' : '' }}>Privet</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    @endsection
