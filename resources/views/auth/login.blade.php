@extends('frontend.app')
@section('title', 'Login | ENQUIRES')
@section('head')

@endsection
@section('content')

    <div class="register-section">
        <div class="container">
            <h1>Login</h1>
            <form method="POST" action={{ route('login') }} id="loginForm">
                @csrf
                <div class="row">
                    <div class=" col-sm-offset-1 col-sm-5">

                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            @error('password')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="account-button text-center">
                            <button type="submit" class="btn btn-primary" id="btn-createaccount"
                                form="loginForm">Login</button>
                            <p>Don't have an account ? <strong><a href="{{ route('register') }}">Register
                                        Here</a></strong>
                                        <br/>
                                        <a href="{{ route('forget.password.get') }}">Forget password ?</a>
                            </p>
                        </div>
                        <div class="login-content">
                            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</h3>
                        </div>
                        
                    </div>
                    <div class="col-sm-6 register-img">
                        <div class="image-block"><img src="../assets/images/login.png" class="img-responsive" alt="Login">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="myModal modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <video id="preview" style="width:268px;"></video>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush
