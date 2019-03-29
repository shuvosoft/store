@extends('layouts.backend.app')

@section('title','Author Edit')

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
                            <form class="form-horizontal" method="POST" action="{{route('author.update',$author->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h4 class="card-title">Update Category </h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Author Name ::</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" value="{{$author->name}}" placeholder="Author Name Here">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Author About ::</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" name="about" class="form-control"  placeholder="Author About Here">{{$author->about}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" name="image">
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update Author</button>
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