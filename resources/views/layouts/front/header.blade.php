<!-- start  sticky top  -->
<div class="sticky-top">
    <!-- start  top na  -->
    <div class="top-nav">
        <div class="container">
            <div class="top-menu">
                <div class="float-left"> <a class="top-brand" href="/"><img src="{{asset('assets/img/logo_afrosexxx.png')}}"
                                                                            alt="Afrosexxx"></a> </div>
                <div class="search-top-container mx-auto d-none d-md-inline-block">
                    {{--                    <form class="form-inline" name="search" id="search_form" method="post"--}}
                    {{--                          action="">--}}
                    {{--                        <div class="input-group"> <input type="text" class="form-control search-box"--}}
                    {{--                                                         placeholder="Search Videos" name="search_query" id="search_query" value=""--}}
                    {{--                                                         autocomplete="off"> <span> <a id="search_select" class="btn btn-search-select"><i--}}
                    {{--                                        class="fas fa-video"></i></a> </span> <span class="input-group-btn"> <button--}}
                    {{--                                    type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>--}}
                    {{--                                    </span> </div> <input type="hidden" id="search_type" value="">--}}
                    {{--                    </form>--}}
                </div>
                {{--                <div class="float-right">--}}
                {{--                    <div class="top-menu-item"> <a data-toggle="modal" href="#language-modal">EN <span--}}
                {{--                                class="caret"></span></a> </div>--}}
                {{--                </div>--}}
                <div class="float-right">
{{--                    <div class="top-menu-item">--}}
{{--                        <a data-toggle="modal" href="#login-modal">--}}
{{--                            <i class="fas fa-key"></i>--}}
{{--                            <span class="d-none d-lg-inline"> Login</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="top-menu-item">--}}
{{--                        <a href="{{route('register')}}" rel="nofollow">--}}
{{--                            <i class="fas fa-user-plus"></i>--}}
{{--                            <span class="d-none d-lg-inline"> Sign Up</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                    <!--begin::Menu item-->
                        @guest
                            @if (Route::has('login'))
                                <div class="top-menu-item">
                                    <a data-toggle="modal" href="#login-modal">
                                        <i class="fas fa-key"></i>
                                        <span class="d-none d-lg-inline"> Login</span>
                                    </a>
                                </div>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
                            @endif

                            @if (Route::has('register'))
                                <div class="top-menu-item">
                                    <a href="{{route('register')}}" rel="nofollow">
                                        <i class="fas fa-user-plus"></i>
                                        <span class="d-none d-lg-inline"> Sign Up</span>
                                    </a>
                                </div>
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                <!--end::Menu item-->

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- start  top nav   -->
    <!-- start  nav bar  -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container"> <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="d-block d-md-none search-bot-container">
                <form class="form-inline" name="search" id="search_form_xs" method="post"
                      action="https://www.Afrosexxx.com/search/videos">
                    <div class="input-group"> <input type="text" class="form-control search-box"
                                                     placeholder="Search Videos" name="search_query" id="search_query_xs" value=""
                                                     autocomplete="off"> <span> <a id="search_select_xs" class="btn btn-search-select"><i
                                    class="fas fa-video"></i></a> </span> <span class="input-group-btn"> <button
                                type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button> </span>
                    </div>
                </form>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- start  home   -->
                    <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                    <!-- end  home   -->


                    <!-- start  navbar   -->
                    <li class="nav-item d-block d-md-none ">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <div class="nav-item dropdown d-none d-md-block ">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            Categories <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu multi-column-dropdown">
                            <div class="container">
                                <div class="sub-menu-left w-100 m-b-10">
                                    <div class="sub-menu-title">
                                        Popular Categories
                                    </div>
                                    <div class="sub-menu-content">
                                        <div class="row content-row">
                                            @foreach($tags as $tag)
                                            <!-- start tag     -->
                                            <div class="popular-tag">
                                                <span>
                                                    {{-- <span class="tag-counter">{{$tag->id}}</span> --}}
                                                    {{-- <i class="fas fa-search"></i> --}}
                                                    <a href="{{ route('show.video.tag', $tag->id) }}" title="{{ $tag->tagName }}">{{ $tag->tagName }}</a>
                                                </span>
                                            </div>
                                            <!-- end  tag   -->
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="sub-menu-content mt-3"> <a href="#"><i class="fas fa-tags"></i>
                                            View More</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start  navbar   -->

                </ul>
                <ul class="navbar-nav ml-auto myanimation">
                    <li class="nav-item" >
                        <a class="nav-link dropdown-item"  href="{{route('register')}}">
                            <span style="font-size: 3em; color:#FFA54E" >
                                 Try it now !
                            </span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- start  navbar   -->
</div>
<!-- end  sticky top  -->
