<header class="main-header header-style-ten">
    <!-- header-top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="top-inner">
                <div class="text">
                    <p>{!! $setting['top_welcome'] !!}</p>
                </div>
                <div class="right-column">
                    <ul class="info clearfix">
                        <li><img src="{{asset('/')}}assets/images/icons/icon-1.png" alt="">Call for help: <a href="tel:{{$setting['top_helpline']}}">{{$setting['top_helpline']}}</a></li>
                        <li><img src="{{asset('/')}}assets/images/icons/icon-2.png" alt="">Mail to us: <a href="mailto:{{$setting['top_email']}}">{{$setting['top_email']}}</a></li>
                    </ul>
                    <ul class="social-links clearfix">
                        <li><a href="{{$setting['facebook']}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{$setting['twitter']}}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{$setting['linkedin']}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="{{$setting['instagram']}}"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header-upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="{{route('home')}}">
                            <img width="130" src="{{asset('/')}}{{$setting['header_logo']}}" alt="">
                        </a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="active">
                                    <a class="" style="{{ Request::route()->getName() == 'home' ? 'border-bottom: 2px solid red':'' }}" href="{{route('home')}}">Home</a>
                                </li>
                                <li class=""><a style="{{ Request::route()->getName() == 'service' ? 'border-bottom: 2px solid red':'' }}" href="{{route('service')}}">Services</a></li>
                                <li class=""><a style="{{ Request::route()->getName() == 'project' ? 'border-bottom: 2px solid red':'' }}" href="{{route('project')}}">Projects</a></li>
                                <li class=""><a style="{{ Request::route()->getName() == 'blog' ? 'border-bottom: 2px solid red':'' }}" href="{{route('blog')}}">Blogs</a> </li>
                                <li class=""><a style="{{ Request::route()->getName() == 'about' ? 'border-bottom: 2px solid red':'' }}" href="{{route('about')}}">About Us</a></li>
                                <li><a style="{{ Request::route()->getName() == 'contact' ? 'border-bottom: 2px solid red':'' }}" href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav>
                    {{--<ul class="menu-right-content clearfix">
                        <li class="support-box">
                            <span>Need help? Talk to an expert</span>
                            <h5><a href="tel:3598880089">+ (359) 888 - 0089</a></h5>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box">
                <div class="logo-box">
                    <figure class="logo">
                        <a href="{{route('home')}}">
                            <img width="130" class="img-fluid" src="{{asset('/')}}{{$setting['header_logo']}}" alt="">
                        </a>
                    </figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
