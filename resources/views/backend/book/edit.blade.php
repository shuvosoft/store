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
                            <form class="form-horizontal" method="POST" action="{{route('book.update',$book->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <h4 class="card-title">Update Book </h4>




                                    <div class="form-group" >
                                        <label for="current_password" >Book Name*</label>
                                        <input id="current_password" name="name" type="text" value="{{$book->name}}" class="required form-control" placeholder="Book Name Here">

                                    </div>



                                    <div class="form-group" >
                                        <label for="current_password" >Book Price*</label>
                                        <input id="current_password" name="price" type="text" value="{{$book->price}}" class="required form-control" placeholder="Book Name Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="current_password" >Book Quantity*</label>
                                        <input id="current_password" name="quantity" type="text" value="{{$book->quantity}}" class="required form-control" placeholder="Book Name Here">

                                    </div>


                                    <div class="form-group row">
                                        <label for="brand" >Book Author Name*</label>
                                        <select class="form-control" name="author_id">

                                            @foreach (App\Author::orderBy('name', 'asc')->get() as $author)
                                                <option value="{{ $author->id }}" {{ $author->id == $book->author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group row">
                                        <label for="category" >Book Category*</label>
                                        <select class="form-control" name="category_id">

                                            @foreach (App\Category::orderBy('name', 'asc')->get() as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $book->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group" >
                                        <label for="price" >Book ISBN-NO*</label>
                                        <input id="isbn" name="isbn" type="number" value="{{$book->isbn}}" class="required form-control" placeholder="Book ISBN No Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="price" >Book Language*</label>
                                        <input id="language" name="language" value="{{$book->language}}" type="text" class="required form-control" placeholder="Book language Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="price" >Book Edition*</label>
                                        <input id="edition" name="edition" type="text" value="{{$book->edition}}" class="required form-control" placeholder="Book edition Here">

                                    </div>

                                    <div class="form-group">
                                        <label for="image" >Upload Book Image*</label><br>
                                        <input type="file" name="image" multiple >
                                    </div>

                                    <label for="New_password">Book Description *</label>
                                    <div  class="mb-5">
                                        <textarea id="mytextarea" name="description">{{$book->description}}</textarea>
                                    </div>


                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update Book</button>
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