<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>AFROSEXXX - Watch Online Videos</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="keywords" content="online, videos, watch,afro sexe" />
    <meta name="description" content="Watch afro sexe online video" />
    <script src="cdn-cgi/apps/head/EpKjAj-6_-xIL1C6EVR56Vgz2G8.js"></script>
    <link rel="Shortcut Icon" type="image/ico" href="images/favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script type="text/javascript">
        var base_url = "index.html";
        var max_thumb_folders = "32000";
        var tpl_url = "templates/frontend/bright-green/index.html";
        var lang_deleting = "Deleting...";
        var lang_flaging = "Flaging...";
        var lang_loading = "Loading...";
        var lang_sending = "Sending...";
        var lang_share_name_empty = "Please enter your name!";
        var lang_share_rec_empty = "Please enter at least one recipient email!";
        var fb_signin = "0";
        var fb_appid = "";
        var g_signin = "0";
        var g_cid = "";
        var signup_section = false;
        var relative = "";
        var search_v = "Search Videos";
        var search_a = "Search Albums";
        var search_u = "Search Users";
        var lang_global_delete = "Delete";
        var lang_global_yes = "Yes";
        var lang_global_no = "No";
        var lang_global_remove = "Remove";
        var session_uid = "";
        var current_url = "index.html";
        var alert_messages = [];
        var alert_errors = [];
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/easy-autocomplete.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/easy-autocomplete.themes.min.css') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/supplement.css?a') }}" rel="stylesheet">

    {{--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> --}}
    @yield('stylesheets')
</head>

<body>

    <!-- start login modal  -->
    <div class="modal fade in" id="login-modal">
        <div class="modal-dialog login-modal">
            <div class="modal-content">
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Member Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body"> <input name="current_url" type="hidden" value="/" />
                        {{--                    <input name="username" type="text" value="" id="login_username" class="form-control mb-3" placeholder="{{ __('Email Address') }}" /> --}}
                        <!--begin::Email-->
                        <input type="text" id="email" placeholder="{{ __('Email Address') }}" name="email"
                            autocomplete="off"
                            class="form-control mb-3 bg-transparent {{ $errors->has('email') ? ' is-invalid' : '' }}" />
                        @error('email')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @enderror

                        <!--end::Email-->
                        <label for="password"></label>
                        <input name="password" type="password" value="" id="login_password"
                            class="form-control mb-3" placeholder="Password" />
                        <a href="#" id="lost_password">Lost Username or Password?</a><br />
                        <a href="#" id="confirmation_email">Did not receive confirmation email?</a>

                    </div>
                    <div class="modal-footer">
                        <button name="submit_login" id="login_submit" type="submit"
                            class="btn btn-primary btn-bold">Login</button>
                        {{--                    <a href="#"  class="btn btn-secondary btn-bold">Sign Up</a> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end login modal  -->

    <!-- start signup modal  -->
    <div class="modal fade in" id="signup-modal">
        <div class="modal-dialog login-modal">
            <div class="modal-content">
                <form name="signup_form" method="post" action="">
                    <div class="modal-header">
                        <h4 class="modal-title">Member Signup</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <input name="current_url" type="hidden" value="/" />
                        <input name="username" type="text" value="" id="login_username"
                            class="form-control mb-3" placeholder="Username" />
                        <input name="email" type="text" value="" id="login_username"
                            class="form-control mb-3" placeholder="Username" />
                        <input name="password" type="password" value="" id="login_password"
                            class="form-control mb-3" placeholder="Password" />

                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary btn-bold">Sign Up</a>
                    </div>

                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end signup modal  -->

    <div class="modal fade" id="dialogModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-bold opt-1"></button>
                    <button type="button" class="btn btn-secondary btn-bold opt-2" data-dismiss="modal"></button>
                </div>
            </div>
        </div>
    </div>


    <!-- start language  modal  -->
    <div class="modal fade" id="language-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select Language</h4> <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-6 col-sm-4"> <span class="change-language language-active">English</span>
                        </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="fr_FR"
                                class="change-language">Français</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="de_DE"
                                class="change-language">Deutsch</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="nl_NL"
                                class="change-language">Dutch</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="es_ES"
                                class="change-language">Español</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="it_IT"
                                class="change-language">Italiano</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="pt_PT"
                                class="change-language">Português</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="pt_BR"
                                class="change-language">Português</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="ru_RU"
                                class="change-language">русский</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="sa_SA"
                                class="change-language">العربية</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="he_IL"
                                class="change-language">עִבְרִית</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="jp_JP"
                                class="change-language">日本語</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="cn_CS"
                                class="change-language">中文简体</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="cn_CT" class="change-language">中文
                                繁體</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="tr_TR"
                                class="change-language">Türkçe</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="dk_DK"
                                class="change-language">Dansk</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="no_NO"
                                class="change-language">Norsk</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="cz_CZ"
                                class="change-language">Český</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="bn_BD"
                                class="change-language">বাংলা</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="ro_RO"
                                class="change-language">Română</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="pl_PL"
                                class="change-language">Polski</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="hu_HU"
                                class="change-language">Magyar</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="ba_BA"
                                class="change-language">Bosanski</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="hr_HR"
                                class="change-language">Hrvatski</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="rs_RS"
                                class="change-language">Srpski</a> </div>
                        <div class="col-6 col-sm-4"> <a href="#" id="si_SI"
                                class="change-language">Slovenski</a> </div>
                    </div>
                </div>
                <form name="languageSelect" id="languageSelect" method="post" action="#">
                    <input name="language" id="language" type="hidden" value="" />
                </form>
            </div>
        </div>
    </div>
    <!-- end language modal  -->



    <!-- start  sticky top  -->
    <!--begin::Header-->
    @include('layouts.front.header')
    <!--end::Header-->
    <!-- end  sticky top  -->


    <!-- main wrapper   -->
    <!--begin::Main-->
    @yield('main_wrapper')
    <!--end::Main-->
    <!-- end main wrapper  -->



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
            type: '85'
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
    <script type="text/javascript" src="{{ asset('assets/js/jquery.rotator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.easy-autocomplete.min.js') }}"></script>


    <!-- complement   -->
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




    {{-- pay pal script --}}

    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD"
        data-sdk-integration-source="button-factory"></script>
    <script>
        function initPayPalButton() {
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'gold',
                    layout: 'vertical',
                    label: 'paypal',

                },

                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            "amount": {
                                "currency_code": "USD",
                                "value": 0
                            }
                        }]
                    });
                },

                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(orderData) {

                        // Full available details
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

                        // Show a success message within this page, e.g.
                        const element = document.getElementById('paypal-button-container');
                        element.innerHTML = '';
                        element.innerHTML = '<h3>Thank you for your payment!</h3>';

                        // Or go to another URL:  actions.redirect('thank_you.html');

                    });
                },

                onError: function(err) {
                    console.log(err);
                }
            }).render('#paypal-button-container');
        }
        initPayPalButton();
    </script>

    {{-- pay pal script --}}
    @yield('javascripts')


</body>

</html>
