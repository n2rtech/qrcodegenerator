@extends('personal.app')
@section('title', 'Dashboard')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Seller Dashboard</h4>
            </div>
        </div>
    </div>
    @include('personal.sections.flash-message')
    <!-- end page title -->





        <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-2">Latest</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                        @foreach($enquiries as $enquiry)
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->customer_details}}</h5>
                                                <span class="text-muted font-13">Customer</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->product_type}}</h5>
                                                <span class="text-muted font-13">Type</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->pti_no}}</h5>
                                                <span class="text-muted font-13">PTI No.</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->job_no}}</h5>
                                                <span class="text-muted font-13">Job No.</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->panel_name}}</h5>
                                                <span class="text-muted font-13">Panel Name</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">{{$enquiry->construction_type}}</h5>
                                                <span class="text-muted font-13">Construction Type</span>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div>
            </div>
        </div>
        <script src="http://127.0.0.1:8000/assets/js/vendor/apexcharts.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="http://127.0.0.1:8000/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
@endsection
