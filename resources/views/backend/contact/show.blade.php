@extends('layouts.backend.app')

@section('title','contact')

@push('css')

    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('assets/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/backend/dist/css/style.min.css')}}" rel="stylesheet">

@endpush

@section('content')
    <div id="main-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> Customer Message</h5>
                            <div class="table-responsive mt-5">
                                <h1> Customer Name : {{$contact->name}} {{$contact->last_name}}</h1>
                                <h1> Customer Phone No : {{$contact->Phone}} </h1>
                                <h1> Customer Phone Email : {{$contact->email}} </h1>
                            </div>
                            <div class="msg">
                                <h1>Customer Message :-</h1>
                                <p style="font-size: 20px; line-height: 40px">{{$contact->message}}</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










@endsection

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!-- this page js -->
    <script src="{{asset('assets/backend/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('assets/backend/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('assets/backend/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>


@endpush