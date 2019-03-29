@extends('layouts.backend.app')

@section('title','Category Create')

@push('css')

@endpush

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="{{route('author.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Author </h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Author Name ::</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="fname" placeholder="Author Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Author About ::</label>
                                        <div class="col-sm-9">
                                            <textarea  name="about" class="form-control" id="fname" placeholder="Author About Here"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Create Author</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush