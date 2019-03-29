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
                            <form class="form-horizontal" method="POST" action="{{route('contactinfo.store')}}"  >
                                @csrf
                                <div class="card-body">
                                    <h4 class="card-title">Add Contact Information </h4>
                                    <div class="form-group" >
                                        <label for="current_password" >Left Title*</label>
                                        <input id="current_password" name="l_title" type="text" class="required form-control" placeholder="title Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="current_password" >Left Description*</label>
                                        <textarea id="current_password" name="l_description" type="text" class="required form-control" placeholder="description Here"></textarea>

                                    </div>

                                    <div class="form-group" >
                                        <label for="current_password" >Right Title*</label>
                                        <input id="current_password" name="r_title" type="text" class="required form-control" placeholder="title Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="current_password" >Right Address*</label>
                                        <input id="current_password" name="r_address" type="text" class="required form-control" placeholder="address Here">

                                    </div>

                                    <div class="form-group" >
                                        <label for="current_password" >Right Description*</label>
                                        <textarea id="current_password" name="r_description" type="text" class="required form-control" placeholder="description Here"></textarea>

                                    </div>
                                    <div class="form-group" >
                                        <label for="current_password" >Right Phone Number*</label>
                                        <input id="current_password" name="r_phone" type="text" class="required form-control" placeholder="phone number Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="current_password" >Right Email*</label>
                                        <input id="current_password" name="r_email" type="email" class="required form-control" placeholder="email Here">

                                    </div>
                                    <div class="form-group" >
                                        <label for="current_password" >Right Web Address*</label>
                                        <input id="current_password" name="r_web" type="text" class="required form-control" placeholder="web address Here">

                                    </div>




                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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