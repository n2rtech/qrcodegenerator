@extends('admin.app')
@section('title', 'Show Enquiry')
@section('content')
<!-- start page title -->
<div class="row">
	<div class="col-12">
		<div class="page-title-box">
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
					<li class="breadcrumb-item"><a href="{{route('personal.enquiries.index')}}">Enquiries</a></li>
					<li class="breadcrumb-item active">Show</li>
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
						<h4 class="mt-2">Enquiries</h4>
					</div>
					<div class="col-md-8 text-right">
						<a href="{{route('personal.enquiries.edit',$enquiry->id)}}" class="btn btn-warning">Show</a>
						<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back </a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row no-gutters">

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
