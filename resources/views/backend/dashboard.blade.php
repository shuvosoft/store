@extends('layouts.backend.app')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                       <a href="{{route('category.index')}}"><h3 class="text-white"><i class="mdi mdi-chart-areaspline">Total Categories </i></h3></a>
                        <h1 class="font-light text-white">{{$category->count()}}</h1>

                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">

                        <a href="{{route('author.index')}}"><h3 class="text-white"><i class="mdi mdi-collage">Total Authors</i></h3></a>
                        <h1 class="font-light text-white">{{$author->count()}}</h1>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">

                        <a href="{{route('book.index')}}"> <h3 class="text-white"><i class="mdi mdi-border-outside">Total Books</i></h3></a>
                        <h1 class="font-light text-white">{{$book->count()}}</h1>
                    </div>
                </div>
            </div>
            <!-- Column -->



        </div>
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
@endsection

@push('js')

@endpush