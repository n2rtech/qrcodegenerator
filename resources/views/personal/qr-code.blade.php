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
                    <li class="breadcrumb-item active">QR Code</li>
                </ol>
            </div>
            <h4 class="page-title">QR Code</h4>
        </div>
    </div>
</div>
@include('business.sections.flash-message')
<!-- end page title -->
<div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 card border-info border">
        <div class="text-center mt-3">
            {!! QrCode::size(360)->generate(Auth::user()->mobile) !!}
            <div class="col-xl-12 col-lg-12 col-sm-12 mt-3 mb-3"><i class="mdi mdi-qrcode-scan"></i>  <span class="text-dark"> Scan this QR Code to login in other device.</span></div>
        </div>
</div>
</div>
@endsection
