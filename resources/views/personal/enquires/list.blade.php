@extends('personal.app')
@section('title', 'Enquiries')
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Enquires</li>
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
                    <div class="row">
                        <div class="col-sm-4">
                                <h3 class="header-title">Enquiries</h3>
                        </div>
                        <div class="col-sm-8 text-right">
                            <a href="{{ route('personal.enquiries.create') }}" class="btn btn-success mb-3"><i
                                    class="mdi mdi-plus"></i> Enquiry</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-centered datatable datatable-ProductCategory">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Ref</th>
                                        <th>Product Type</th>
                                        <th>PTI No.</th>
                                        <th>Job No.</th>
                                        <th>Panel Name</th>
                                        <th>Construction Type</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enquiries as $enquiry)
                                        <tr>
                                            <td># {{ $enquiry->id }}</td>
                                            <td>{{ $enquiry->product_type }}</td>
                                            <td>{{ $enquiry->pti_no }}</td>
                                            <td>{{ $enquiry->job_no }}</td>
                                            <td>{{ $enquiry->panel_name }}</td>
                                            <td>{{ $enquiry->construction_type }}</td>
                                            <td class="table-action text-center">
                                                <a href="{{ route('personal.enquiries.show', $enquiry->id) }}"
                                                    class="btn btn-primary"><i class="mdi mdi-eye-outline"></i> </a>
                                                <a href="{{ route('personal.enquiries.edit', $enquiry->id) }}"
                                                    class="btn btn-warning"><i class="mdi mdi-pencil"></i> </a>
                                                <button type="button" onclick="confirmDelete({{ $enquiry->id }})"
                                                    class="btn btn-danger"><i class="mdi mdi-delete"></i> </button>
                                                <form id='delete-form{{ $enquiry->id }}'
                                                    action='{{ route('personal.enquiries.destroy', $enquiry->id) }}'
                                                    method='POST'>
                                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                    <input type='hidden' name='_method' value='DELETE'>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12">
                            {{ $enquiries->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
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
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form' + no).submit();
                }
            })
        };
    </script>
@endpush
