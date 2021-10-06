@extends('frontend.app')
@section('title', 'Welcome')
@section('content')
<div class="banner">
    <div class="container">
        <div class="caption text-center">
                <div class="alert alert-success" role="alert">
                    {{ __('Your Account Verification is under process by Administration.') }}
                </div>

            {{ __('It takes 24-48 hours for a Business account to get verified in our system.') }}
            {{ __('You will be verified very soon. Thank you for visiting us.') }}

                <a href="{{url('/')}}"
                    class="btn btn-link p-0 m-0 align-baseline">{{ __('Go to Homepage') }}</a>.

        </div>
    </div>
</div>
@endsection
