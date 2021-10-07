@extends('frontend.app')
@section('title', 'Welcome')
@section('content')

        <div class="container">
            <div class="power-tech">
                <div class="border-head">
                    <div class="lebal-head">
                        <img src="../assets/images/logo.jpg" class="img-responsive" alt="Logo">
                            <p>D-6 Kavi Nagar Industrial Area,<br>Ghaziabad 201002- Delhi NCR</p>
                    </div>
                </div>
                <div class="table-responsive border-slip">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>PRODUCT TYPE</th>
                                <th>{{$enquiry->product_type}}</th>
                            </tr>
                            <tr>
                                <th>PTI NO.</th>
                                <th>{{$enquiry->pti_no}}</th>
                            </tr>
                            <tr>
                                <th>S.O. NO.</th>
                                <th>{{$enquiry->job_no}}</th>
                            </tr>
                            <tr>
                                <th>PANEL NAME</th>
                                <th>{{$enquiry->panel_name}}</th>
                            </tr>
                            <tr>
                                <th>TYPE OF PANEL</th>
                                <th>{{$enquiry->construction_type}}</th>
                            </tr>
                            <tr>
                                <th>Rating</th>
                                <th>{{$enquiry->rating}}</th>
                            </tr>
                            <tr>
                                <th>Files</th>
                                <th>
                                    @foreach($enquiry->files as $file)
                                    <a href="{{route('download.file', $file->id)}}">{{$file->filename}}</a><br>
                                    @endforeach
                                </th>
                            </tr>
                            <tr>
                                <th>Customer</th>
                                <th>{{$enquiry->customer_details}}</th>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>
        </div>


@endsection
