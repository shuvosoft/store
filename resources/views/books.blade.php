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
                        <h2 class="title__be--2">ALL <span class="color--theme">Books</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>

            <div class="book-element">
                <div class="row">

                    @foreach($books as $book)

                        <div class="col-md-3">
                            <div class="image-b" >
                                <a href="#"><img class="mt-1" src="{{ Storage::disk('public')->url('book/'.$book->image) }}"></a>
                                <div class="element">
                                    <a  href="{{route('book.details',$book->slug)}}"><h3>{{str_limit($book->name,'20')}}</h3></a>
                                    <p style="text-align: center">{{$book->author->name}}</p>
                                    <h4 style="color: #000000">TK: {{$book->price}}</h4>
                                </div>


                            </div>
                        </div>

                    @endforeach

                </div>

            </div>


       <div class="pagenet mt-3">
           {{ $books->links() }}
       </div>

        </div>
        <!-- End Single Tab Content -->


    </section>
    <!-- Start BEst Seller Area -->

@endsection

@push('js')

@endpush