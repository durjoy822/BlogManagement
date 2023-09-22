@extends('Admin.layout.master')
@section('title')
    Category Index
@endsection
@section('content')
<div class="container-xxl flex-grow-1 mb-3 my-4 ">
    <div class="row">
        <div class="col-md-8 offset-2 py-2 order-md-first">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Video post add</h3>
                  <hr>
                </div>
                <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-fullname">Full Name</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-company">Company</label>
                        <input type="text" class="form-control" id="basic-default-company" placeholder="ACME Inc." />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Phone No</label>
                        <input
                          type="text"
                          id="basic-default-phone"
                          class="form-control phone-mask"
                          placeholder="658 799 8941"
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="basic-default-message">Message</label>
                        <textarea
                          id="basic-default-message"
                          class="form-control"
                          placeholder="Hi, Do you have a moment to talk Joe?"
                        ></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                  </div>
            </div>
        </div>
</div>
@endsection
