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
                <h4 class="page-title">Personal Dashboard</h4>
            </div>
        </div>
    </div>
    @include('personal.sections.flash-message')
    <!-- end page title -->
    

        
        
    
        <div class="row">
                <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-sm btn-link float-right mb-3">Export
                                <i class="mdi mdi-download ml-1"></i>
                            </a>
                            <h4 class="header-title mt-2">Latest</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">ASOS Ridley High Waist</h5>
                                                <span class="text-muted font-13">07 April 2018</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$79.49</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">82</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$6,518.18</h5>
                                                <span class="text-muted font-13">Amount</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">Marco Lightweight Shirt</h5>
                                                <span class="text-muted font-13">25 March 2018</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$128.50</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">37</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$4,754.50</h5>
                                                <span class="text-muted font-13">Amount</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">Half Sleeve Shirt</h5>
                                                <span class="text-muted font-13">17 March 2018</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$39.99</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">64</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$2,559.36</h5>
                                                <span class="text-muted font-13">Amount</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">Lightweight Jacket</h5>
                                                <span class="text-muted font-13">12 March 2018</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$20.00</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">184</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$3,680.00</h5>
                                                <span class="text-muted font-13">Amount</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">Marco Shoes</h5>
                                                <span class="text-muted font-13">05 March 2018</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$28.49</h5>
                                                <span class="text-muted font-13">Price</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">69</h5>
                                                <span class="text-muted font-13">Quantity</span>
                                            </td>
                                            <td>
                                                <h5 class="font-14 my-1 font-weight-normal">$1,965.81</h5>
                                                <span class="text-muted font-13">Amount</span>
                                            </td>
                                        </tr>

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
