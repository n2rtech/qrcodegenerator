
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Replsips" name="description" />
    <meta content="Replsips" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/css/personal.css')}}" rel="stylesheet" type="text/css"/>
    @yield('head')
</head>

<body>
 <!-- Pre-loader -->
 <div id="preloader">
    <div id="status">
        <div class="spinner-border avatar-lg text-primary" role="status"></div>
    </div>
</div>
<!-- End Preloader-->
<div class="wrapper">
    @include('personal.sections.sidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            @include('personal.sections.navbar')

            <div class="container-fluid">

               @yield('content')

           </div>

       </div>

   </div>

   <!-- ============================================================== -->
   <!-- End Page content -->
   <!-- ============================================================== -->

</div>


@include('personal.sections.rightbar')

<!-- App Scripts -->
<script language="JavaScript" type="text/javascript" src="{{asset('assets/js/vendor.js')}}"></script>
<script language="JavaScript" type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
@stack('scripts')
</body>
</html>
