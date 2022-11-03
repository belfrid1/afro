@extends('layouts.front.base')

@section('main_wrapper')
    <div id="wrapper">
        <div class="container mt-3 mb-3">
            <div class="well-filters mb-3">
                <div class="float-left">
                    <h1> {{ $tag->tagName }}</h1>
                </div>
                <div class="float-right well-action">
                    {{-- <a href="videosfb11.html?o=bw">
                        <span class="d-none d-sm-inline">More Videos</span>

                        <span class="d-xs-inline d-sm-none"><i class="fas fa-plus"></i></span>
                    </a> --}}
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="content-left ">
                    <div class="row content-row">

                        <!--begin::  show video-->
                        @foreach ($videos as $video)
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a href="{{ route('video.show', $video) }}">
                                    <div class="thumb-overlay playVideo_bloc" data-ref="{{ $video->id }}"
                                        style="position: relative">
                                        <div class="playVideo_bloc_thumbnail">
                                            <img src="{{ asset($video->thumbnail_file) }}"
                                                title="{{ asset($video->videoTitle) }}" alt="{{ $video->videoTitle }}"
                                                class="img-responsive " />
                                            <div class="duration">
                                                <span class="hd-text-icon">HD</span> {{ $video->video_duration ?? '' }}
                                            </div>
                                        </div>
                                        <video class="playVideo_bloc_video" preload="none" muted loop
                                            data-src="{{ asset($video->trailer_file) }}"></video>

                                        <div class="playVideo_bloc_load">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                style="margin: auto; background: transparent; display: block; width:100px; height:100%"
                                                viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                                <circle cx="84" cy="50" r="10" fill="#ffffff">
                                                    <animate attributeName="r" repeatCount="indefinite" dur="0.25s"
                                                        calcMode="spline" keyTimes="0;1" values="10;0"
                                                        keySplines="0 0.5 0.5 1" begin="0s"></animate>
                                                    <animate attributeName="fill" repeatCount="indefinite" dur="1s"
                                                        calcMode="discrete" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="#ffffff;#ffffff;#ffffff;#ffffff;#ffffff" begin="0s">
                                                    </animate>
                                                </circle>
                                                <circle cx="16" cy="50" r="10" fill="#ffffff">
                                                    <animate attributeName="r" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="0s"></animate>
                                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="16;16;16;50;84"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="0s"></animate>
                                                </circle>
                                                <circle cx="50" cy="50" r="10" fill="#ffffff">
                                                    <animate attributeName="r" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.25s"></animate>
                                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="16;16;16;50;84"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.25s"></animate>
                                                </circle>
                                                <circle cx="84" cy="50" r="10" fill="#ffffff">
                                                    <animate attributeName="r" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1" values="0;0;10;10;10"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.5s"></animate>
                                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="16;16;16;50;84"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.5s"></animate>
                                                </circle>
                                                <circle cx="16" cy="50" r="10" fill="#ffffff">
                                                    <animate attributeName="r" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="0;0;10;10;10"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.75s"></animate>
                                                    <animate attributeName="cx" repeatCount="indefinite" dur="1s"
                                                        calcMode="spline" keyTimes="0;0.25;0.5;0.75;1"
                                                        values="16;16;16;50;84"
                                                        keySplines="0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1;0 0.5 0.5 1"
                                                        begin="-0.75s"></animate>
                                                </circle>
                                            </svg>
                                        </div>
                                    </div>
                                </a>

                                <div class="content-info">
                                    <a href="{{ route('video.show', $video) }}">
                                        <span class="content-title">{{ $video->videoTitle }}</span>
                                    </a>
                                    <div class="content-details">
                                        {{-- <span class="content-views">{{ $video->view_counter }} views</span>
                                        <span class="content-rating">
                                            <i class="fas fa-thumbs-up"></i>
                                            <span>100%</span>
                                        </span> --}}
                                        <span class="content-rating">
                                           <a href="{{ route('video.show.trailler', $video) }}" class="btn btn-secondary" type="button"> <span>Play trailler >>  <i class="fas fa"></i></span></a>
                                           
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!--end show videos-->

                    </div>
                </div>
                <div class="content-right">
                    <img style="width:300px; height:300px; width: 300px;height: 300px; padding-left: inherit;margin-bottom: 20px;"  src="{{ asset('assets/img/ebony.png') }}" alt="">
                    {{-- <div class="ad-body" style="width:300px; height:300px;"> --}}
                       
                        {{-- <p class="ad-title"><span>SPONSORS</span><span class="ad-group">INDEX RIGHT</span></p>
                        <p class="ad-size">300 &times; 300</p> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <div class="content-center justify-content-center">
                <img class="" style="width: -moz-available;" src="{{ asset('assets/img/Channel Cover  bigassdoll.jpg') }}" alt="">
            
                {{-- <p class="ad-title"><span>SPONSORS</span><span class="ad-group">INDEX BOTTOM</span></p> 
                
                <p class="ad-size"> </p> --}}
            </div>
            <div class="well-filters mb-3">
                <div class="float-left">
                    <h1>You might also like...</h1>
                </div>
                {{-- <div class="float-right well-action"> <a href="videos2359.html?o=mr"><span
                            class="d-none d-sm-inline">Others
                            Tag Videos</span><span class="d-xs-inline d-sm-none"><i class="fas fa-plus"></i></span></a>
                </div> --}}
                <div class="clearfix"></div>
            </div>

            
            <div class="row">
                <div class="col-sm-12">
                    <div class="row content-row">
                        {{--                        @foreach ($videos as $video) --}}
                        {{--                        <div class=" col-sm-6 col-md-4 col-lg-3  i-container"> --}}
                        {{--                            <a href="{{route('video.show',$video)}}"> --}}
                        {{--                            <a href=""> --}}
                        {{--                                <div class="thumb-overlay" id="playvthumb_10676"> --}}
                        {{--                                    <img src="{{asset('uploads/thumbnail/picsex1.jpg')}}" title="Boat" alt="Boat" class="img-responsive " /> --}}
                        {{--                                    <div class="duration"> --}}
                        {{--                                        <span class="hd-text-icon">HD</span> 00:00 --}}
                        {{--                                    </div> --}}
                        {{--                                </div> --}}
                        {{--                            </a> --}}
                        {{--                            <div class="content-info"> --}}
                        {{--                                <a href="video/10676/boat.html"> --}}
                        {{--                                    <span class="content-title">Boat</span> --}}
                        {{--                                </a> --}}
                        {{--                                <div class="content-details"> --}}
                        {{--                                    <span class="content-views">  views </span> --}}
                        {{--                                    <span class="content-rating"> --}}
                        {{--                                        <i class="fas fa-thumbs-up"></i> --}}
                        {{--                                            <span>100% </span> --}}
                        {{--                                    </span> --}}
                        {{--                                </div> --}}
                        {{--                            </div> --}}
                        {{--                        </div> --}}
                        {{--                        @endforeach --}}
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    @include('layouts.front.footer')
    <script src="{{ asset('assets/js/custom/video-previewer.js?a') }}"></script>
@endsection
