@extends('layouts.backend.app')

@section('title','Category Create')

@push('css')
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
                <div class="menu mt-4 mb-4">
                    <a href="{{route('menu.index')}}"><button class="btn btn-danger">Back</button></a>

                </div>
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                            <form class="form-horizontal" method="POST" action="{{route('menu.store')}}">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add Menu </h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Menu Name ::</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" id="fname" placeholder="Menu Name Here">
                                        </div>
                                    </div>
                                </div>


                                {{--<div class="card">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label class="col-md-3 m-t-15">Select Book Category</label>--}}
                                            {{--<div class="col-md-9">--}}
                                                {{--<select class="select2 form-control m-t-15" multiple="multiple" name="categories[]" id="category_id[]"  style="height: 36px;width: 100%;">--}}
                                                    {{--<optgroup label="Please Select Book Category">--}}
                                                        {{--@foreach($categories as $category)--}}
                                                            {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</optgroup>--}}

                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                                {{--<div class="card">--}}
                                    {{--<div class="card-body">--}}
                                        {{--<div class="form-group row">--}}
                                            {{--<label class="col-md-3 m-t-15">Select Book Author</label>--}}
                                            {{--<div class="col-md-9">--}}
                                                {{--<select class="select2 form-control m-t-15" multiple="multiple"  name="author_id" style="height: 36px;width: 100%;">--}}
                                                    {{--<optgroup label="Please Select Book Author">--}}
                                                        {{--@foreach($authors as $author)--}}
                                                            {{--<option value="{{$author->id}}">{{$author->name}}</option>--}}
                                                        {{--@endforeach--}}
                                                    {{--</optgroup>--}}

                                                {{--</select>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}

                                {{--</div>--}}


                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Create Menu</button>
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
    <!-- This Page JS -->
    <script src="{{asset('assets/backend/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('assets/backend/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/backend/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

@endpush