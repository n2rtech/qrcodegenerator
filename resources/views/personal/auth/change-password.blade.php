@extends('personal.app')
@section('title', 'Change Password')
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="{{route('personal.dashboard')}}">Home</a></li>
					<li class="breadcrumb-item">Settings</li>
					<li class="breadcrumb-item active">Change Password</li>
				</ol>
			</div>
			<h4 class="page-title">Change Password</h4>
		</div>
	</div>
</div>
@include('personal.sections.flash-message')
<!-- end page title -->
<div class="row">
	<div class="col-12">
		<div class="card border-dark border">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						<h4 class="mt-2">Password</h4>
					</div>
					<div class="col-md-8 text-right">
						<a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back </a>
						<button type="submit" class="btn btn-warning btn-sm" form="passwordForm"><i class="mdi mdi-key"></i>  Update </button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form class="form-horizontal" id="passwordForm" action="{{route('personal.change-password')}}" method="POST" enctype="multipart/form-data">

					@csrf


					<div class="form-group mb-3">
						<label for="current_password">Current Password</label>
						<div class="input-group input-group-merge">
							<input id="current_password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" autocomplete="off" placeholder="Current Password">
							<div class="input-group-append" data-password="false">
								<div class="input-group-text">
									<span class="password-eye"></span>
								</div>
							</div>
							@error('current_password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group mb-3">
						<label for="password">New Password</label>
						<div class="input-group input-group-merge">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off" placeholder="New Password">
							<div class="input-group-append" data-password="false">
								<div class="input-group-text">
									<span class="password-eye"></span>
								</div>
							</div>
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group mb-3">
						<label for="password_confirmation">Confirm New Password</label>
						<div class="input-group input-group-merge">
							<input id="password_confirmation" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="off" placeholder="Confirm New Password">
							<div class="input-group-append" data-password="false">
								<div class="input-group-text">
									<span class="password-eye"></span>
								</div>
							</div>
							@error('password_confirmation')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>



					<div class="form-group mb-0 justify-content-end row text-right">
						<div class="col-9">
							<button type="submit" class="btn btn-warning btn-sm" form="passwordForm"><i class="mdi mdi-key"></i> Update </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
