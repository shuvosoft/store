<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                {{--category sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Book Category </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('category.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> All Categories </span></a></li>
                        <li class="sidebar-item"><a href="{{route('menu.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">Add Menu </span></a></li>

                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">All Menus   </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">

                    </ul>
                </li>

                {{--Author sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Book Author </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('author.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> All Authors </span></a></li>
                        <li class="sidebar-item"><a href="{{route('author.create')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Add Author </span></a></li>

                    </ul>
                </li>

                {{--Book sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Book  </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('book.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> All Books </span></a></li>

                        <li class="sidebar-item"><a href="{{route('New_book_add.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> New Book Header Option</span></a></li>
                        <li class="sidebar-item"><a href="{{route('New_book_footer.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">Add Book Footer Option</span></a></li>

                    </ul>
                </li>


                {{--Slider sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Slider  </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('slider.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> All Sliders </span></a></li>
                        <li class="sidebar-item"><a href="{{route('slider.create')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Add Slider </span></a></li>

                    </ul>
                </li>

                {{--Order sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Order Details   </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('order.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Order details </span></a></li>

                    </ul>
                </li>

                {{--Order sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Customer Message   </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('contact.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">ALL Message </span></a></li>

                    </ul>
                </li>

                {{--contact info add sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Add Contact Information   </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('contactinfo.index')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">All Contact info </span></a></li>

                    </ul>
                </li>



                {{--contact info add sidebar--}}
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-key"></i><span class="hide-menu">Admin Setting  </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('settings')}}" class="sidebar-link"><i class="mdi mdi-all-inclusive"></i><span class="hide-menu">Change Setting </span></a></li>

                    </ul>
                </li>




                {{--Log out--}}
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <button class="btn btn-success ml-4">Log Out</button>

                    </a>



                    <form id="logout-form" method="POST" action="{{route('logout')}} " style="display: none">
                        {{ csrf_field() }}

                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>