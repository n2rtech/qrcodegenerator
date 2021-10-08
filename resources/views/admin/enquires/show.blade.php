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
					<li class="breadcrumb-item active"><a href="{{route('admin.enquiries.show',$enquiry->id)}}">Enquiries</a></li>
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
						<a href="{{ url()->previous() }}" class="btn btn-outline-dark">Back </a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<table class="table table-bordered table-centered mb-0">
                    <tbody>
                        <tr>
                            <th>Customer</th>
                            <td>{{$enquiry->customer_details}}</td>
                        </tr>
                        <tr>
                            <th>Product Type</th>
                            <td>{{$enquiry->product_type}}</td>
                        </tr>
                        <tr>
                            <th>PTI No</th>
                            <td>{{$enquiry->pti_no}}</td>
                        </tr>
                        <tr>
                            <th>S No. / Job No.</th>
                            <td>{{$enquiry->job_no}}</td>
                        </tr>
                        <tr>
                            <th>Panel Name</th>
                            <td>{{$enquiry->panel_name}}</td>
                        </tr>
                        <tr>
                            <th>Construction Type</th>
                            <td>{{$enquiry->construction_type}}</td>
                        </tr>
                        <tr>
                            <th>Rating</th>
                            <td>{{$enquiry->rating}}</td>
                        </tr>
                        @if($enquiry->files->count() > 0)
                        <tr>
                            <th>Files</th>
                            <td>
                                @foreach($enquiry->files as $file)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{$file->filename}}
                                        <div class="btn-group mb-2">
                                        <a href="{{route('admin.download.file',$file->id)}}" class="btn btn-sm btn-primary"><i class="mdi mdi-download"></i> </a>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $file->id }})"><i class="mdi mdi-window-close"></i> </button>
                                        <form id='delete-form{{ $file->id }}'
                                            action='{{ route('admin.delete.file', $file->id) }}'
                                            method='POST'>
                                            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                            <input type='hidden' name='_method' value='DELETE'>
                                        </form>
                                        </div>
                                    </li>
                                    @endforeach
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <th>QR Code</th>
                            <td>{!! QrCode::size(120)->generate($path) !!}</td>
                        </tr>
                    </tbody>
                </table>

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
