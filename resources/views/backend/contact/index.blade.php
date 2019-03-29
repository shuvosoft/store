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
                <h5 class="card-title">All Customer Message</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th> Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone No.</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $key=>$contact)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->last_name}}</td>
                            <td>{{$contact->Phone}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{str_limit($contact->message,'25')}}</td>
                            <td>{{$contact->created_at}}</td>

                            <td class="text-center">
                                <a href="{{route('contact.show',$contact->id)}}" class="btn btn-info waves-effect" >
                                    <i class="material-icons">View</i>
                                </a>
                                <button class="btn btn-danger waves-effect" type="button" onclick="deleteCategory({{$contact->id }})">
                                    <i class="material-icons">delete</i>
                                </button>
                                <form id="delete-form-{{$contact->id }}" action="{{ route('contact.destroy',$contact->id) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>

                            </td>


                        </tr>

                            @endforeach

                        </tbody>
                        <tfoot>
                        <tr>
                            <th> Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone No.</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
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

    <script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteCategory(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush