@extends('layouts.frontend.app')

@section('title','Home')

@push('css')

@endpush

@section('content')

    <!-- Start Search Popup -->
    <div class="brown--color box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="#">
            <div class="field__search">
                <input type="text" placeholder="Search entire store here...">
                <div class="action">
                    <a href="#"><i class="zmdi zmdi-search"></i></a>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>




    <section class="wn_contact_area bg--white pt--80 pb--80 mt-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    {{--<div class="contact-form-wrap">--}}
                        @foreach($contactInfo as $info)
                        <h2 class="contact__title">{{$info->l_title}}</h2>
                        <p>{{$info->l_description}}</p>
                        @endforeach
                        {{--<form id="contact-form" action="{{route('contact.message')}}" method="post">--}}

                            {{--{{ csrf_field() }}--}}

                            {{--<div class="single-contact-form space-between">--}}
                                {{--<input type="text" name="name" placeholder="First Name*">--}}
                                {{--<input type="text" name="last_name" placeholder="Last Name*">--}}
                            {{--</div>--}}
                            {{--<div class="single-contact-form space-between">--}}
                                {{--<input type="email" name="email" placeholder="Email*">--}}
                                {{--<input type="text" name="Phone" placeholder="Phone No.*">--}}
                            {{--</div>--}}

                            {{--<div class="single-contact-form message">--}}
                                {{--<textarea name="message" placeholder="Type your message here.."></textarea>--}}
                            {{--</div>--}}
                            {{--<div class="contact-btn">--}}
                                {{--<button type="submit">Send </button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                    {{--<div class="form-output">--}}
                        {{--<p class="form-messege">--}}
                    {{--</div>--}}

                    @if (count($errors) > 0)
                        <div class="alert alert-danger ">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <form method="post" action="{{url('sendemail/send')}}">
                        {{ csrf_field() }}
                        <div class="form-group mt-5">
                            <label>Enter Your Name*</label>
                            <input type="text" name="name" class="form-control" value="" />
                        </div>

                        <div class="form-group mt-5">
                            <label>Enter Your Phone Number*</label>
                            <input type="text" name="phn" class="form-control" value="" />
                        </div>

                        <div class="form-group">
                            <label>Enter Your Email*</label>
                            <input type="text" name="email" class="form-control" value="" />
                        </div>
                        <div class="form-group">
                            <label>Enter Your Message*</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" class="btn btn-info" value="Send" />
                        </div>
                    </form>
                </div>




                <div class="col-lg-4 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__address">
                        @foreach($contactInfo as $info)
                        <h2 class="contact__title">{{$info->r_title}}</h2>

                       <p>{{$info->r_description}}</p>
                        <div class="wn__addres__wreapper">

                            <div class="single__address">
                                <i class="icon-location-pin icons"></i>
                                <div class="content">
                                    <span>address:</span>
                                    <p>{{$info->r_address}}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-phone icons"></i>
                                <div class="content">
                                    <span>Phone Number:</span>
                                    <p>{{$info->r_phone}}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-envelope icons"></i>
                                <div class="content">
                                    <span>Email address:</span>
                                    <p>{{$info->r_email}}</p>
                                </div>
                            </div>

                            <div class="single__address">
                                <i class="icon-globe icons"></i>
                                <div class="content">
                                    <span>website address:</span>
                                    <p>{{$info->r_web}}</p>
                                </div>
                            </div>

                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection

@push('js')

@endpush