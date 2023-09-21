@extends('Admin.layout.master')
@section('title')
    Category Index
@endsection
@section('content')
    <nav aria-label="breadcrumb" class="my-3 mx-4 px-1">
        <ol class="breadcrumb breadcrumb-style2 mb-0">
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="javascript:void(0);">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
    <div class="container-xxl flex-grow-1 ">
        <h4 class="fw-bold py-3 mb-4">
            <span class=" fw-light">Blog category
               <a href="#"><div class="btn btn-info float-end btn-sm" ><i class="fa-solid fa-plus"></i> Category add</div></a>
        </h4>
        <!--table -->
        <div class="row">
            <div class="col-md-8 py-2 order-md-first">
                <div class="card">
                    <h5 class="card-header">Blog category table</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light text-center">
                                <tr>
                                    <th>Sl</th>
                                    <th>Image</th>
                                    <th>Category name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0 text-center ">
                                <tr>
                                    <td> <strong>01</strong></td>
                                    <td>Image</td>
                                    <td>Albert Cook</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--form-->
            <div class="col-md-4  order-sm-first order-first py-2  " id="createForm">
                <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Category add</h5>
                      </div>
                       <div class="card-body">
                        <form>
                          <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category  Name</label>
                            <input type="text" class="form-control" id="basic-default-fullname"  />
                          </div>
                          <div class="mb-3">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="formFile" />
                          </div>
                          <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>


<script>
    function openCreateForm(){
        console.log('oke');
    }
</script>


    @endsection
