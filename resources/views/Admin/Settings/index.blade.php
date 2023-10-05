@extends('Admin.layout.master')
@section('title')
   Setting
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Settings</h4>

        <div class="row">
            <div class="col-md-12">
                <div>
                    <!--message-->
                    @if (Session::has('message'))
                        <div class="alert alert-primary alert-dismissible p-0 " role="alert">
                            <p class="alert alert-info">{{ Session::get('message') }} </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="card mb-4">
                    <form action="{{route('setting.update',['id'=>$settings->id])}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <h5 class="card-header">Settings</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-4 py-3 text-center">
                                    <div >
                                        @if($settings->dark_logo)
                                        <img  class="py-2 " src="{{asset($settings->dark_logo)}}" style="width:70px ; height:70px">
                                        @else
                                        <img  class="py-2 " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKlCiJEobsn8W0rHNnllvkH0euMtjzKavdaJqfRPiit7VFkbCxW-8LJeFaIBOGsK1GFTw&usqp=CAU" style="width:70px">
                                        @endif
                                    </div>
                                    <input type="file" name="dark_logo" class="form-control">
                                    <span>Dark logo</span>
                                </div>
                                <div class="col-md-4 py-3 text-center">
                                    <div >
                                        @if($settings->light_logo)
                                        <img  class="py-2 " src="{{asset($settings->light_logo)}}" style="width:70px ; height:70px">
                                        @else
                                        <img  class="py-2 " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKlCiJEobsn8W0rHNnllvkH0euMtjzKavdaJqfRPiit7VFkbCxW-8LJeFaIBOGsK1GFTw&usqp=CAU" style="width:70px">
                                        @endif
                                    </div>
                                    <input type="file" name="light_logo" class="form-control">
                                    <span class="my-3">Light logo</span>
                                </div>
                                <div class="col-md-4 py-3 text-center">
                                    <div >
                                        @if($settings->favicon)
                                        <img  class="py-2 " src="{{asset($settings->favicon)}}" style="width:70px; height:70px">
                                        @else
                                        <img  class="py-2 " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKlCiJEobsn8W0rHNnllvkH0euMtjzKavdaJqfRPiit7VFkbCxW-8LJeFaIBOGsK1GFTw&usqp=CAU" style="width:70px">
                                        @endif
                                    </div>
                                    <input type="file" name="favicon" class="form-control">
                                    <span>Favicon</span>
                                </div>


                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body pt-0">
                            <div class="col-xxl ">
                                <div class="divider">
                                    <div class="divider-text">SOCIAL MEDIA DETAILS </div>
                                </div>
                                <!--facbook-->
                                <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Facebook</label>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-square-facebook"></i>&nbsp;
                                                <i class="fa-solid fa-link"></i>
                                            </span>
                                            <input type="text" name="facebook_link" value="{{$settings->facebook_link}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="facbook_link.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-square-facebook"></i>&nbsp;
                                                <i class="fa-solid fa-icons"></i>
                                            </span>
                                            <input type="text" name="facebook_icon" value="{{$settings->facebook_icon}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="facebook_icon.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>

                                <!--twitter-->
                                <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Twitter</label>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-twitter"></i>&nbsp;
                                                <i class="fa-solid fa-link"></i>
                                            </span>
                                            <input type="text" name="twitter_link" value="{{$settings->twitter_link}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="twitter_link.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-twitter"></i>&nbsp;
                                                <i class="fa-solid fa-icons"></i>
                                            </span>
                                            <input type="text" name="twitter_icon" value="{{$settings->twitter_icon}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="twitter_icon.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>
                                    <!--instragram-->
                                    <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Instragram</label>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-instagram"></i>&nbsp;
                                                <i class="fa-solid fa-link"></i>
                                            </span>
                                            <input type="text" name="instagram_link" value="{{$settings->instagram_link}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Instragram link.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-instagram"></i>&nbsp;
                                                <i class="fa-solid fa-icons"></i>
                                            </span>
                                            <input type="text" name="instagram_icon" value="{{$settings->instagram_icon}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Instragram_icon.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>
                                    <!--youtube-->
                                    <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Youtube</label>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-youtube"></i>&nbsp;
                                                <i class="fa-solid fa-link"></i>
                                            </span>
                                            <input type="text" name="youtube_link" value="{{$settings->youtube_link}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Youtube_link.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-youtube"></i>&nbsp;
                                                <i class="fa-solid fa-icons"></i>
                                            </span>
                                            <input type="text" name="youtube_icon" value="{{$settings->youtube_icon}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Youtube_icon.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>
                                    <!--google plus-->
                                    <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Google plus</label>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-google-plus-g"></i>&nbsp;
                                                <i class="fa-solid fa-link"></i>
                                            </span>
                                            <input type="text" name="google_plus_link" value="{{$settings->google_plus_link}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Google_plus_link.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    <div class="col-sm-5 py-2">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text">
                                                <i class="fa-brands fa-google-plus-g"></i>&nbsp;
                                                <i class="fa-solid fa-icons"></i>
                                            </span>
                                            <input type="text" name="google_plus_icon" value="{{$settings->google_plus_icon}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Google_plus icon.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>
                                    <!--footer copyright-->
                                    <div class="row ">
                                    <label class="col-sm-2 col-form-label py-2"
                                        for="basic-icon-default-company">Copy right area</label>
                                    <div class="col-sm-10 py-2">
                                        <div class="input-group input-group-merge">
                                            <input type="text" name="copyright" value="{{$settings->copyright}}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="copyright.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <div class="mt-2">
                                            <input type="submit" value="update" class="btn btn-primary me-2">
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

