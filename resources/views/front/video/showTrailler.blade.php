@extends('layouts.front.base')
@section('stylesheets')
    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
@endsection
@section('main_wrapper')
    <div id="wrapper">
        <div class="container mt-3 mb-3">
            <div class="well-filters">
                <h1>{{ $video->videoTitle }}</h1>
            </div>
            <div class="row">
                <div class="content-left mt-3 mb-3">
                    <div class="video-container">
                        <video id="video" class="video-js vjs-16-9 vjs-big-play-centered vjs-sublime-skin"   preload="auto" controls  >
                            <source  src="{{ asset($video->trailer_file) }}" type="video/mp4"  />
                            <source  src="{{ asset($video->trailer_file) }}" type="video/ogg"  />
                            <source src="{{ asset($video->trailer_file) }}" type="video/webm" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/3gp" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/avi" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/mpg" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/wmv" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/mpeg" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/mov" />
                            <source src="{{ asset($video->trailer_file) }}" type="video/flv" />
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href="{{ asset($video->video_file) }}" target="_blank">download the MP4</a>
                            </p>
                        </video>
                    </div>
                    {{-- <a id="video_download" href="{{ asset($video->video_file) }}" class="ad-size btn btn-succes btn-bold btn-xxs" >
                        <div class="content-center download mt-3">
                            <i class="fas fa-download"></i>
                            <p class="ad-size">Donwload</p>
                        </div>
                    </a>  --}}
                    {{-- <div class="row mt-3">
                        <div class="col-12">
                            <div class="video-actions float-left ml-3">
                                <span>
                                    <a id="video_download" href="#" class="btn btn-secondary btn-bold btn-xxs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <ul>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="video_download">
                                            <a class="dropdown-item" href="{{ asset($video->video_file) }}?id=19&amp;label=720p">HD -720p (MP4)</a>
                                            <a class="dropdown-item" href="../../19_480p6fa2.mp4?id=19&amp;label=480p">HD - 480p (MP4)</a>
                                            <a class="dropdown-item" href="../../19_360peebd.mp4?id=19&amp;label=360p">SD - 360p (MP4)</a>
                                            <a class="dropdown-item" href="../../19_240pb830.mp4?id=19&amp;label=240p">SD - 240p (MP4)</a>
                                        </div>
                                    </ul>

                                </span>


                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="content-center mt-3 mb-3">
                    @if(auth()->user())
                        <div class="ad-body btn btn-succes btn-bold btn-xxs" style="width:300px;">
                            <a id="video_download" href="{{ asset($video->video_file) }}" class="ad-size" > 
                            <span class="ad-size">Download Full </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg>
                        </a>
                        </div>
                        <div class="clearfix"></div>
                    @else
                        <div class="ad-body btn btn-succes btn-bold btn-xxs" style="width:300px;">
                            <a id="video_download" href="{{ route('register') }}" class="ad-size" >
                            <span class="ad-size">Download Full </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                              </svg>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    @endif

                        
                </div>
            </div>


            <div class="well-filters mb-3">
                <div class="float-left">
                    <h1>You might also like...</h1>
                </div>
                {{-- <div class="float-right well-action"> <a href="videos2359.html?o=mr"><span
                            class="d-none d-sm-inline">Others Tag Videos</span><span class="d-xs-inline d-sm-none"><i
                                class="fas fa-plus"></i></span></a> 
                            </div> --}}
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row content-row">
                        @foreach($videos as $video)
                            <div class=" col-sm-6 col-md-4 col-lg-3  i-container">
                                {{--                            <a href="{{route('video.show',$video)}}">--}}
                                <a href="{{route('video.show',$video)}}">
                                    <div class="thumb-overlay" id="playvthumb_10676">
                                        <img src="{{asset($video->thumbnail_file)}}" title="{{asset($video->videoTitle)}}" alt="{{ $video->videoTitle }}" class="img-responsive " />
                                        <div class="duration">
                                            <span class="hd-text-icon">HD</span> 00:00
                                        </div>
                                    </div>
                                </a>
                                <div class="content-info">
                                    <a href="">
                                        <span class="content-title">{{ $video->videoTitle }}</span>
                                    </a>
                                    <div class="content-details">
                                        <span class="content-views"> 0 views </span>
                                        <span class="content-rating">
{{--                                        <i class="fas fa-thumbs-up"></i>--}}
                                            <span>100% etoile</span>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



    </div>

    <!--begin::Footer-->
    @include('layouts.front.footer')
    <!--end::Footer-->

@endsection
@section('javascripts')

    <script type="text/javascript">
        var lang_favoriting = "Favoriting...";
        var lang_posting = "Posting...";
        var video_width = "640";
        var video_height = "360";
        var evideo_vkey = "08345f7439f8ffabdffc";

        $(document).ready(function () {

            var evdiv = $('.video-embedded');
            var ewidth = evdiv.width();
            eheight = Math.round(ewidth / 1.777);
            evdiv.css("height", eheight);

            $(window).resize(function () {
                var evwidth = $('.video-embedded').width();
                evheight = Math.round(evwidth / 1.777);
                $('.video-embedded').css("height", evheight);
            });
        });
    </script>
{{--    <script type="text/javascript" src="{{asset('assets/js/jquery.comments.js')}}"></script>--}}
{{--    <script type="text/javascript" src="{{asset('assets/js/jquery.voting.js')}}"></script>--}}
{{--    <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />--}}

    <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>


    <script src="{{asset('assets/js/video-js-events.js')}}"></script>
    <script>
        if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
            var msViewportStyle = document.createElement('style')
            msViewportStyle.appendChild(
                document.createTextNode(
                    '@-ms-viewport{width:auto!important}'
                )
            )
            document.querySelector('head').appendChild(msViewportStyle)
        }

        // get video duration

        var myPlayer = videojs('vemvo-player');

        if (myPlayer.readyState() < 1) {
            // wait for loadedmetdata event
            myPlayer.one("loadedmetadata", onLoadedMetadata);
        }
        else {
            // metadata already loaded
            onLoadedMetadata();
        }

        function onLoadedMetadata() {
            alert(myPlayer.duration());
            $('#duration').html("Duration: " + myPlayer.duration());
        }
    </script>




@endsection
