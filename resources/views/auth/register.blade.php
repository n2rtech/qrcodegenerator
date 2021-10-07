@extends('frontend.app')
@section('title', 'Sign Up | Personal Account')
@section('content')
    <div class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-6">

                </div>
                <div class="col-sm-6 col-xs-6">
                    <div class="header-link">
                        <a href="#">Download App</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="register-section">
        <div class="container">
            <h1>Create A Seller Account</h1>
            <form method="POST" action={{ route('register') }} id="signupForm">
                @csrf
                <div class="row">
                    <div class=" col-sm-offset-1 col-sm-5">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="hidden" id="role" name="role" value="Personal">
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="First name" value="{{ old('firstname') }}">
                                @error('firstname')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Last Name" value="{{ old('lastname') }}">
                                @error('lastname')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"
                                value="{{ old('email') }}">
                            @error('email')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group col-sm-12">
                            <input type="number" class="form-control mb-2 inptFielsd" id="mobile" name="mobile" placeholder="Mobile Number"
                                value="{{ old('mobile') }}">
                            @error('mobile')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>

                        <p class="mailing-address">Seller Mailing Address</p>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" id="business_name" name="business_name"
                                placeholder="Company Name" value="{{ old('business_name') }}">
                            @error('business_name')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" id="address_1" name="address_1"
                                placeholder="Street Address" value="{{ old('address_1') }}">
                            @error('address_1')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" id="address_2" name="address_2"
                                placeholder="Street Address Line 2" value="{{ old('address_2') }}">
                            @error('address_2')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City"
                                    value="{{ old('city') }}">
                                @error('city')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="State / Province" value="{{ old('state') }}">
                                @error('state')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" id="zipcode" name="zipcode"
                                    placeholder="Postal / Zip Code" value="{{ old('zipcode') }}">
                                @error('zipcode')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-sm-6">
                                <select type="text" class="form-control" id="country" name="country">
                                    <option class="India" @if (old('country') == 'India') selected @endif)>India</option>
                                </select>
                                @error('country')
                                    <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <label id="label-2">Your mobile number will be verified for unique QR code</label>
                        <div class="form-group col-sm-12">
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                            @error('password')
                                <p class="text-danger" style="font-size: 13px;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group col-sm-12">
                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <div class="checkbox-section">
                                    <input class="form-check-input" type="checkbox" value="accepted" id="invalidCheck"
                                        name="terms">
                                    <label class="form-check-label" for="invalidCheck"
                                        style="font-size: 11px;font-weight:500;margin-left: 9px;">
                                        I agree to Repslips <span> T&C </span>
                                    </label>
                                    @error('terms')
                                        <p class="text-danger ml-2" style="font-size: 13px; margin-left: 16px;">
                                            {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="account-button text-center">
                            <button type="submit" class="btn btn-primary" id="btn-createaccount" form="signupForm">Create an
                                Account</button>
                            <p>Already have an account.? <strong><a href="{{ route('login') }}">Login</a></strong></p>
                        </div>
                    </div>
                    <div class="col-sm-6 register-img">
                        <div class="image-block"><img src="../assets/images/signup.png" class="img-responsive" alt="Sign Up">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- REQUIRED CDN  -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"
        integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw=="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css"
        integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        integrity="sha512-BNZ1x39RMH+UYylOW419beaGO0wqdSkO7pi1rYDYco9OL3uvXaC/GTqA5O4CVK2j4K9ZkoDNSSHVkEQKkgwdiw=="
        crossorigin="anonymous"></script>
    <!-- <script>
    var input = document.querySelector("#mobile");
    window.intlTelInput(input, {
        separateDialCode: true,
        //onlyCountries: ['us', 'gb'],
        preventInvalidNumbers: true,
        formatOnDisplay: true,
        autoFormat: true,
        customPlaceholder: function (
            selectedCountryPlaceholder,
            selectedCountryData
        ) {
            return "e.g. " + selectedCountryPlaceholder;
        },
    });
</script> -->

@endsection
