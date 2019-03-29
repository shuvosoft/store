@extends('layouts.frontend.app')

@section('title','Home')

@push('css')

@endpush

@section('content')
    <!-- Start Bradcaump area -->

    <!-- End Bradcaump area -->
    <!-- Start main Content -->
    <div class="maincontent bg--white pt--80 pb--55 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="wn__single__product">
                        <div class="row">
                            <div class="col-lg-6 col-12">

                                <div class="col-md-3">
                                    <div class="image-b" style="width: 320px" >
                                        <a href="{{route('book.details',$book->slug)}}"><img class="mt-1" src="{{ Storage::disk('public')->url('book/'.$book->image) }}" style=" height: 300px"></a>



                                    </div>
                                </div>
                                {{--<div class="book-img">--}}
                                    {{----}}
                                    {{--<div class="b-image" >--}}

                                        {{--<img class="mt-5" src="{{ Storage::disk('public')->url('book/'.$book->image) }}" >--}}

                                     {{--</div>--}}
                                    {{----}}
                                {{--</div>--}}
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="product__info__main">
                                    <h1 >Book Name : {{$book->name}}</h1>

                                    <div class="price-box">
                                        <span style="color: #E59285">Price : {{$book->price}}TK</span>
                                    </div>



                                    <div class="product_meta mt-3">
											<span class="posted_in" style="color: #E59285">Author :

												<a href="#">{{$book->author->name}}</a>,


											</span>
                                    </div>

                                    <div class="product_meta mt-3">
											<span class="posted_in " style="color: #E59285">Language :

												<a href="#">{{$book->language}}</a>,


											</span>
                                    </div>

                                    <div class="product_meta mt-3">
											<span class="posted_in " style="color: #E59285">publisher :

												<a href="#">{{$book->publisher}}</a>,


											</span>
                                    </div>
                                    <div class="product_meta mt-3">
											<span class="posted_in " style="color: #E59285">Publication date :

												<a href="#">{{$book->publication_date}}</a>,


											</span>
                                    </div>
                                    <div class="product_meta mt-3">
											<span class="posted_in " style="color: #E59285">Number of pages :

												<a href="#">{{$book->page}}</a>,


											</span>
                                    </div>

                                    <div class="product_meta mt-3">
											<span class="posted_in" style="color: #E59285">ISBN-No :

												<a href="#">{{$book->isbn}}</a>,


											</span>
                                    </div>

                                    <div class="product_meta mt-3">
											<span class="posted_in" style="color: #E59285">Categories :

												<a href="#">{{$book->category->name}}</a>,


											</span>
                                    </div>



                                    <div class="box-tocart d-flex">

                                        {{--<div class="addtocart__actions mt-3">--}}
                                            {{--<button class="tocart" type="submit" title="Add to Cart">Buy Book</button>--}}
                                        {{--</div>--}}
                                        <div class="container">

                                            <!-- Trigger the modal with a button -->
                                            <button type="button" class="btn btn-info btn-lg mt-5" data-toggle="modal" data-target="#myModal">Buy Book</button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                                        </div>
                                                        <div class="modal-body">
                                                            @foreach($orders As $order)
                                                            <p>{{$order->order_des}}</p>
                                                                @endforeach
                                                        </div>
                                                        {{--<div class="modal-footer">--}}
                                                            {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                                        {{--</div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="product__overview">

                                    {!! html_entity_decode($book->description) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="wn__product__area brown--color pt--80  pb--30">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section__title text-center">
                                        <h2 class="title__be--2"> All Books</h2>

                                    </div>
                                </div>
                            </div>

                            <div class="book-element">
                                <div class="row">

                                    @foreach($ramdomPost as $book)

                                        <div class="col-md-4">




                                            <div class="image-b" >
                                                <a href="#"><img class="mt-1" src="{{ Storage::disk('public')->url('book/'.$book->image) }}"></a>
                                                <div class="element">
                                                    <a  href="{{route('book.details',$book->slug)}}"><h3>{{str_limit($book->name,'20')}}</h3></a>
                                                    <a style="color: #333333"> <p>{{str_limit($book->description,'28')}}</p></a>
                                                    <h4 style="color: #333333">Price : {{$book->price}}TK</h4>
                                                </div>


                                            </div>
                                        </div>

                                    @endforeach

                                </div>

                            </div>


                            {{--<div class="pagenet mt-3">--}}
                                {{--{{ $books->links() }}--}}
                            {{--</div>--}}

                        </div>
                        <!-- End Single Tab Content -->


                    </section>

                </div>
                <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                    <div class="shop__sidebar">
                        <aside class="wedget__categories poroduct--cat">
                            <h3 class="wedget__title">Book  Categories</h3>
                            <ul>
                                @foreach($categories as $category)

                                <li><a href="{{route('category.book',$category->slug)}}">{{$category->name}} <span>{{$category->books->count()}}</span></a></li>

                                    @endforeach
                            </ul>
                        </aside>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main Content -->
    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form id="search_mini_form--2" class="minisearch" action="#">
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




@endsection

@push('js')

@endpush