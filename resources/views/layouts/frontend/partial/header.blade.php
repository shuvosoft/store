<!-- Header -->
<header id="wn__header" class="header__area header__absolute sticky__header" style="background: #2C3137;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-sm-6 col-6 col-lg-1">
                <div class="logo">
                    <a href="{{url('/')}}">
                        <img src="{{asset('images/Afsar Brothers (1).png')}}" alt="logo images" style="height: 50px;">
                    </a>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <nav class="mainmenu__nav">
                    <ul class="meninmenu d-flex justify-content-start">
                        <li class="drop with--one--item"><a href="{{url('/')}}">Home</a></li>
                        <li class="drop"><a href="{{route('books.index')}}">Book</a>
                            <div class="megamenu mega03">


                                @foreach($menus as $menu)
                                    <ul class="item item03">

                                        <li class="title">{{$menu->name}}</li>

                                        @foreach($menu->categories as $category)

                                            <li><a href="{{route('category.book',$category->slug)}}">{{$category->name}}</a></li>

                                        @endforeach

                                    </ul>


                                @endforeach
                            </div>
                        </li>
                        <li class="drop with--one--item"><a href="{{route('books.index')}}"> Shop</a>


                        <li><a href="{{route('contact.send')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6 col-sm-6 col-6 col-lg-3">


                <form action="{!! route('search')!!}" method="get">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <input type="text" class="form-control" name="search" aria-label="Text input with dropdown button">

                        <button class="btn " style="width: 35px" type="submit"><li class="fa fa-search"></li></button>

                    </ul>





                </form>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="row d-none">
            <div class="col-lg-12 d-none">
                <nav class="mobilemenu__nav">
                    <ul class="meninmenu">
                        <li><a href="{{url('/')}}">Home</a></li>


                        <li class="drop"><a href="{{route('books.index')}}">Book</a>
                            <div class="megamenu mega03">


                                @foreach($menus as $menu)
                                    <ul class="item item03">

                                        <li class="title">{{$menu->name}}</li>

                                        @foreach($menu->categories as $category)

                                            <li><a href="{{route('category.book',$category->slug)}}">{{$category->name}}</a></li>

                                        @endforeach

                                    </ul>


                                @endforeach
                            </div>
                        </li>
                        <li class="drop with--one--item"><a href="{{route('books.index')}}"> Shop</a>

                        <li><a href="{{route('contact.send')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Mobile Menu -->
        <div class="mobile-menu d-block d-lg-none">
        </div>
        <!-- Mobile Menu -->
    </div>
</header>