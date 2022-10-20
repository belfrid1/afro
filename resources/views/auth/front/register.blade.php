@extends('layouts.front.base')

@section('main_wrapper')

<div class="container mt-3 mb-3">

    <div class="row justify-content-center">
            <div class="col-md-9 " style="background-image: url({{url('assets/img/background_afrosexxx.png')}});">
                <div class="col-md-6 mt-3 card" style="left: 20%;max-width: 60%" >
                    <div class="card-header"><h3>You must be logged in to watch this video</h3></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('payment') }}">
                            @csrf
                            <input type="hidden" value="subscribed" name="role">

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Username</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Membership-->
                            <h3>Membership Type</h3>


                            <div class="singleType ST0 field radios ">
                                <input type="radio" name="amount" id="" class="lab0" value="29.95" required data-error-required="Select membership type" >
                                <div class="titleCont">
                                    <span class="title">1 Month Membership</span>
                                    <p>Billed in one payment of &euro;29.95</p>
                                </div>
                                <div class="amount">

                                    <strike class="strike">&euro;39.95</strike>

                                    <span>&euro;29<sup>.95</sup></span>

                                    <span class="mth">/MONTH</span>
                                </div>
                            </div>

                            <div class="singleType ST0 field radios ">
                                <input type="radio" name="amount" id="mType115" class="lab0" value="29.98" required data-error-required="Select membership type" >
                                <div class="titleCont">
                                    <span class="title">3 Month Membership</span>
                                    <p>Billed in one instalment of &euro;59.95</p>
                                </div>
                                <div class="amount">

                                    <strike class="strike">&euro;29.98</strike>

                                    <span>&euro;19<sup>.98</sup></span>

                                    <span class="mth">/MONTH</span>
                                </div>
                            </div>

                            <div class="singleType ST0 field radios labActive">
                                <input type="radio" name="amount" id="" class="lab0" value="16.66" required data-error-required="Select membership type" checked>
                                <div class="titleCont">
                                    <span class="title">6 Month membership</span>
                                    <p>Billed in one instalment of &euro;99.95</p>
                                </div>
                                <div class="amount">
                                    <strike class="strike">&euro;26.66</strike>
                                    <span>&euro;16<sup>.66</sup></span>
                                    <span class="mth">/MONTH</span>
                                </div>
                            </div>
                            <!-- Membership-->

                            <!-- start Payement --->
                            <h3 class="mt-5" >Payement Type</h3>
                            <div class="GAPay">
                                <div class="pType field radios">
                                    <br>
                                    <input type="checkbox" name="payement" value="paypal" id="" required data-error-required="Select payment type" >
                                    <label for="" class="pType3"><span>PayPal</span><img src="https://africancasting.com/t1/assets/epoch/img/payment-image-24.png"></label>
                                    <br>

                                </div>
                            </div>

                            <!-- end Payement -->

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        Get acces now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <div class=" col-sm-6 col-md-4 col-lg-3  i-container">
                    {{--                            <a href="{{route('video.show',$video)}}">--}}
                    <a href="">
                        <div class="thumb-overlay" id="playvthumb_10676">
                            <img src="{{asset('uploads/thumbnail/picsex1.jpg')}}" title="Boat" alt="Boat" class="img-responsive " />
                            <div class="duration">
                                <span class="hd-text-icon">HD</span> 00:00
                            </div>
                        </div>
                    </a>
                    <div class="content-info">
                        <a href="video/10676/boat.html">
                            <span class="content-title">Boat</span>
                        </a>
                        <div class="content-details">
                            <span class="content-views"> 732 views </span>
                            <span class="content-rating">
{{--                                        <i class="fas fa-thumbs-up"></i>--}}
                                            <span>100% etoile</span>
                                    </span>
                        </div>
                    </div>
                </div>
                {{--                        @endforeach--}}
            </div>
        </div>
    </div>

</div>
@include('layouts.front.footer')
@endsection




