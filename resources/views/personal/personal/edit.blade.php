@extends('personal.app')
@section('title', 'Edit Enquiry')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.enquiries.index') }}">Enquiries</a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @include('personal.sections.flash-message')
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h4 class="mt-2">Edit Enquiry</h4>
                        </div>
                        <div class="col-md-8 text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back </a>
                            <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i class="mdi mdi-content-save"></i> Update </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="enquiryForm" action="{{ route('admin.enquiries.update', $enquiry->id) }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf


                        <div class="form-group mb-0 justify-content-end row text-right">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i
                                        class="mdi mdi-content-save"></i> Update </button>
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
