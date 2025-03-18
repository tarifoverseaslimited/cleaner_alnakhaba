<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>{{$setting['home_title_name']}} - @yield('title')</title>
    @include('website.layout.style')

</head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper">


    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">X</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                        <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>
                        <span data-text-preloader="&nbsp;" class="letters-loading">
                                &nbsp;
                            </span>
                        <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>
                        <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                        <span data-text-preloader="K" class="letters-loading">
                                K
                            </span>
                        <span data-text-preloader="H" class="letters-loading">
                                H
                            </span>
                        <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                        <span data-text-preloader="B" class="letters-loading">
                                B
                            </span>
                        <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!--Search Popup-->
    <div id="search-popup" class="search-popup">
        <div class="popup-inner">
            <div class="upper-box">
                <figure class="logo-box"><a href="{{route('home')}}">
                        <img src="{{asset('/')}}assets/images/{{$setting['header_logo']}}" alt="">
                    </a>
                </figure>
                <div class="close-search">X</div>
            </div>
            <div class="overlay-layer"></div>
            <div class="auto-container">
                <div class="search-form">
                    <form method="post" action="https://designarc.biz/demos/cleanex/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Type your keyword and hit" required >
                                <button type="submit"><img src="{{asset('/')}}assets/images/icons/icon-3.png" alt=""></button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


{{--    <!-- sidebar cart item -->--}}
{{--    <div class="xs-sidebar-group info-group info-sidebar">--}}
{{--        <div class="xs-overlay xs-bg-black"></div>--}}
{{--        <div class="xs-overlay xs-overlay-2 xs-bg-black"></div>--}}
{{--        <div class="xs-overlay xs-overlay-3 xs-bg-black"></div>--}}
{{--        <div class="xs-overlay xs-overlay-4 xs-bg-black"></div>--}}
{{--        <div class="xs-overlay xs-overlay-5 xs-bg-black"></div>--}}
{{--        <div class="xs-sidebar-widget">--}}
{{--            <div class="sidebar-widget-container">--}}
{{--                <div class="widget-heading">--}}
{{--                    <a href="#" class="close-side-widget">X</a>--}}
{{--                </div>--}}
{{--                <div class="sidebar-textwidget">--}}
{{--                    <div class="sidebar-info-contents">--}}
{{--                        <div class="content-inner">--}}
{{--                            <div class="logo">--}}
{{--                                <a href="index.html"><img src="{{asset('/')}}assets/images/logo.png" alt="" /></a>--}}
{{--                            </div>--}}
{{--                            <div class="text">--}}
{{--                                <h3>We Are Cleaning Company <br />In Los Angle</h3>--}}
{{--                                <p>Our experienced team offers services for both residential and commercial properties.With over 25 years of experience in the industry.</p>--}}
{{--                            </div>--}}
{{--                            <div class="info-box">--}}
{{--                                <h3>Conatct Us</h3>--}}
{{--                                <ul class="info clearfix">--}}
{{--                                    <li>--}}
{{--                                        <div class="icon"><img src="{{asset('/')}}assets/images/icons/icon-5.png" alt=""></div>--}}
{{--                                        54B, Tailstoi Town 5238 MT, La city, IA 522364</li>--}}
{{--                                    <li><div class="icon"><img src="{{asset('/')}}assets/images/icons/icon-6.png" alt=""></div><a href="mailto:contact@homlane.com">contact@cleanex.com</a></li>--}}
{{--                                    <li><div class="icon"><img src="{{asset('/')}}assets/images/icons/icon-7.png" alt=""></div><a href="tel:18004567890">+1800 456 7890</a></li>--}}
{{--                                    <li><div class="icon"><img src="{{asset('/')}}assets/images/icons/icon-8.png" alt=""></div>Working Hrs : 9.30am to 6.30pm</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="subscribe-inner">--}}
{{--                                <h3>Newsletter Subscription</h3>--}}
{{--                                <form action="https://designarc.biz/demos/cleanex/contact.html" method="post">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="email" name="email" placeholder="Enter Email Address" required="">--}}
{{--                                        <button type="submit"><span>subscribe now</span></button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- END sidebar widget item -->--}}


    <!-- main header -->
    @include('website.layout.header')
    <!-- main-header end -->


    <!-- Mobile Menu  -->
    @include('website.layout.mobilemenu')
    <!-- End Mobile Menu -->

    <div class="">
        @yield('body')
    </div>

    <!-- main-footer -->
    @include('website.layout.footer')
    <!-- main-footer end -->


    <!-- scroll to top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fal fa fa-arrow-up"></i>
    </button>

</div>

@include('website.layout.script')
</body>

</html>

