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
                        <h3>Searched Products For - <span class="badge badge-primary">{{$search}}</span></h3>
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
                                    <h4 style="color: #0c0c0c">TK : {{$book->price}}</h4>
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
@endsection

@push('js')

@endpush