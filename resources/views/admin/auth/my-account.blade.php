@extends('admin.app')
@section('title', 'My Account')
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
					<li class="breadcrumb-item">Settings</li>
					<li class="breadcrumb-item active">My Account</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@include('admin.sections.flash-message')
<!-- end page title -->
<div class="row">
	<div class="col-12">
		<div class="card border-dark border">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						<h4 class="mt-2">My Account</h4>
					</div>
					<div class="col-md-8 text-right">
						<a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back </a>
						<button type="submit" class="btn btn-warning btn-sm" form="accountForm"><i class="mdi mdi-content-save"></i>  Update </button>
					</div>
				</div>
			</div>
			<div class="card-body">
				<form class="form-horizontal" id="accountForm" action="{{route('admin.my-account.update', $admin->id)}}" method="POST" enctype="multipart/form-data">

					@csrf
					@method('PUT')


					<div class="form-group row mb-3">
						<label for="name" class="col-3">Name</label>
						<div class="col-9">
							<input type="text" id="name" name="name" class="form-control" value="{{$admin->name}}">
							@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group row mb-3">
						<label for="email" class="col-3">Email</label>
						<div class="col-9">
							<input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{$admin->email}}">
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
					</div>

					<div class="form-group row mb-3">
						<label for="mobile" class="col-3">Telephone</label>
						<div class="col-9">
							<input type="number" id="mobile" name="mobile" class="form-control" value="{{$admin->mobile}}">
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
							<img id="preview_img" src="{{$admin->avatar}}" class="mt-2" width="150" height="150"/>
						</div>
					</div>

					<div class="form-group mb-0 justify-content-end row text-right">
						<div class="col-9">
							<button type="accountForm" class="btn btn-warning btn-sm" form="accountForm"><i class="mdi mdi-content-save"></i> Update </button>
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
