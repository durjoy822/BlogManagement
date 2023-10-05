@extends('Admin.layout.master')
@section('title')
    all Message
@endsection
@section('content')
    <nav aria-label="breadcrumb" class="my-3 mx-4 px-1">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Message</a>
            </li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light">All Message
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
                    <h5 class="card-header">All Message table</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light text-center ">
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0 text-center ">
                                @foreach ($messages as $message)
                                    <tr>
                                        <td> <strong> {{ $loop->iteration }}</strong></td>
                                        <td> <strong> {{ $message->name }}</strong></td>
                                        <td> <strong> {{ $message->email }}</strong></td>
                                        <td> <strong> {{ $message->subject }}</strong></td>
                                        <td> {{ substr($message->message, 0, 20) }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('message.view',$message->id)}}"  >
                                                        <i class="fa-regular fa-eye"></i> View
                                                    </a>
                                                <form action="{{route('message.delete',$message->id)}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-block" style="padding-right: 95px;"><i class="bx bx-trash me-1"></i>  Delete</button>
                                                </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="px-4">{{ $posts->links("pagination::bootstrap-5") }}</div> --}}

                    </div>
                </div>
            </div>

@endsection
