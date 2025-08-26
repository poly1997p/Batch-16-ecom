@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Order Details</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row g-4">

                <!--begin::Col-->
                <form action="{{url('/admin/order/update/{id}')}}" method="POST" enctype="multipart/form-data">
                 @csrf

                 <div class="col-md-6">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Customer Info</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                       
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Invoice Number*</label>
                                    <input type="text" class="form-control" value="order-1" id="name" name="name" readonly/>
                                 </div>
                               
                               
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Customer Name*</label>
                                    <input type="text" class="form-control" value="developer-test" id="name" name="name" readonly/>
                                 </div>

                                 <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Customer Phone*</label>
                                    <input type="text" class="form-control" value="018XXXxxxxx" id="name" name="name" readonly/>
                                 </div>
                               
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            
                            <!--end::Footer-->
                        
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->

                </div>

                 <div class="col-md-6">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Product Info</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category name*</label>
                                    <input type="text" class="form-control" id="name" name="name" required/>
                                        
                                  
                                </div>
                               
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="" name="image" required/>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>

                               
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Order</button>
                            </div>
                            <!--end::Footer-->
                        
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->

                </div>

                </form>
               
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
