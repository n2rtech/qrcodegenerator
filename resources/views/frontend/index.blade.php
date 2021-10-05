@extends('frontend.app')
@section('title', 'Welcome to Repslips')
@section('content')
    <div class="banner">
        <div class="container">
            <div class="caption">
                <h2>Organized and Secure Access to all your files</h2>
                <div class="banner-button">
                   <a href="{{route('register')}}" class="btn btn-primary">Sign Up for Free</a>
                </div>
            </div>
        </div>
    </div>
@endsection
