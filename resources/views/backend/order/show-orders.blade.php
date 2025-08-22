@extends('backend.master')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Order List</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Order List</li>
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
            <div class="row">
                <div class="col-md-12">

                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Manage Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Order Date</th>
                                        <th>Invoice</th>
                                        <th>Product(s)</th>
                                        <th>Customer Info</th>
                                        <th>Price</th>
                                        <th>Delivery Charge</th>
                                        <th>Courier</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$order->created_at}}</td>
                                        <td>{{$order->invoice_number54}}</td>
                                        <td>
                                            @foreach ($order->orderDetails as $details)
                                                <img src="{{asset('backend/images/product/'.$details->product->image)}}" height="100" width="100">
                                                 {{$details->product->name}} x {{$details->qty}} <br>
                                            @endforeach
                                            
                                        </td>

                                        <td>
                                            <p style="color: red">{{$order->ip_address}}</p>
                                            Name: {{$order->name}}
                                            <p style="color: green"><b>Phone: {{$order->phone}}</b></p>
                                            <strong class="text-primary">Address: {{$order->address}} </strong>
                                        </td>

                                        <td>{{$order->price}}</td>
                                        <td>{{$order->charge}}</td>
                                        <td>
                                            {{$order->courier_name??"courier not selected"}}
                                            <p class="text-success">{{$order->consingment_id}}</p>
                                        </td>
                                        <td>{{ucfirst($order->status)}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Details</a>
                                            <a href="#" onclick="return confirm('Are You Sure?')"
                                                class="btn btn-danger">Delete</a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection
