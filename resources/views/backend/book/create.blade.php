@extends('layouts.backend.app')

@section('title','Book Create')

@push('css')
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/backend/assets/libs/quill/dist/quill.snow.css')}}">
    <link href="{{asset('assets/backend/dist/css/style.min.css')}}" rel="stylesheet">

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
                            <form class="form-horizontal" method="POST" action="{{route('book.store')}}"  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Book </h4>


                                    {{--<div class="form-group row">--}}
                                        {{--<label for="exampleInputEmail1">Select Book Menu</label>--}}
                                        {{--<select class="form-control" name="menu_id">--}}

                                            {{--<option value="">Please select Menu</option>--}}
                                            {{--<div class="col-sm-4">--}}
                                                {{--@foreach($menus as $menu)--}}
                                                    {{--<option value="{{$menu->id}}">{{$menu->name}}</option>--}}



                                                {{--@endforeach--}}
                                            {{--</div>--}}

                                        {{--</select>--}}
                                    {{--</div>--}}

                                    <div class="form-group" >
                                        <label for="current_password" >Book Name*</label>
                                        <input id="current_password" name="name" type="text" class="required form-control" placeholder="Book Name Here">

                                    </div>

                                    <div class="form-group" class="mb-5">
                                        <label for="category">Select Book Category *</label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Please Select Book Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" class="mb-5">
                                        <label for="category">Select Book Author *</label>
                                        <select class="form-control" name="author_id">
                                            <option value="">Please Select Book Author </option>
                                            @foreach($authors as $author)
                                                <option value="{{$author->id}}">{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book Price*</label>
                                        <input id="price" name="price" type="number" class="required form-control" placeholder="Book Price Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book Quantity*</label>
                                        <input id="price" name="quantity" type="number" class="required form-control" placeholder="Book quantity Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book ISBN-NO*</label>
                                        <input id="isbn" name="isbn" type="number" class="required form-control" placeholder="Book ISBN No Here">

                                    </div>


                                    <div class="form-group" >
                                        <label for="price" >Publisher*</label>
                                        <input id="publisher" name="publisher" type="text" class="required form-control" placeholder="Book publisher Name Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="price" >Publication date*</label>
                                        <input id="publication_date" name="publication_date" type="text" class="required form-control" placeholder="Book publication date  Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book Edition*</label>
                                        <input id="edition" name="edition" type="text" class="required form-control" placeholder="Book edition Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book Language*</label>
                                        <input id="edition" name="language" type="text" class="required form-control" placeholder="Book Language Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Number of pages*</label>
                                        <input id="page" name="page" type="number" class="required form-control" placeholder="Total Book page  Here">

                                    </div>

                                    <div class="form-group">
                                        <label for="image" >Upload Book Image*</label><br>
                                        <input type="file" name="image" multiple >
                                    </div>

                                    <label for="New_password">Book Description *</label>
                                    <div  class="mb-5">
                                        <textarea id="mytextarea" name="description"></textarea>
                                    </div>


                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Add Book</button>
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
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });

    </script>

@endpush