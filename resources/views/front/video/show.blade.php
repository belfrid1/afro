@extends('layouts.front.base')

@section('main_wrapper')
    <div id="wrapper">

        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Share Video</h4> <button type="button" class="close"
                                                                         data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <script type="text/javascript"
                                src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e26fd7331f9050b"></script>
                        <div class="addthis_inline_share_toolbox"></div>
                        <div class="form-group mt-3"> <label for="video_share_url">Share video URL</label> <input
                                id="video_share_url" type="text" class="form-control"
                                value="https://www.clipsharelive.com/video/19/time-lapse-video-shows-off-sacramento-s-beauty-at-night"
                                readonly> <button class="btn btn-secondary btn-bold mt-1 btn-xs float-right"
                                                  onclick="copyToClipboard('video_share_url')"><span id="video_share_url_copied"><i
                                        class="fas fa-clone"></i></span> COPY</button>
                            <div class="clearfix"></div>
                        </div>
                        <div class="form-group mt-3"> <label for="video_embed_code">Embed Code</label> <textarea
                                name="video_embed_code" rows="4" id="video_embed_code" class="form-control"
                                readonly><iframe width="640" height="360" src="../../embed/08345f7439f8ffabdffc.html" frameborder="0" allowfullscreen></iframe></textarea>
                            <button class="btn btn-secondary btn-bold mt-1 btn-xs float-right"
                                    onclick="copyToClipboard('video_embed_code')"><span id="video_embed_code_copied"><i
                                        class="fas fa-clone"></i></span> COPY</button>
                            <div class="clearfix"></div>
                        </div>
                        <div id="custom_size" class="form-group"> <label for="custom_width">Custom Size</label>
                            <div>
                                <div class="float-left"> <input id="custom_width" type="text" class="form-control"
                                                                value="" placeholder="Width" style="width: 100px!important;" /> </div>
                                <div class="float-left ml-2 mr-2" style="line-height: 38px;">
                                    &times;
                                </div>
                                <div class="float-left mr-2"> <input id="custom_height" type="text" class="form-control"
                                                                     value="" placeholder="Height" style="width: 100px!important;" /> </div>
                                <div class="float-left" style="line-height: 38px;">
                                    (Min: 320 &times; 180)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-bold float-left"
                                                       data-dismiss="modal">Cancel</button> </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="flagModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Flag Video</h4> <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"> <label>Flag Video</label>
                            <div>
                                <div class="radio"> <label> <input name="flag_reason" type="radio" value="inappropriate"
                                                                   checked="yes" />
                                        Inappropriate (rape, incest, etc.)
                                    </label> </div>
                                <div class="radio"> <label> <input name="flag_reason" type="radio" value="underage" />
                                        Underage
                                    </label> </div>
                                <div class="radio"> <label> <input name="flag_reason" type="radio"
                                                                   value="copyrighted" />
                                        Copyrighted Material
                                    </label> </div>
                                <div class="radio"> <label> <input name="flag_reason" type="radio"
                                                                   value="not_playing" />
                                        Video not playing
                                    </label> </div>
                                <div class="radio"> <label> <input name="flag_reason" type="radio" value="other" />
                                        Other
                                    </label> </div>
                                <div id="flag_reason_error" class="text-danger m-t-5" style="display: none;"></div>
                            </div>
                        </div>
                        <div class="form-group"> <label for="flag_message">Reason (Optional)</label>
                            <div> <textarea name="flag_message" class="form-control" rows="3"
                                            id="flag_message"></textarea> </div>
                        </div>
                    </div>
                    <div class="modal-footer"> <button id="submit_flag_video" data-vid="19" type="button"
                                                       class="btn btn-primary btn-bold">Flag Video</button> <button type="button"
                                                                                                                    class="btn btn-secondary btn-bold" data-dismiss="modal">Cancel</button> </div>
                </div>
            </div>
        </div>
        <div class="container mt-3 mb-3">
            <div class="well-filters">
                <h1>{{ $video->videoTitle }}</h1>
            </div>
            <div class="row">
                <div class="content-left mt-3 mb-3">
                    <div class="video-container"> <video id="video" class="video-js vjs-16-9 vjs-big-play-centered vjs-sublime-skin" preload="auto"  controls="true" playsinline webkit-playsinline poster="{{ $video->thumbnail }}" data-setup='{
		  "autoplay": false,
		  "plugins": {
		  "vastClient": {
			"adTagUrl": "https://rtr.innovid.com/r1.5e108439503b77.01430018;cb=3029269407297867332?dipn=deviceid&deviceid=F47E69FA-22B0-48D2-B7D8-458244305F15&ivc_deviceid_raw=F47E69FA-22B0-48D2-B7D8-458244305F15&ivc_package=1606794418&ivc_line_item=1606794420&ivc_insertion_id=1606794331&ivc_creativeid=1606790285&ivc_advertiser_name=RECKITTBENCKISER-ZENITH&ivc_call_id=3029269407297867332",
			"adCancelTimeout": 5000,
			"playAdAlways": true,
			"adsEnabled": true			}
		  }
		}'>
                            <source
                                src="{{ $video->video_file }}"
                                type='video/mp4' label='720p' res='720' />
                            <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video> </div>
                    <div class="ad-body mt-3">
                        <p class="ad-title"><span>SPONSORS</span><span class="ad-group">VIDEO PLAYER BOTTOM</span></p>
                        <p class="ad-size">Auto &times; Auto</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="video-actions float-left ml-3">
                                <span>
                                    <a id="video_download" href="#" class="btn btn-secondary btn-bold btn-xxs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    <ul>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="video_download">
                                        <a class="dropdown-item" href="../../19_720pbb97.mp4?id=19&amp;label=720p">HD -720p (MP4)</a>
                                        <a class="dropdown-item" href="../../19_480p6fa2.mp4?id=19&amp;label=480p">HD - 480p (MP4)</a>
                                        <a class="dropdown-item" href="../../19_360peebd.mp4?id=19&amp;label=360p">SD - 360p (MP4)</a>
                                        <a class="dropdown-item" href="../../19_240pb830.mp4?id=19&amp;label=240p">SD - 240p (MP4)</a>
                                    </div>
                                    </ul>

                                </span>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right mt-3 mb-3">
                    <div class="ad-body" style="width:300px;">
                        <p class="ad-title"><span>SPONSORS</span><span class="ad-group">VIDEO RIGHT</span></p>
                        <p class="ad-size">300 &times; Auto</p>
                    </div>
                    <div class="clearfix"></div>
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
    <script type="text/javascript" src="{{asset('assets/js/jquery.comments.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.voting.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.video.js')}}"></script>

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
    </script>




@endsection
