<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Repslips" name="description" />
    <meta content="Repslips" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- App fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    @yield('head')
</head>

<body>
    <div class="header-top">
        <div class="container">
        @include('frontend.sections.navbar')
        </div>
    </div>
    
    @yield('content')
    @include('frontend.sections.sub-footer')
    @include('frontend.sections.footer')
    <!-- App Scripts -->
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>

</html>
