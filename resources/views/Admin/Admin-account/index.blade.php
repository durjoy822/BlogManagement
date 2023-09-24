@extends('Admin.layout.master')
@section('title')
    Admin Account
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-notifications.html"><i class="bx bx-bell me-1"></i>
                            Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages-account-settings-connections.html"><i
                                class="bx bx-link-alt me-1"></i> Connections</a>
                    </li>
                </ul>
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
                    <form accept="{{ route('account.update', $adminAccount->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('HEAD')

                        <h5 class="card-header">Profile Details</h5>
                        <!-- Account -->
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                @isset($adminAccount->image)
                                    <img src="{{ asset($adminAccount->image) }}" alt="user-avatar" class="d-block rounded"
                                        height="100" width="100" id="uploadedAvatar" />
                                @else
                                    <img src="{{ asset('Admin') }}/assets/img/avatars/1.png" alt="user-avatar"
                                        class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                @endisset
                                <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                        <span class="d-none d-sm-block">Upload new photo</span>
                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                        <input type="file" name="image" id="upload" class="account-file-input"
                                            hidden accept="image/png, image/jpeg" />
                                    </label>
                                    <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                        <span class="d-none d-sm-block">Reset</span>
                                    </button>

                                    <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-0" />
                        <div class="card-body">


                            <div class="col-xxl ">
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">User Name/User
                                        Email</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-solid fa-user-gear"></i>
                                            </span>
                                            <input disabled type="text" name="user_name" id="basic-icon-default-company"
                                                value="{{ Auth::guard('admin')->user()->name }}  || {{ Auth::guard('admin')->user()->email }}"
                                                class="form-control" placeholder="User Name"
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                                    <div class="col-sm-10 ">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                    class="bx bx-user"></i></span>
                                            <input type="text" value="{{ $adminAccount->name }}" class="form-control"
                                                name="name" id="basic-icon-default-fullname" placeholder="John Doe"
                                                aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                            <input type="email" value="{{ $adminAccount->email }}" name="email"
                                                id="basic-icon-default-email" class="form-control"
                                                placeholder="john@gmail.com"
                                                aria-describedby="basic-icon-default-email2" />
                                            <span id="basic-icon-default-email2"
                                                class="input-group-text">@example.com</span>
                                        </div>
                                        <div class="form-text">You can use letters, numbers & periods</div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Occupation</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-solid fa-mars-and-venus-burst"></i>
                                            </span>
                                            <input type="text" name="occupation"
                                                value="{{ $adminAccount->occupation }}" id="basic-icon-default-company"
                                                class="form-control" placeholder="Occupation.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                    class="bx bx-phone"></i></span>
                                            <input type="text" name="phone" value="{{ $adminAccount->phone }}"
                                                id="basic-icon-default-phone" class="form-control phone-mask"
                                                placeholder="658 799 8941" aria-label="658 799 8941"
                                                aria-describedby="basic-icon-default-phone2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 form-label" for="basic-icon-default-message">About</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-message2" class="input-group-text"><i
                                                    class="bx bx-comment"></i></span>
                                            <textarea id="basic-icon-default-message" name="about" class="form-control" placeholder="Write about you.."
                                                aria-describedby="basic-icon-default-message2">
                                                {!! $adminAccount->about !!}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">SOCIAL MEDIA DETAILS </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Facebook</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-brands fa-square-facebook"></i>
                                            </span>
                                            <input type="text" name="facebook" value="{{ $adminAccount->facebook }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Facebook.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Twitter</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-brands fa-square-twitter"></i>
                                            </span>
                                            <input type="text" name="twitter" value="{{ $adminAccount->twitter }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Twitter.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Linkedin</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-brands fa-linkedin"></i>
                                            </span>
                                            <input type="text" name="linkedin" value="{{ $adminAccount->linkedin }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Linkedin.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Youtube</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-brands fa-youtube"></i>
                                            </span>
                                            <input type="text" name="youtube" value="{{ $adminAccount->youtube }}"
                                                id="basic-icon-default-company" class="form-control"
                                                placeholder="Youtube.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"
                                        for="basic-icon-default-company">Instagram</label>
                                    <div class="col-sm-10">
                                        <div class="input-group input-group-merge">
                                            <span id="basic-icon-default-company2" class="input-group-text"><i
                                                    class="fa-brands fa-instagram"></i>
                                            </span>
                                            <input type="text" name="instagram"
                                                value="{{ $adminAccount->instagram }}" id="basic-icon-default-company"
                                                class="form-control" placeholder="Instagram.." aria-label="ACME Inc."
                                                aria-describedby="basic-icon-default-company2" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <div class="mt-2">
                                            <input type="submit" class="btn btn-primary me-2">
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
            <!-- /Account -->
        </div>
        <div class="card">
            <h5 class="card-header">Delete Account</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                        <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accountActivation"
                            id="accountActivation" />
                        <label class="form-check-label" for="accountActivation">I confirm my account deactivation</label>
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
