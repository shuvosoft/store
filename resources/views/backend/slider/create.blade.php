@extends('layouts.backend.app')

@section('title','Slider Create')

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
                            <form class="form-horizontal" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Create Slider </h4>
                                        <div class="slider-title">

                                            {{--<div class="col-sm-12 ">--}}
                                                {{--<label for="fname" >Slider Title ::</label>--}}

                                                {{--<div  style="height: 100px;" class="mb-5">--}}
                                                    {{--<textarea id="editor" name="title"  class="required form-control" placeholder="Slider Title Here"></textarea>--}}

                                                {{--</div>--}}
                                            {{--</div>--}}
                                        </div>





                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Image ::</label>

                                        <div class="col-sm-9 ">
                                            <input class=" mt-4" type="file" name="image">
                                        </div>
                                    </div>

                                    {{--<div class="form-group row">--}}
                                        {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Button Text ::</label>--}}
                                        {{--<div class="col-sm-9">--}}
                                            {{--<input type="text" name="button_text" class="form-control" id="fname" placeholder="Slider Button Text Here">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group row">--}}
                                        {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Button Link ::</label>--}}

                                        {{--<div class="col-sm-9">--}}
                                            {{--<input type="url" name="button_link" class="form-control" id="fname" placeholder="Slider Button link Here">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group row">--}}

                                        {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Slider Priority ::</label>--}}

                                        {{--<div class="col-sm-9">--}}
                                        {{--<input type="number" name="priority" class="form-control" id="exampleInputEmail1"  placeholder="Enter priority">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}



                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Create Slider</button>
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
    <!-- TinyMCE -->
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key"></script>

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