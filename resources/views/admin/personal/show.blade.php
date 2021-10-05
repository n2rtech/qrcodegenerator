@extends('admin.app')
@section('title', 'Show Personal User')
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="{{route('admin.personal-users.index')}}">Personal User</a></li>
					<li class="breadcrumb-item active">{{$user->firstname}} {{$user->lastname}}</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card border-info border">
			<div class="card-header">
				<div class="row">
					<div class="col-md-4">
						<h4 class="mt-2">User Details</h4>
					</div>
					<div class="col-md-8 text-right">
						<a href="{{route('admin.personal-users.edit',['personal_user' => $user->id])}}" class="btn btn-warning">Show</a>
						<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back </a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row no-gutters">
					<div class="col-md-8">
						<dl class="row mb-0">

							<!-- Name -->
							<dt class="col-sm-4"><h5 class="card-title">Full Name</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$user->firstname}} {{$user->lastname}}</p></dd>
							<!-- end Name -->

							<!-- Email -->
							@if(!is_null($user->email))
							<dt class="col-sm-4"><h5 class="card-title">Email</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$user->email}}</p></dd>
							@endif
							<!-- end Email -->

							<!-- Mobile -->
							@if(!is_null($user->mobile))
							<dt class="col-sm-4"><h5 class="card-title">Mobile</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$user->mobile}}</p></dd>
							@endif
							<!-- end -->

							<!-- Verified -->
							<dt class="col-sm-4"><h5 class="card-title">Email Verified</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: @if(!is_null($user->email_verified_at)) Verified @else Not Verified @endif</p></dd>
							<!-- end Verified -->

							<!-- Last Updated -->
							<dt class="col-sm-4"><h5 class="card-title">Last Updated</h5></dt>
							<dd class="col-sm-8"><p class="card-text">: {{$user->updated_at->diffForHumans() }}</p></dd>
							<!-- end Last Updated -->
						</dl>
					</div>
					<div class="col-md-4">
						<img class="d-block img-fluid" src="{{ $user->profile_picture }}" alt="Profile Picture">
					</div>
				</div>

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
