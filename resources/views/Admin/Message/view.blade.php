@extends('Admin.layout.master')
@section('title')
   Message details
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 mb-3 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light"> Message details
        </h4>
        <!--table -->

        <div class="row">
            <div class="col-md-12 py-2 order-md-first">
                <div class="card">
                    <h5 class="card-header">Message details
                     <a href="{{route('message')}}"><span class="float-end"> <i class="fa-solid fa-backward"></i> Back</span></a>
                    </h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table border col-12">
                            <tr>
                                <td>SL</td>
                                <td>{{$message->id}}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$message->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$message->email}}</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>{{$message->subject}}</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>{!!$message->message!!}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

@endsection
