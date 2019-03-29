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

    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($sliders as $slider)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{$loop->index == 0? 'active' : ''}}"></li>

                @endforeach

            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $slider)
                    <div class="carousel-item {{$loop->index == 0? 'active' : ''}}">
                        <img src="{{ Storage::disk('public')->url('slider/'.$slider->image) }}" alt="{{ $slider->title }}" class="d-block w-100" alt="...">
                        {{--<div class="text">--}}
                            {{--<h5>{{$slider->title}}</h5>--}}

                            {{--<a class="shopbtn" href="{{route('books.index')}}">{{$slider->button_text}}</a>--}}
                        {{--</div>--}}


                    </div>



                @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>

    </div>


    <!-- Start BEst Seller Area -->
    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        @foreach($newBook as $book)

                        <h2 class="title__be--2">{{$book->title}}</h2>

                            <p>{{$book->description}}</p>
                    @endforeach

                    </div>
                </div>
            </div>

            <div class="book-element">
                <div class="row">

                       @foreach($books as $book)

                           <div class=" sm-col-5 " >
                               <div class="image-b image-5" >
                               <a href="{{route('book.details',$book->slug)}}"><img class="mt-1 image-5" src="{{ Storage::disk('public')->url('book/'.$book->image) }}"></a>
                                   <div class="element">
                                       <a href="{{route('book.details',$book->slug)}}"><h3>{{str_limit($book->name,'29')}}</h3></a>
                                       <p style="text-align: center">{{$book->author->name}}</p>
                                       <h4 style="color: #333">TK. {{$book->price}}</h4>
                                       {{--<h6>Publication date : {{$book->publication_date}}</h6>--}}
                                   </div>


                               </div>
                           </div>

                       @endforeach

                </div>

            </div>




        </div>
            <!-- End Single Tab Content -->


    </section>
    <!-- Start BEst Seller Area -->




    <!--==  7. Afordable Pricing  ==-->
    <section id="pricing" class="pricing">
        <div id="w">
            <div class="pricing-filter">
                <div class="pricing-filter-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ">
                                <div class="section-header">
                                    {{--<h2 class="pricing-title">All Books</h2>--}}
                                    <ul id="filter-list" class="clearfix">
                                        <li class="filter" data-filter="all">All Book</li>
                                        @foreach($categories as $category)

                                            <li class="filter " data-filter="#{{ $category->slug }}"><a href="{{route('category.book',$category->slug)}}" style="color:#ffffff">{{ $category->name }}</a> <span class="badge"></span></li>
                                        @endforeach
                                    </ul><!-- @end #filter-list -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <ul id="menu-pricing" class="menu-price">
                            {{--@php--}}
                            {{--$m=App\Menu::find(1);--}}

                            {{--@endphp--}}
                            {{--@foreach($m->categories as $s)--}}
                                {{--{{$s->name}}--}}
                                {{--@endforeach--}}
                            <div class="row">

                            @foreach($pbooks as $book)

                                <div class="sm-col-5 ">
                                    <li class="item" >

                                        <a href="{{route('book.details',$book->slug)}}">
                                            <img src="{{ Storage::disk('public')->url('book/'.$book->image) }}" class="img-responsive" alt="Item" style="height: 240px;" >
                                            <div class="menu-desc text-center">
                                            <span>
                                                <h3>{{ str_limit($book->name ,'34')}}</h3>
                                                {{str_limit( $book->author->name,'20') }}
                                            </span>
                                            </div>
                                        </a>

                                        <h2 class="white">TK : {{ $book->price }}</h2>
                                    </li>
                                </div>

                            @endforeach
                            </div>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
        <div class="footer-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer__widget footer__menu">
                            @foreach($bookfooter as $footer)
                            <div class="ft__logo">
                            <a href="index.html">
                            <img src="{{ Storage::disk('public')->url('footerLogo/'.$footer->image) }}" alt="logo">
                            </a>

                            <p>{{$footer->title}}</p>

                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__widget footer__menu">
                            @foreach($contactInfo as $info)

                                <h2 class="contact__title">About</h2>


                                <p>{{$info->r_description}}</p>



                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__widget footer__menu">
                            @foreach($contactInfo as $info)


                                <h2 class="contact__title">{{$info->r_title}}</h2>


                                <div class="wn__addres__wreapper" style="margin-left: 53px">

                                    <div class="single__address mb-4">

                                        <div class="content">

                                            <p><i class="icon-location-pin icons" style="padding: 0px 9px; "></i>{{$info->r_address}}</p>
                                        </div>
                                    </div>

                                    <div class="single__address ">

                                        <div class="content">

                                            <p><i class="icon-phone icons" style="padding: 0px 9px"></i>{{$info->r_phone}}</p><br>
                                        </div>
                                    </div>

                                    <div class="single__address mb-3">

                                        <div class="content">

                                            <p><i class="icon-envelope icons" style="padding: 0px 9px; "></i>{{$info->r_email}}</p>
                                        </div>
                                    </div>



                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>









@endsection

@push('js')



@endpush