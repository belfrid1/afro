@extends('layouts.front.base')

@section('main_wrapper')
    <div id="wrapper">
        <div class="container mt-3 mb-3">
            <div class="well-filters mb-3">
                <div class="float-left">
                    <h1>Videos Being Watched</h1>
                </div>
                <div class="float-right well-action">
                    <a href="videosfb11.html?o=bw">
                        <span class="d-none d-sm-inline">More Videos</span>

                        <span class="d-xs-inline d-sm-none"><i class="fas fa-plus"></i></span>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="content-left ">
                    <div class="row content-row">

                        <!--begin::  show video-->
                        @foreach($videos as $video)
                            <div class="col-sm-6 col-md-4 col-lg-4">
{{--                                <video width="320" height="240" controls>--}}
{{--                                    <source src="{{URL::asset("$video->video_file")}}" type="video/mp4">--}}
{{--                                    Your browser does not support the video tag.--}}
{{--                                </video>--}}
                                <a href="{{route('video.show',$video)}}">
                                    <div class="thumb-overlay" id="playvthumb_13">
                                        <img src="{{asset($video->thumbnail_file)}}" title="{{asset($video->videoTitle)}}" alt="T{{ $video->videoTitle }}" class="img-responsive " />
                                        <div class="duration"> <span class="hd-text-icon">HD</span> 04:12
                                        </div>
                                    </div>
                                </a>

                                <div class="content-info">
                                    <a href="">
                                        <span class="content-title">{{ $video->videoTitle }}</span>
                                    </a>
                                    <div class="content-details">
                                        <span class="content-views"> 0 views</span>
                                        <span class="content-rating">
                                            <i class="fas fa-thumbs-up"></i>
                                            <span>100%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!--end show videos-->

                    </div>
                </div>
                <div class="content-right">
                    <div class="ad-body" style="width:300px; height:300px;">
                        <p class="ad-title"><span>SPONSORS</span><span class="ad-group">INDEX RIGHT</span></p>
                        <p class="ad-size">300 &times; 300</p>
                    </div>
                </div>
            </div>
            <div class="well-filters mb-3">
                <div class="float-left">
                    <h1>You might also like...</h1>
                </div>
                <div class="float-right well-action"> <a href="videos2359.html?o=mr"><span
                            class="d-none d-sm-inline">Others Tag Videos</span><span class="d-xs-inline d-sm-none"><i
                                class="fas fa-plus"></i></span></a> </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row content-row">
{{--                        @foreach($videos as $video)--}}
{{--                        <div class=" col-sm-6 col-md-4 col-lg-3  i-container">--}}
{{--                            <a href="{{route('video.show',$video)}}">--}}
{{--                            <a href="">--}}
{{--                                <div class="thumb-overlay" id="playvthumb_10676">--}}
{{--                                    <img src="{{asset('uploads/thumbnail/picsex1.jpg')}}" title="Boat" alt="Boat" class="img-responsive " />--}}
{{--                                    <div class="duration">--}}
{{--                                        <span class="hd-text-icon">HD</span> 00:00--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <div class="content-info">--}}
{{--                                <a href="video/10676/boat.html">--}}
{{--                                    <span class="content-title">Boat</span>--}}
{{--                                </a>--}}
{{--                                <div class="content-details">--}}
{{--                                    <span class="content-views">  views </span>--}}
{{--                                    <span class="content-rating">--}}
{{--                                        <i class="fas fa-thumbs-up"></i>--}}
{{--                                            <span>100% </span>--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            <div class="ad-body">
                <p class="ad-title"><span>SPONSORS</span><span class="ad-group">INDEX BOTTOM</span></p>
                <p class="ad-size">Auto &times; Auto</p>
            </div>
        </div>

    </div>
    @include('layouts.front.footer')
@endsection

