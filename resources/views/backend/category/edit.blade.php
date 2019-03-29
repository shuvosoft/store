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
                            <form class="form-horizontal" method="POST" action="{{route('category.update',$category->id)}}">
                                @csrf
                                @method('PUT')



                                <div class="card-body">
                                    <h4 class="card-title">Update Category </h4>




                                    <div class="form-group row">
                                        <label for="exampleInputEmail1">Select Book Menu</label>
                                        <select class="form-control" name="menu_id">

                                            <option value="">Please select Menu</option>
                                            <div class="col-sm-4">

                                                @foreach($menus as $menu)
                                                    <option
                                                            {{--@foreach($category->$menu as $categoryMenu)--}}
                                                                    {{--{{$categoryMenu->id == $menu_id ? 'selected' : ''}}--}}
                                                             {{--@endforeach--}}
                                                            value="{{$menu->id}}">{{$menu->name}}</option>



                                                @endforeach
                                            </div>

                                        </select>
                                    </div>


                                    <div class="form-group row">
                                        <label for="exampleInputEmail1">Category Name ::</label><br>



                                        <div class="col-sm-4">
                                            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="fname" placeholder="Category Name Here">

                                        </div>


                                    </div>



                                    {{--<div class="form-group row">--}}
                                    {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Name ::</label>--}}
                                    {{--<div class="col-sm-9">--}}
                                    {{--<input type="text" name="name" class="form-control" id="fname" placeholder="Category Name Here">--}}


                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Create Category</button>
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