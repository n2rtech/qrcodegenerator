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
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div class="row">
                <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Rent</h5>
                            <h3 class="mt-3 mb-3">$399</h3>
                             <div class="float-left">
                                <i class="mdi mdi-home"></i>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Gas</h5>
                            <h3 class="mt-3 mb-3">$22.99</h3>
                            <div class="float-left">
                                <i class="mdi mdi-gas-cylinder"></i>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Food</h5>
                            <h3 class="mt-3 mb-3">$39.87</h3>
                            <div class="float-left">
                                <i class="mdi mdi-food"></i>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Others</h5>
                            <h3 class="mt-3 mb-3">$13.73</h3>
                            <div class="float-left">
                                <i class="mdi mdi-spa"></i>
                            </div>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> <!-- end col -->
{{-- 
        <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 col-xl-4">
            <div class="text-center">
                {!! QrCode::size(250)->generate(Auth::user()->mobile) !!}
                <p class="text-dark mt-3">Scan this QR Code to login in other device</p>
            </div>
        </div> --}}
        <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 col-xl-4">
            <div class="notification">
                <h4 class="notification-title">Notifications</h4>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
                <div class="toast-header">
                    <img src="../assets/images/logo_sm_dark.png" alt="brand-logo" height="12" class="mr-1" />
                    <strong class="mr-auto">Hyper</strong>
                    <small>11 mins ago</small>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
                <div class="toast-header">
                    <img src="../assets/images/logo_sm_dark.png" alt="brand-logo" height="12" class="mr-1" />
                    <strong class="mr-auto">Hyper</strong>
                    <small>11 mins ago</small>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
            <div class="getting-started">
                <h4 class="getting-started-title">Getting Started</h4>
                <div class="toast-header">
                    <img src="../assets/images/logo_sm_dark.png" alt="brand-logo" height="12" class="mr-1" />
                    <strong class="mr-auto">Hyper</strong>
                    <small>11 mins ago</small>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
                <div class="toast-header">
                    <img src="../assets/images/logo_sm_dark.png" alt="brand-logo" height="12" class="mr-1" />
                    <strong class="mr-auto">Hyper</strong>
                    <small>11 mins ago</small>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
            <div class="view-all text-center">
                <button class="btn btn-success">
                    <a href="#">View All</a>
                </button>
            </div>
        </div>
    </div>
        <div class="row">
                <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                    <div class="card">
                        <div class="card-body">
                            <a href="" class="btn btn-sm btn-link float-right mb-3">Export
                                <i class="mdi mdi-download ml-1"></i>
                            </a>
                            <h4 class="header-title mt-2">Recent Receipts</h4>

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
