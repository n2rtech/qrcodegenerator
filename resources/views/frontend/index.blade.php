@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-7 col-lg-7">
                    <div class="caption">
                        <h2>Organized and Secure <b>Access to all your files</b></h2>
                        <div class="banner-button">
                           <a href="{{route('register')}}" class="btn btn-primary">Sign Up for Free</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <img src="assets/images/secure.png" class="img-responsive" alt="Secure">
                </div>
                
            </div>
        </div>
        
    </div>
@endsection
