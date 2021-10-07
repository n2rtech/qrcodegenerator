@extends('personal.app')
@section('title', 'Create Enquiry')
@section('head')
    <link href="{{ asset('css/rating.css') }}" media="all" rel="stylesheet" type="text/css" />
@endsection
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
                        <li class="breadcrumb-item active">Create</li>
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
                            <h4 class="mt-2">Create Enquiry</h4>
                        </div>
                        <div class="col-md-8 text-right">
                            <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm">Back </a>
                            <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i
                                    class="mdi mdi-content-save"></i> Save </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" id="enquiryForm" action="{{ route('personal.enquiries.store') }}"
                        method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group row mb-3">
                            <label for="customer" class="col-3 col-form-label">Customer</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="customer" placeholder="Customer Name"
                                    name="customer"
                                    value="{{ old('customer', isset($enquiry) ? $enquiry->customer : '') }}">
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
                                    <option value="HT Panels">HT Panels</option>
                                    <option value="LT Panels">LT Panels</option>
                                    <option value="C&R Panels">C&R Panels</option>
                                    <option value="CSS">CSS</option>
                                    <option value="RMU">RMU</option>
                                    <option value="OVCB">OVCB</option>
                                    <option value="CT">CT</option>
                                    <option value="PT">PT</option>
                                    <option value="LA">LA</option>
                                    <option value="Isolator">Isolator</option>
                                    <option value="Type 2 AC EV Charger">Type 2 AC EV Charger</option>
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
                                    <option value="Indoor">Indoor</option>
                                    <option value="Outdoor">Outdoor</option>
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
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                    <input type="radio" id="star4half" name="rating" value="4.5" />
                                    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                    <input type="radio" id="star3half" name="rating" value="3.5" />
                                    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3" title="Meh - 3 stars"></label>

                                    <input type="radio" id="star2half" name="rating" value="2.5" />
                                    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                    <input type="radio" id="star1half" name="rating" value="1.5" />
                                    <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                    <input type="radio" id="starhalf" name="rating" value="0.5" />
                                    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>

                                    <input type="radio" class="reset-option" name="rating" value="reset" />

                                </fieldset>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label for="files" class="col-3 col-form-label">Upload Files</label>
                            <div class="col-9">
                                <input type="file" id="files" name="files[]" class="form-control-file" multiple>
                            </div>
                        </div>


                        <div class="form-group mb-0 justify-content-end row text-right">
                            <div class="col-9">
                                <button type="submit" class="btn btn-success btn-sm" form="enquiryForm"><i
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
        $(".select2").select2({
            tags: true,
            placeholder: "Select Product Type"
        });
    </script>
    <script>
        $(document).ready(function() {

            $("input[type='radio']").click(function() {
                var sim = $("input[type='radio']:checked").val();
                //alert(sim);
                if (sim < 3) {
                    $('.myratings').css('color', 'red');
                    $(".myratings").text(sim);
                } else {
                    $('.myratings').css('color', 'green');
                    $(".myratings").text(sim);
                }
            });
        });
    </script>
@endpush
