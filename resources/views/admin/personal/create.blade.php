@extends('admin.app')
@section('title', 'Create Personal User')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.personal-users.index') }}">Personal Users</a>
                        </li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @include('admin.sections.flash-message')
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h4 class="mt-2">Create Personal User</h4>
                        </div>
                        <div class="col-md-8 text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back </a>
                            <button type="submit" class="btn btn-success btn-sm" form="personalUserForm"><i class="mdi mdi-content-save"></i> Save </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="personalUserForm" action="{{ route('admin.personal-users.store') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="form-group row mb-3">
                            <label for="firstname" class="col-3 col-form-label">First Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname"
                                    value="{{ old('firstname', isset($user) ? $user->firstname : '') }}">
                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="lastname" class="col-3 col-form-label">Last Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname"
                                    value="{{ old('lastname', isset($user) ? $user->lastname : '') }}">
                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="email" class="col-3 col-form-label">Email</label>
                            <div class="col-9">
                                <input type="email" class="form-control" id="email" placeholder="Email Address"
                                    name="email" value="{{ old('email', isset($user) ? $user->email : '') }}">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="mobile" class="col-3 col-form-label">Mobile Number</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="mobile" placeholder="Mobile Number"
                                    name="mobile" value="{{ old('mobile', isset($user) ? $user->mobile : '') }}">
                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="password" class="col-3 col-form-label">Password</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="password" placeholder="Password"
                                    name="password">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address_1" class="col-3 col-form-label">Address 1</label>
                            <div class="col-9">
                                <input type="text" name="address_1"
                                    value="{{ old('address_1', isset($user) ? $user->address_1 : '') }}"
                                    placeholder="Address Line 1" id="address_1" class="form-control">
                                @if ($errors->has('address_1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="address_2" class="col-3 col-form-label">Address 2</label>
                            <div class="col-9">
                                <input type="text" name="address_2"
                                    value="{{ old('address_2', isset($user) ? $user->address_2 : '') }}"
                                    placeholder="Address Line 2" id="address_2" class="form-control">
                                @if ($errors->has('address_2'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="city" class="col-3 col-form-label">City</label>
                            <div class="col-9">
                                <input type="text" name="city"
                                    value="{{ old('city', isset($user) ? $user->city : '') }}"
                                    placeholder="City" id="city" class="form-control">
                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="state" class="col-3 col-form-label">State</label>
                            <div class="col-9">
                                <input type="text" name="state"
                                    value="{{ old('state', isset($user) ? $user->state : '') }}"
                                    placeholder="State" id="state" class="form-control">
                                @if ($errors->has('state'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="zipcode" class="col-3 col-form-label">Postal / Zip Code</label>
                            <div class="col-9">
                                <input type="text" name="zipcode"
                                    value="{{ old('zipcode', isset($user) ? $user->zipcode : '') }}"
                                    placeholder="Postal / Zip Code" id="zipcode" class="form-control">
                                @if ($errors->has('zipcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zipcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="country" class="col-3 col-form-label">Country</label>
                            <div class="col-9">
                                <select type="text" class="form-control" id="country" name="country">
                                    <option>Select Country</option>
                                    <option class="United States of America" @if (old('country') == 'United States of America') selected @endif)>United States of
                                        America</option>
                                    <option class="United Kingdom" @if (old('country') == 'United Kingdom') selected @endif>United Kingdom</option>
                                </select>
                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label" for="input-status">Status</label>
                            <div class="col-sm-9">
                                <select name="status" id="input-status" class="form-control">
                                    <option value="1" selected="selected">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="avatar" class="col-3 col-form-label">Profile Picture</label>
                            <div class="col-9">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="avatar" name="avatar" onchange="loadPreview(this);">
                                        <label class="custom-file-label" for="avatar">Choose Image</label>
                                    </div>
                                </div>
                                @if($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                                @endif
                                <img id="preview_img" src="{{ asset('assets/images/placeholder.png') }}" class="mt-2" width="150" height="150"/>
                            </div>
                        </div>
                        <div class="form-group mb-0 justify-content-end row text-right">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" form="personalUserForm"><i
                                        class="mdi mdi-content-save"></i> Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
	function loadPreview(input, id) {
		id = id || '#preview_img';
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$(id)
				.attr('src', e.target.result)
				.width(150)
				.height(150);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@endpush
