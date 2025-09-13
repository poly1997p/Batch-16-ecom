@extends('backend.master')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Update Credentials</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Update Credentials</li>
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
                <div class="col-md-12">
                    <!--begin::Quick Example-->
                    <div class="card card-primary card-outline mb-4">
                        <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Input Credentials</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form action="{{url('/admin/update-credentials')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Body-->
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name*</label>
                                    <input type="text" class="form-control" value="{{$user->name}}" id="name" name="name" required/>
                                        
                                </div>
                               
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email*</label>
                                    <input type="email" class="form-control" value="{{$user->email}}" id="email" name="email" required/>
                                        
                                </div>

                                <div class="mb-3">
                                    <label for="old_password" class="form-label">Old password*</label>
                                    <input type="password" class="form-control" value="" id="old_password" name="old_password"/>
                                        
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">New password*</label>
                                    <input type="password" class="form-control" value="" id="password" name="password"/>
                                        
                                </div>

                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm password*</label>
                                    <input type="password" class="form-control" value="" id="confirm_password" name="confirm_password"/>
                                        
                                </div>
                               
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <!--end::Footer-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Quick Example-->

                </div>

               
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
