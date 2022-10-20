@extends('layouts.front.base')

@section('main_wrapper')
    <div id="wrapper">
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
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.comments.js"></script>
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.voting.js"></script>
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.video.js"></script>
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
                <h1>Time-lapse video shows off Sacra    xxxx mento&#039;s beauty at night</h1>
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
                            <div class="vote-box float-left"> <span class="content-rating"> <span class="mr-2"><i
                                            class="fas fa-thumbs-up"></i> <span id="rating_video_19">97%</span></span>
                                    <span class="vote-up mr-1"><i id="vote_up_video_19" class="fas fa-thumbs-up"></i>
                                        <span id="likes_video_19">37</span></span> <span class="vote-down"><i
                                            id="vote_down_video_19" class="fas fa-thumbs-down"></i> <span
                                            id="dislikes_video_19">1</span></span> </span> </div>
                            <div class="video-actions float-right ml-3"> <span> <a id="video_download" href="#"
                                                                                   class="btn btn-secondary btn-bold btn-xxs" data-toggle="dropdown"
                                                                                   aria-haspopup="true" aria-expanded="false"> <i class="fas fa-download"></i> </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="video_download"> <a
                                            class="dropdown-item" href="../../19_720pbb97.mp4?id=19&amp;label=720p">HD -
                                            720p (MP4)</a> <a class="dropdown-item"
                                                              href="../../19_480p6fa2.mp4?id=19&amp;label=480p">HD - 480p (MP4)</a> <a
                                            class="dropdown-item" href="../../19_360peebd.mp4?id=19&amp;label=360p">SD -
                                            360p (MP4)</a> <a class="dropdown-item"
                                                              href="../../19_240pb830.mp4?id=19&amp;label=240p">SD - 240p (MP4)</a> </div>
                                </span> <a href="#" id="video_share" class="btn btn-secondary btn-bold btn-xxs"><i
                                        class="fas fa-share"></i><span class="d-none d-md-inline"> Share</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-sub mt-3"> <span class="d-block d-sm-none float-right mb-3"><span
                                        class="text-highlighted"><i class="fas fa-eye"></i> 206669</span> &nbsp; 2 years
                                    ago</span>
                                <div class="clearfix"></div>
                                <div class="float-left"> <a href="../../user/anonymous.html"><img class="medium-avatar"
                                                                                                  src="../../media/users/nopic-Male.gif" /><span>anonymous</span></a>
                                    | <span class="total-subscribers" id="total_subscribers"><span
                                            class="text-highlighted">67</span> subscribers</span> </div>
                                <div class="float-right mt-2"> <span class="d-none d-sm-inline"><span
                                            class="text-highlighted"><i class="fas fa-eye"></i> 206669</span> &nbsp; 2
                                        years ago</span> </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt-3 overflow-hidden">
                                Sacramento Timelapse
                            </div>
                            <div class="mt-3 overflow-hidden">
                                Tags:
                                <a class="tag" href="../../search/videos/sacramento.html">sacramento</a>, <a class="tag"
                                                                                                             href="../../search/videos/timelapse.html">timelapse</a>, <a class="tag"
                                                                                                                                                                         href="../../search/videos/canon.html">canon</a>, <a class="tag"
                                                                                                                                                                                                                             href="../../search/videos/city.html">city</a>, <a class="tag"
                                                                                                                                                                                                                                                                               href="../../search/videos/california.html">california</a>, <a class="tag"
                                                                                                                                                                                                                                                                                                                                             href="../../search/videos/urban.html">urban</a> </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var lang_comments_confirm_delete = "Are you sure you want to delete this comment?";
                        var lang_comments_reply = "Reply";
                        var lang_comments_view_more_replies = "View More";
                        var lang_comments_insert_media = "Insert Media";
                        var lang_cancel = "Cancel";
                    </script>
                    <div class="comments-section mt-3">
                        <div class="modal fade" id="commentsMediaModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <nav>
                                            <div class="nav nav-tabs" role="tablist"> <a
                                                    class="nav-item nav-link active" id="nav-cvideos-tab"
                                                    data-toggle="tab" href="#nav-cvideos" role="tab"
                                                    aria-controls="nav-cvideos" aria-selected="true">Videos</a> <a
                                                    class="nav-item nav-link" id="nav-cphotos-tab" data-toggle="tab"
                                                    href="#nav-cphotos" role="tab" aria-controls="nav-cphotos"
                                                    aria-selected="false">Photos</a> </div>
                                        </nav>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-cvideos" role="tabpanel"
                                                 aria-labelledby="nav-cvideos-tab"> <input type="text"
                                                                                           class="form-control" placeholder="Search Videos" id="search-cvideos"
                                                                                           value="" autocomplete="off">
                                                <div id="info-cvideos"></div>
                                                <div class="clearfix"></div>
                                                <div id="cvideos-container"> </div>
                                                <div id="cvideos-loader"><i
                                                        class="fas fa-circle-notch fa-spin fa-2x"></i></div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-cphotos" role="tabpanel"
                                                 aria-labelledby="nav-cphotos-tab"> <input type="text"
                                                                                           class="form-control" placeholder="Search Photos" id="search-cphotos"
                                                                                           value="" autocomplete="off">
                                                <div id="info-cphotos"></div>
                                                <div class="clearfix"></div>
                                                <div id="cphotos-container"> </div>
                                                <div id="cphotos-loader"><i
                                                        class="fas fa-circle-notch fa-spin fa-2x"></i></div>
                                            </div>
                                        </div> <input id="insert_media_target" type="hidden" value="">
                                    </div>
                                    <div class="modal-footer"> <button type="button" class="btn btn-secondary btn-bold"
                                                                       data-dismiss="modal">Close</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-right mt-3 mb-3">
                    <div class="ad-body" style="width:300px;">
                        <p class="ad-title"><span>SPONSORS</span><span class="ad-group">VIDEO RIGHT</span></p>
                        <p class="ad-size">300 &times; Auto</p>
                    </div>
                    <div class="related-video"> <a href="../9656/lazy-d-rv-resort-rv-park-texas-city.html">
                            <div class="thumb-overlay"> <img src="../../media/videos/tmb/9656/1.jpg"
                                                             title="Lazy D RV Resort  RV Park Texas City"
                                                             alt="Lazy D RV Resort  RV Park Texas City" class="img-responsive " />
                                <div class="duration"> <span class="hd-text-icon">HD</span> 00:52
                                </div>
                            </div>
                            <div class="content-info"> <a href="../9656/lazy-d-rv-resort-rv-park-texas-city.html"> <span
                                        class="content-title">Lazy D RV Resort RV Park Texas City</span> </a>
                                <div class="content-details"> <span class="content-views">
                                        246 views
                                    </span> </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="related-video"> <a href="../262/remember-bali.html">
                            <div class="thumb-overlay"> <img src="../../media/videos/tmb/262/1.jpg"
                                                             title="Remember Bali" alt="Remember Bali" class="img-responsive " />
                                <div class="duration"> <span class="hd-text-icon">HD</span> 04:28
                                </div>
                            </div>
                            <div class="content-info"> <a href="../262/remember-bali.html"> <span
                                        class="content-title">Remember Bali</span> </a>
                                <div class="content-details"> <span class="content-views">
                                        676 views
                                    </span> <span class="content-rating"><i class="fas fa-thumbs-up"></i>
                                        <span>100%</span></span> </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="related-video"> <a href="../93/the-maldives.html">
                            <div class="thumb-overlay"> <img src="../../media/videos/tmb/93/7.jpg" title="The Maldives"
                                                             alt="The Maldives" class="img-responsive " />
                                <div class="duration"> <span class="hd-text-icon">HD</span> 01:52
                                </div>
                            </div>
                            <div class="content-info"> <a href="../93/the-maldives.html"> <span
                                        class="content-title">The Maldives</span> </a>
                                <div class="content-details"> <span class="content-views">
                                        924 views
                                    </span> </div>
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="ad-body">
                <p class="ad-title"><span>SPONSORS</span><span class="ad-group">VIDEO BOTTOM</span></p>
                <p class="ad-size">Auto &times; Auto</p>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-links">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Information</h4>
                            <ul class="list-unstyled">
                                <li><a href="../../static/terms.html" rel="nofollow">Terms and Conditions</a></li>
                                <li><a href="../../static/privacy.html" rel="nofollow">Privacy Policy</a></li>
                                <li><a href="../../static/dmca.html" rel="nofollow">DMCA</a></li>
                                <li><a href="../../static/_2257.html" rel="nofollow">2257</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h4>Work With Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="../../static/advertise.html" rel="nofollow">Advertise</a></li>
                                <li><a href="../../static/webmasters.html" rel="nofollow">Webmasters</a></li>
                                <li><a href="../../invite.html" rel="nofollow">Invite Friends</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h4>Support and Help</h4>
                            <ul class="list-unstyled">
                                <li><a href="../../notices.html">Notice</a></li>
                                <li><a href="../../static/faq.html" rel="nofollow">FAQ</a></li>
                                <li><a href="../../feedback.html" rel="nofollow">Support / Feedback</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h4>Follow Us</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://www.facebook.com/fb_cs/" target="_blank" rel="nofollow"><i
                                            class="fab fa-facebook-f"></i>&nbsp;&nbsp;Facebook</a></li>
                                <li><a href="https://www.instagram.com/instagram_cs/" target="_blank" rel="nofollow"><i
                                            class="fab fa-instagram"></i>&nbsp;&nbsp;Instagram</a></li>
                                <li><a href="https://twitter.com/twitter_cs/" target="_blank" rel="nofollow"><i
                                            class="fab fa-twitter"></i>&nbsp;&nbsp;Twitter</a></li>
                                <li><a href="https://www.reddit.com/user/reddit_cs/" target="_blank" rel="nofollow"><i
                                            class="fab fa-reddit"></i>&nbsp;&nbsp;Reddit</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="container">
                    <div class="d-none d-sm-block">
                        <div class="float-left"> <span>Copyright &#169; 2008-2020</span> <span
                                class="text-highlighted">clipsharelive</span> </div>
                        <div class="float-right">
                            Powered by <a target="_blank" href="http://www.clip-share.com/">ClipShare</a> </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="d-block d-sm-none"><span>Copyright &#169; 2008-2020</span> <span
                            class="text-highlighted">clipsharelive</span><br />Powered by <a target="_blank"
                                                                                             href="http://www.clip-share.com/">ClipShare</a></div>
                </div>
            </div>
            <div id="alerts_bottom"></div>
        </div>
        <script>
            var suggestion_arr = [{
                name: 'wow',
                type: '588'
            }, {
                name: 'one',
                type: '224'
            }, {
                name: 'best',
                type: '174'
            }, {
                name: 'car',
                type: '153'
            }, {
                name: 'locksmith',
                type: '83'
            }, {
                name: 'car locksmith',
                type: '79'
            }, {
                name: 'demo',
                type: '71'
            }, {
                name: 'din',
                type: '54'
            }, {
                name: '720p',
                type: '52'
            }, {
                name: 'movers',
                type: '52'
            }, {
                name: 'movi',
                type: '49'
            }, {
                name: 'moving',
                type: '47'
            }, {
                name: 'vibrators',
                type: '43'
            }, {
                name: 'treatment',
                type: '42'
            }, {
                name: 'ford',
                type: '42'
            }, {
                name: 'city',
                type: '41'
            }, {
                name: 'papel',
                type: '41'
            }, {
                name: 'boruto',
                type: '39'
            }, {
                name: 'tat',
                type: '39'
            }, {
                name: 'health',
                type: '35'
            }, {
                name: 'llc',
                type: '29'
            }, {
                name: 'miami',
                type: '28'
            }, {
                name: 'auto',
                type: '27'
            }, {
                name: 'rap',
                type: '26'
            }, {
                name: 'rehab',
                type: '25'
            }, {
                name: 'vape',
                type: '24'
            }, {
                name: 'attorney',
                type: '23'
            }, {
                name: 'clit',
                type: '22'
            }, {
                name: 'valid',
                type: '22'
            }, {
                name: 'quality',
                type: '21'
            }, {
                name: 'cbd',
                type: '19'
            }, {
                name: 'art',
                type: '18'
            }, {
                name: 'surf',
                type: '17'
            }, {
                name: 'bus',
                type: '17'
            }, {
                name: 'ام',
                type: '17'
            }, {
                name: 'addiction',
                type: '16'
            }, {
                name: 'borderland',
                type: '16'
            }, {
                name: 'test',
                type: '15'
            }, {
                name: 'study',
                type: '15'
            }, {
                name: 'beauty',
                type: '14'
            }, {
                name: 'light',
                type: '14'
            }, {
                name: 'brazoria',
                type: '14'
            }, {
                name: 'kitchen',
                type: '14'
            }, {
                name: 'cash',
                type: '14'
            }, {
                name: 'filmbluray',
                type: '13'
            }, {
                name: 'series',
                type: '13'
            }, {
                name: 'north',
                type: '12'
            }, {
                name: 'music',
                type: '12'
            }, {
                name: 'business',
                type: '12'
            }, {
                name: 'sale',
                type: '12'
            }, {
                name: 'california',
                type: '11'
            }, {
                name: 'cali',
                type: '11'
            }, {
                name: 'topics',
                type: '11'
            }, {
                name: 'family',
                type: '11'
            }, {
                name: 'tester',
                type: '11'
            }, {
                name: '7.5',
                type: '11'
            }, {
                name: 'dondejoseph',
                type: '11'
            }, {
                name: 'electric',
                type: '11'
            }, {
                name: 'control',
                type: '10'
            }, {
                name: 'sacramento',
                type: '10'
            }, {
                name: 'clit vibrator',
                type: '10'
            }, {
                name: 'his',
                type: '10'
            }, {
                name: 'gest',
                type: '10'
            }, {
                name: 'sad',
                type: '10'
            }, {
                name: 'marketing agency',
                type: '10'
            }, {
                name: 'sexual',
                type: '10'
            }, {
                name: 'dogs',
                type: '9'
            }, {
                name: 'ceo',
                type: '9'
            }, {
                name: 'girls',
                type: '9'
            }, {
                name: 'hours',
                type: '9'
            }, {
                name: 'محامي',
                type: '9'
            }, {
                name: 'head',
                type: '9'
            }, {
                name: 'home',
                type: '8'
            }, {
                name: 'youtube',
                type: '8'
            }, {
                name: 'florida',
                type: '8'
            }, {
                name: 'clit massager',
                type: '8'
            }, {
                name: 'fun',
                type: '8'
            }, {
                name: 'blue',
                type: '8'
            }, {
                name: 'seo',
                type: '8'
            }, {
                name: 'supplier',
                type: '8'
            }, {
                name: 'skincare',
                type: '8'
            }, {
                name: 'chef',
                type: '8'
            }, {
                name: 'cool',
                type: '7'
            }, {
                name: 'dildo vibrator',
                type: '7'
            }, {
                name: 'google',
                type: '7'
            }, {
                name: 'movie',
                type: '7'
            }, {
                name: 'famous',
                type: '7'
            }, {
                name: 'courage',
                type: '7'
            }, {
                name: 'positive',
                type: '7'
            }, {
                name: 'celebrity',
                type: '7'
            }, {
                name: 'greatness',
                type: '7'
            }, {
                name: 'inspiration',
                type: '7'
            }, {
                name: 'entrepreneuer',
                type: '7'
            }, {
                name: 'sharing',
                type: '7'
            }, {
                name: 'animal',
                type: '7'
            }, {
                name: '1x2',
                type: '7'
            }, {
                name: 'bike',
                type: '7'
            }, {
                name: 'roofing',
                type: '7'
            }, {
                name: 'insurance',
                type: '7'
            }, {
                name: 'doc',
                type: '6'
            }, {
                name: 'rain',
                type: '6'
            }, {
                name: 'pain',
                type: '6'
            }, {
                name: 'girth',
                type: '6'
            }, {
                name: 'marketing',
                type: '6'
            }, {
                name: 'dog',
                type: '6'
            }, {
                name: 'mastubator',
                type: '6'
            }, {
                name: 'records',
                type: '6'
            }, {
                name: 'agency',
                type: '6'
            }, {
                name: 'upload',
                type: '6'
            }, {
                name: 'clouds',
                type: '6'
            }, {
                name: 'clit sex toy',
                type: '6'
            }, {
                name: 'pmi',
                type: '6'
            }, {
                name: 'pakistanupwork',
                type: '6'
            }, {
                name: 'profileupwork',
                type: '6'
            }, {
                name: 'agency profileupwork',
                type: '6'
            }, {
                name: 'biddingupwork',
                type: '6'
            }, {
                name: 'blogupwork',
                type: '6'
            }, {
                name: 'connectsupwork',
                type: '6'
            }, {
                name: 'apkupwork',
                type: '6'
            }, {
                name: 'badgesupwork',
                type: '6'
            }, {
                name: 'acid',
                type: '6'
            }, {
                name: 'transportation',
                type: '6'
            }, {
                name: 'invisalign',
                type: '6'
            }, {
                name: 'funny',
                type: '5'
            }, {
                name: 'nature',
                type: '5'
            }, {
                name: 'sport',
                type: '5'
            }, {
                name: 'toy',
                type: '5'
            }, {
                name: 'utah',
                type: '5'
            }, {
                name: 'quarantine',
                type: '5'
            }, {
                name: 'book',
                type: '5'
            }, {
                name: 'toenail',
                type: '5'
            }, {
                name: 'investment',
                type: '5'
            }, {
                name: '2013',
                type: '5'
            }, {
                name: 'youtube video',
                type: '5'
            }, {
                name: 'sex',
                type: '5'
            }, {
                name: '1x3',
                type: '5'
            }, {
                name: 'dna',
                type: '5'
            }, {
                name: '1x4',
                type: '5'
            }, {
                name: 'mgm',
                type: '5'
            }, {
                name: 'entrepreneur',
                type: '5'
            }, {
                name: 'rye',
                type: '5'
            }, {
                name: 'knife',
                type: '5'
            }, {
                name: 'canon',
                type: '4'
            }, {
                name: 'coast',
                type: '4'
            }, {
                name: 'motion',
                type: '4'
            }, {
                name: 'red',
                type: '4'
            }, {
                name: 'auto locksmith',
                type: '4'
            }, {
                name: 'mountain',
                type: '4'
            }, {
                name: 'side',
                type: '4'
            }, {
                name: 'cock',
                type: '4'
            }, {
                name: 'hawaii',
                type: '4'
            }, {
                name: 'fungus',
                type: '4'
            }, {
                name: 'free',
                type: '4'
            }, {
                name: 'black',
                type: '4'
            }, {
                name: 'hilarious',
                type: '4'
            }, {
                name: 'sisters',
                type: '4'
            }, {
                name: 'porn',
                type: '4'
            }, {
                name: 'instagram',
                type: '4'
            }, {
                name: 'clit sex toys',
                type: '4'
            }, {
                name: 'sex toy',
                type: '4'
            }, {
                name: 'models',
                type: '4'
            }, {
                name: 'remember',
                type: '4'
            }, {
                name: 'trading',
                type: '4'
            }, {
                name: 'bitcoin',
                type: '4'
            }, {
                name: 'tags',
                type: '4'
            }, {
                name: 'electrician',
                type: '4'
            }, {
                name: '18 ',
                type: '4'
            }, {
                name: 'fake',
                type: '4'
            }, {
                name: 'lubricant',
                type: '4'
            }, {
                name: 'bondage toys',
                type: '4'
            }, {
                name: 'food',
                type: '4'
            }, {
                name: 'mem',
                type: '4'
            }, {
                name: 'roofer',
                type: '4'
            }, {
                name: 'timelapse',
                type: '3'
            }, {
                name: 'official',
                type: '3'
            }, {
                name: 'dildo',
                type: '3'
            }, {
                name: 'love',
                type: '3'
            }, {
                name: 'nashville',
                type: '3'
            }, {
                name: 'girl',
                type: '3'
            }, {
                name: 'floor',
                type: '3'
            }, {
                name: 'toys',
                type: '3'
            }, {
                name: 'dildos',
                type: '3'
            }, {
                name: 'heck',
                type: '3'
            }, {
                name: 'dong',
                type: '3'
            }, {
                name: 'massager',
                type: '3'
            }, {
                name: 'anime',
                type: '3'
            }, {
                name: 'australia',
                type: '3'
            }, {
                name: 'tag1',
                type: '3'
            }, {
                name: 'model',
                type: '3'
            }, {
                name: 'masturbators',
                type: '3'
            }, {
                name: 'hay',
                type: '3'
            }, {
                name: 'mastubator toy',
                type: '3'
            }, {
                name: 'fitness',
                type: '3'
            }, {
                name: 'dentures',
                type: '3'
            }, {
                name: '7823',
                type: '3'
            }, {
                name: 'kegels',
                type: '3'
            }, {
                name: 'hypnos',
                type: '3'
            }, {
                name: 'software',
                type: '3'
            }, {
                name: 'stress',
                type: '3'
            }, {
                name: 'urban',
                type: '3'
            }, {
                name: 'mtb',
                type: '3'
            }, {
                name: 'blackout',
                type: '3'
            }, {
                name: 'opportunities',
                type: '3'
            }, {
                name: 'pod',
                type: '3'
            }, {
                name: 'video marketing',
                type: '3'
            }, {
                name: 'awareness',
                type: '3'
            }, {
                name: 'video editing',
                type: '3'
            }, {
                name: 'carolina',
                type: '3'
            }, {
                name: 'editing',
                type: '3'
            }, {
                name: 'strategies',
                type: '3'
            }, {
                name: 'taskade',
                type: '3'
            }, {
                name: 'travel',
                type: '3'
            }, {
                name: 'sound',
                type: '3'
            }, {
                name: 'bio',
                type: '3'
            }, {
                name: 'papel 1x2',
                type: '3'
            }, {
                name: 'superhero',
                type: '3'
            }, {
                name: 'massage',
                type: '3'
            }, {
                name: 'laptop',
                type: '3'
            }, {
                name: 'lips',
                type: '3'
            }, {
                name: 'analysis',
                type: '3'
            }, {
                name: 'montreal',
                type: '3'
            }, {
                name: 'sexual health',
                type: '3'
            }, {
                name: 'orthodentist',
                type: '3'
            }, {
                name: 'holmes',
                type: '3'
            }, {
                name: 'veneers',
                type: '3'
            }, {
                name: 'penis vibrator',
                type: '3'
            }, {
                name: 'joker123',
                type: '3'
            }, {
                name: 'invisalign miami',
                type: '3'
            }, {
                name: 'assa',
                type: '3'
            }, {
                name: 'vitamins',
                type: '3'
            }, {
                name: 'clute',
                type: '3'
            }, {
                name: 'angleton',
                type: '3'
            }, {
                name: 'restaurants',
                type: '3'
            }, {
                name: 'brantford',
                type: '3'
            }, {
                name: 'lawn',
                type: '3'
            }, {
                name: 'movers montreal',
                type: '3'
            }, {
                name: 'powder',
                type: '3'
            }, {
                name: 'kiteboarding',
                type: '2'
            }, {
                name: 'pets',
                type: '2'
            }, {
                name: 'kite',
                type: '2'
            }, {
                name: 'kiteboard',
                type: '2'
            }, {
                name: 'kitesurf',
                type: '2'
            }, {
                name: 'video',
                type: '2'
            }, {
                name: 'film',
                type: '2'
            }, {
                name: 'snowboarding',
                type: '2'
            }, {
                name: 'documentary',
                type: '2'
            }, {
                name: 'snow',
                type: '2'
            }, {
                name: 'snowboard',
                type: '2'
            }, {
                name: 'canon 7d',
                type: '2'
            }, {
                name: 'bali',
                type: '2'
            }, {
                name: 'boy',
                type: '2'
            }, {
                name: 'footage',
                type: '2'
            }, {
                name: 'interview',
                type: '2'
            }, {
                name: 'vibrator',
                type: '2'
            }, {
                name: 'dance',
                type: '2'
            }, {
                name: 'penis',
                type: '2'
            }, {
                name: 'comedy',
                type: '2'
            }, {
                name: 'masturbator',
                type: '2'
            }, {
                name: 'رقص',
                type: '2'
            }, {
                name: 'baysah',
                type: '2'
            }, {
                name: 'married',
                type: '2'
            }, {
                name: 'eos',
                type: '2'
            }, {
                name: 'music video',
                type: '2'
            }, {
                name: 'dick',
                type: '2'
            }, {
                name: 'flimbluray',
                type: '2'
            }, {
                name: 'clit vibrators',
                type: '2'
            }, {
                name: 'tag',
                type: '2'
            }, {
                name: 'michigan',
                type: '2'
            }, {
                name: 'haha',
                type: '2'
            }, {
                name: 'like',
                type: '2'
            }, {
                name: 'single',
                type: '2'
            }, {
                name: 'testing',
                type: '2'
            }, {
                name: 'android',
                type: '2'
            }, {
                name: 'dora',
                type: '2'
            }, {
                name: 'depression',
                type: '2'
            }, {
                name: 'social',
                type: '2'
            }, {
                name: 'blockchain',
                type: '2'
            }, {
                name: 'facebook',
                type: '2'
            }, {
                name: 'sadsong',
                type: '2'
            }, {
                name: 'clickfunnels',
                type: '2'
            }, {
                name: 'theexclamation',
                type: '2'
            }, {
                name: 'drinkingagain',
                type: '2'
            }, {
                name: 'svakom',
                type: '2'
            }, {
                name: 'vcx',
                type: '2'
            }, {
                name: 'black dildo',
                type: '2'
            }, {
                name: 'pop',
                type: '2'
            }, {
                name: 'relationship',
                type: '2'
            }, {
                name: 'mom',
                type: '2'
            }, {
                name: 'motivation',
                type: '2'
            }, {
                name: 'kids',
                type: '2'
            }, {
                name: 'daughters',
                type: '2'
            }, {
                name: 'kids youtube',
                type: '2'
            }, {
                name: 'marketing strategies',
                type: '2'
            }, {
                name: 'competition',
                type: '2'
            }, {
                name: 'sexy',
                type: '2'
            }, {
                name: 'teen',
                type: '2'
            }, {
                name: 'drone',
                type: '2'
            }, {
                name: 'edm',
                type: '2'
            }, {
                name: 'sex toys',
                type: '2'
            }, {
                name: 'virtual',
                type: '2'
            }, {
                name: 'asia',
                type: '2'
            }, {
                name: 'dff',
                type: '2'
            }, {
                name: 'virtual sex',
                type: '2'
            }, {
                name: 'crypto',
                type: '2'
            }, {
                name: 'creativity',
                type: '2'
            }, {
                name: 'featuring',
                type: '2'
            }, {
                name: 'desert',
                type: '2'
            }, {
                name: 'iphone',
                type: '2'
            }, {
                name: 'vpn',
                type: '2'
            }, {
                name: 'lowell',
                type: '2'
            }, {
                name: 'superheroacademy',
                type: '2'
            }, {
                name: 'barrio',
                type: '2'
            }, {
                name: 'gascar',
                type: '2'
            }, {
                name: 'grc',
                type: '2'
            }, {
                name: 'fff',
                type: '2'
            }, {
                name: 'lee',
                type: '2'
            }, {
                name: 'extrem',
                type: '2'
            }, {
                name: 'parker',
                type: '2'
            }, {
                name: 'pegging',
                type: '2'
            }, {
                name: 'financial',
                type: '2'
            }, {
                name: 'waleed360',
                type: '2'
            }, {
                name: 'sociotraffic',
                type: '2'
            }, {
                name: 'passion',
                type: '2'
            }, {
                name: 'labor',
                type: '2'
            }, {
                name: 'employment',
                type: '2'
            }, {
                name: 'martin',
                type: '2'
            }, {
                name: 'hottest',
                type: '2'
            }, {
                name: 'intimacy',
                type: '2'
            }, {
                name: '성인',
                type: '2'
            }, {
                name: 'baby',
                type: '2'
            }, {
                name: 'blowjob',
                type: '2'
            }, {
                name: 'woman',
                type: '2'
            }, {
                name: '자위기구',
                type: '2'
            }, {
                name: 'bondage sex',
                type: '2'
            }, {
                name: 'china',
                type: '2'
            }, {
                name: '온라인바카라',
                type: '2'
            }, {
                name: '성인용품쇼핑몰',
                type: '2'
            }, {
                name: 'مسك',
                type: '2'
            }, {
                name: 'بخور',
                type: '2'
            }, {
                name: 'junk',
                type: '2'
            }, {
                name: '카지노사이트추천',
                type: '2'
            }, {
                name: 'สลอต',
                type: '2'
            }, {
                name: 'malaysia',
                type: '2'
            }, {
                name: 'ดูหนังออนไลน์',
                type: '2'
            }, {
                name: 'หนังออนไลน์',
                type: '2'
            }, {
                name: 'manufacturer',
                type: '2'
            }, {
                name: 'เว็บหนังออนไลน์',
                type: '2'
            }, {
                name: 'slot',
                type: '2'
            }, {
                name: 'supplies',
                type: '2'
            }, {
                name: 'wholesale',
                type: '2'
            }, {
                name: 'sex addiction treatment',
                type: '2'
            }, {
                name: 'สล็อต',
                type: '2'
            }, {
                name: 'botox',
                type: '2'
            }, {
                name: 'festival',
                type: '2'
            }, {
                name: 'clip',
                type: '2'
            }, {
                name: 'freeport',
                type: '2'
            }, {
                name: '딜도',
                type: '2'
            }, {
                name: 'cooking',
                type: '2'
            }, {
                name: 'steak',
                type: '2'
            }, {
                name: 'masterchef',
                type: '2'
            }, {
                name: 'meat',
                type: '2'
            }, {
                name: 'animation',
                type: '2'
            }, {
                name: 'seo agency',
                type: '2'
            }, {
                name: 'guatemala',
                type: '2'
            }, {
                name: 'rehab california',
                type: '2'
            }, {
                name: 'movers brantford',
                type: '2'
            }, {
                name: 'coronavirus',
                type: '2'
            }, {
                name: 'indianmatka',
                type: '2'
            }, {
                name: 'boat',
                type: '2'
            }, {
                name: 'animals',
                type: '2'
            }, {
                name: 'corona',
                type: '2'
            }, {
                name: 'teste',
                type: '2'
            }];
        </script>
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.rotator.js"></script>
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.main.js"></script>
        <script type="text/javascript" src="../../templates/frontend/bright-green/js/jquery.easy-autocomplete.min.js">
        </script>
        <script src="../../media/player/videojs/video-js-events.js"></script>
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
    </div>
@endsection
