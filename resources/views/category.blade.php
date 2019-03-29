@extends('layouts.frontend.app')

@section('title','Home')

@push('css')

@endpush

@section('content')


    <section class="wn__product__area brown--color pt--80  pb--30 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2"> <span class="color--theme" style="color: #0c0c0c">{{$category->name}} :- </span>({{$category->books()->count()}})</h2>

                    </div>
                </div>
            </div>

            <div class="book-element">

                <div class="row">
                    @if($books->count() > 0)

                    @foreach($books as $book)

                        <div class="col-md-3">
                            <div class="image-b" >
                                <a href="#"><img class="mt-1" src="{{ Storage::disk('public')->url('book/'.$book->image) }}"></a>
                                <div class="element">
                                    <a  href="{{route('book.details',$book->slug)}}"><h3>{{str_limit($book->name,'25')}}</h3></a>
                                    <p style="text-align: center">{{$book->author->name}}</p>
                                    <h4 style="color: #000000">TK : {{$book->price}}</h4>
                                </div>


                            </div>
                        </div>

                    @endforeach

                    @else

                        <div class="container">
                            <div class="col-lg-4 col-md-6" style="margin-top: 140px; text-align: center">
                                <div class="card ">
                                    <div class="single-post post-style-1">
                                        <div class="blog-info">
                                            <div class="card">
                                                <h4 class="title" style="padding: 40px; color: #D4805D ">
                                                    <strong>Sorry, No Book found :(</strong>
                                                </h4>
                                            </div>
                                        </div><!-- blog-info -->
                                    </div><!-- single-post -->
                                </div><!-- card -->
                            </div><!-- col-lg-4 col-md-6 -->
                        </div>
                    @endif

                </div>

            </div>


            {{--<div class="pagenet mt-3">--}}
                {{--{{ $books->links() }}--}}
            {{--</div>--}}

        </div>
        <!-- End Single Tab Content -->


    </section>
@endsection

@push('js')

@endpush