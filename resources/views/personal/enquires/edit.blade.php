@extends('personal.app')
@section('title', 'Edit Enquiry')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('personal.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('personal.enquiries.index') }}">Enquiries</a>
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
                            <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i
                                    class="mdi mdi-content-save"></i> Save </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="enquiryForm" action="{{ route('personal.enquiries.update', $enquiry->id) }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="form-group row mb-3">
                            <label for="customer" class="col-3 col-form-label">Customer</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="customer" placeholder="Customer Name"
                                    name="customer"
                                    value="{{ old('customer', isset($enquiry) ? $enquiry->customer_details : '') }}">
                                @if ($errors->has('customer'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="product_type" class="col-3 col-form-label">Product Type</label>
                            <div class="col-9">
                                <select class="form-control select2" name="product_type" id="product_type"
                                    data-toggle="select2">
                                    <option value="">Select Product Type</option>
                                    <option value="HT Panels" @if($enquiry->product_type == "HT Panels") selected @endif>HT Panels</option>
                                    <option value="LT Panels" @if($enquiry->product_type == "LT Panels") selected @endif>LT Panels</option>
                                    <option value="C&R Panels" @if($enquiry->product_type == "C&R Panels") selected @endif>C&R Panels</option>
                                    <option value="CSS" @if($enquiry->product_type == "CSS") selected @endif>CSS</option>
                                    <option value="RMU" @if($enquiry->product_type == "RMU") selected @endif>RMU</option>
                                    <option value="OVCB" @if($enquiry->product_type == "OVCB") selected @endif>OVCB</option>
                                    <option value="CT" @if($enquiry->product_type == "CT") selected @endif>CT</option>
                                    <option value="PT" @if($enquiry->product_type == "PT") selected @endif>PT</option>
                                    <option value="LA" @if($enquiry->product_type == "LA") selected @endif>LA</option>
                                    <option value="Isolator" @if($enquiry->product_type == "Isolator") selected @endif>Isolator</option>
                                    <option value="Type 2 AC EV Charger" @if($enquiry->product_type == "Type 2 AC EV Charger") selected @endif>Type 2 AC EV Charger</option>
                                    <option value="Other" @if($enquiry->product_type == "Other") selected @endif>Other</option>
                                </select>
                                @if ($errors->has('product_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="pti_no" class="col-3 col-form-label">PTI No.</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="pti_no" placeholder="PTI No" name="pti_no"
                                    value="{{ old('pti_no', isset($enquiry) ? $enquiry->pti_no : '') }}">
                                @if ($errors->has('pti_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pti_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="job_no" class="col-3 col-form-label">S.O No. / Job No.</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="job_no" placeholder="S.O No. / Job No."
                                    name="job_no" value="{{ old('job_no', isset($enquiry) ? $enquiry->job_no : '') }}">
                                @if ($errors->has('job_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('job_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="panel_name" class="col-3 col-form-label">Panel Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="panel_name" placeholder="Panel Name"
                                    name="panel_name"
                                    value="{{ old('panel_name', isset($enquiry) ? $enquiry->panel_name : '') }}">
                                @if ($errors->has('panel_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('panel_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="construction_type" class="col-3 col-form-label">Construction Type</label>
                            <div class="col-9">
                                <select class="form-control" name="construction_type" id="construction_type">
                                    <option value="Indoor" @if($enquiry->construction_type == "Indoor") selected @endif>Indoor</option>
                                    <option value="Outdoor" @if($enquiry->construction_type == "Outdoor") selected @endif>Outdoor</option>
                                    <option value="Other" @if($enquiry->construction_type == "Other") selected @endif>Other</option>
                                </select>
                                @if ($errors->has('construction_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('construction_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="rating" class="col-3 col-form-label">Rating</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="rating" placeholder="Rating" name="rating" value="{{ old('rating', isset($enquiry) ? $enquiry->rating : '') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="files" class="col-3 col-form-label">Upload More Files</label>
                            <div class="col-9">
                                <input type="file" id="files" name="files[]" class="form-control-file" multiple>
                            </div>
                        </div>

                    </form>
                    @if($enquiry->files->count() > 0)
                        <div class="form-group row mb-3">
                            <label for="files" class="col-3 col-form-label">Uploaded Files</label>
                            <div class="col-9">
                                <ul class="list-group">
                                    @foreach($enquiry->files as $file)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{$file->filename}}
                                        <div class="btn-group mb-2">
                                        <a href="{{route('personal.download.file',$file->id)}}" class="btn btn-sm btn-primary"><i class="mdi mdi-download"></i> </a>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $file->id }})"><i class="mdi mdi-window-close"></i> </button>
                                        <form id='delete-form{{ $file->id }}'
                                            action='{{ route('personal.delete.file', $file->id) }}'
                                            method='POST'>
                                            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                            <input type='hidden' name='_method' value='DELETE'>
                                        </form>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        @endif
                        <div class="form-group mb-0 justify-content-end row text-right">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i
                                        class="mdi mdi-content-save"></i> Save </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')


    <script>
        $(".select2").select2({
            tags: true,
            placeholder: "Select Product Type"
        });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function confirmDelete(no) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete File!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form' + no).submit();
                }
            })
        };
    </script>
@endpush
