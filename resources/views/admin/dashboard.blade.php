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
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Enquiries</h4>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Leads</th>
                                <th>Deals</th>
                                <th>Tasks</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Jeremy Young</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>187</td>
                                <td>154</td>
                                <td>49</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Thomas Krueger</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>235</td>
                                <td>127</td>
                                <td>83</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Pete Burdine</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>365</td>
                                <td>148</td>
                                <td>62</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Mary Nelson</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>753</td>
                                <td>159</td>
                                <td>258</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Kevin Grove</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>458</td>
                                <td>126</td>
                                <td>73</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
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
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h4 class="header-title mb-4">Latest Leads</h4>

                <div class="media">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-warning-lighten float-right">Cold lead</span>
                        <h5 class="mt-0 mb-1">Risa Pearson</h5>
                        <span class="font-13">richard.john@mail.com</span>
                    </div>
                </div>

                <div class="media mt-3">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-danger-lighten float-right">Lost lead</span>
                        <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                        <span class="font-13">margaret.evans@rhyta.com</span>
                    </div>
                </div>

                <div class="media mt-3">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-success-lighten float-right">Won lead</span>
                        <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                        <span class="font-13">bryuellen@dayrep.com</span>
                    </div>
                </div>

                <div class="media mt-3">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-warning-lighten float-right">Cold lead</span>
                        <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                        <span class="font-13">collier@jourrapide.com</span>
                    </div>
                </div>

                <div class="media mt-3">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-warning-lighten float-right">Cold lead</span>
                        <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                        <span class="font-13">thykauper@rhyta.com</span>
                    </div>
                </div>

                <div class="media mt-3">
                    <img class="mr-3 rounded-circle" src="assets/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-success-lighten float-right">Won lead</span>
                        <h5 class="mt-0 mb-1">Zara Raws</h5>
                        <span class="font-13">austin@dayrep.com</span>
                    </div>
                </div>

            </div>
        </div>
    </div> 
</div>
</div> 
</div> 
@endsection
