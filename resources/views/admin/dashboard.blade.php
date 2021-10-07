@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Admin Dashboard</h4>
        </div>
    </div>
</div>
@include('admin.sections.flash-message')
<!-- end page title -->

<!-- end row-->
 <div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Enquiries</h4>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Product Type</th>
                                <th>Job No.</th>
                                <th>Panel Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enquiries as $enquiry)
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">{{$enquiry->user->firstname}}{{$enquiry->user->lastname}}</h5>
                                    <span class="text-muted font-13">{{$enquiry->user->role}}</span>
                                </td>
                                <td>{{$enquiry->product_type}}</td>
                                <td>{{$enquiry->job_no}}</td>
                                <td>{{$enquiry->panel_name}}</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col-->

    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Latest Seller</h4>
                @foreach($users as $user)
                <div class="media mb-3">
                    <img class="mr-3 rounded-circle" src="{{$user->profile_picture}}" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        @if($user->status == 1)
                        <span class="badge badge-success-lighten float-right">Approved</span>
                        @endif
                        @if($user->status == 0)
                        <span class="badge badge-danger-lighten float-right">Not approved</span>
                        @endif
                        <h5 class="mt-0 mb-1">{{$user->firstname}} {{$user->lastname}}</h5>
                        <span class="font-13">{{$user->email}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
