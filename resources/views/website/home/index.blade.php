@extends('website.layout.app')
@section('title','Home')
@section('body')
    <!-- slider-style-five -->
    <section class="slider-style-five">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
            @foreach($sliders as $slider)
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{asset('/')}}{{ $slider['image'] ?? '' }})"></div>
                <div class="pattern-layer" style="background-image: url({{asset('/')}}assets/images/shape/shape-38.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h2>{!! $slider['title'] !!}</h2>
                        <p>{!! $slider['description'] !!}</p>
                        <div class="btn-box">
                            <a href="{{ $slider['button_url'] }}" class="theme-btn btn-two">{{$slider['button']}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- slider-style-five end -->

    <!-- estimate-section -->
    <section class="estimate-section">
        <div class="auto-container">
            <div class="inner-container">
                <h3>Get your Free Estimate</h3>
                <form action="{{route('order.form.submit')}}" method="post">
                    @csrf
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                            <input type="text" name="name" placeholder="Name" required="">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="E-mail" required="">
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                            <div class="select-box">
                                <select name="service" class="selectmenu" id="ui-id-1">
                                    <option selected="selected">Select Service</option>
                                    @foreach($services as $service)
                                    <option value="{{ $service['name'] }}">{{$service['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 form-group message-btn">
                            <button type="submit"><span>Submit now</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- estimate-section end -->

    <!-- service-section -->
    <section class="service-section home-10">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Welcome to cleanex cleaning</h6>
                <h2>Affordable & Eco friendly Cleaning Services</h2>
                <p>Our team of registered nurses and skilled healthcare professionals provide in-home nursing to help manage <br />and coordinate recovery at home.</p>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                @foreach($services as $service)
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{route('serviceDetails',$service['slug'])}}">
                                <img src="{{asset('/')}}{{$service['image']}}" alt="">
                            </a>
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-window-cleaning"></i></div>
                                <h3><a href="{{route('serviceDetails',$service['slug'])}}">{{$service['name']}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- about-section -->
    <section class="about-section home-10">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset('/')}}assets/images/resource/about-10.jpg" alt=""></figure>
                            <div class="text-box">
                                <h2>30</h2>
                                <p>Years of experience in this field</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box">
                            <div class="sec-title">
                                <h6>know about us</h6>
                                <h2>We Are Committed to Give You Best Cleaning Service</h2>
                            </div>
                            <div class="text">
                                <h3>Everything we do at Home Instead CareGiver is driven by our universal mission: To enhance the lives of aging adults and their families.</h3>
                                <p>When our founders Paul and Lori Hogan began providing care for Paul’s grandmother to help her remain at home, they envisioned a future where all people could age with greater hope and success. We strive to make that vision a reality with every life we are privileged to touch.</p>
                            </div>
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-home"></i></div>
                                            <h3>Residential <br />Cleaning Service</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="icon-box"><i class="flaticon-skyscrapers"></i></div>
                                            <h3>Commercial <br />Cleaning Service</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- video-section -->
    <section class="video-section">
        <div class="bg-layer" style="background-image: url({{asset('/')}}assets/images/background/video-bg.jpg);"></div>
        <div class="auto-container">
            <div class="inner-box">
                <div class="sec-title">
                    <h6>Need Any help</h6>
                    <h2>Contact Us For Better Service</h2>
                </div>
                <div class="text">
                    <p>We use latest equipment and excellence techniques for effective cleaning of your dream home.</p>
                    <div class="btn-box">
                        <a href="{{route('contact')}}" class="theme-btn btn-two">contact us</a>
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><img src="{{asset('/')}}assets/images/icons/icon-30.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->


    <!-- project-style-two -->
    <section class="project-style-two home-10 home-5">
        <div class="auto-container">
            <div class="sec-title light">
                <h6>our work</h6>
                <h2>Latest Projects</h2>
            </div>
        </div>
        <div class="outer-container">
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                @foreach($projects as $project)
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <a href="{{route('projectDetails',$project['slug'])}}">
                                <img src="{{asset('/')}}{{$project['image']}}" alt="">
                            </a>
                        </figure>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- project-style-two end -->


    <!-- help-section -->
    <section class="help-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="bg-layer" style="background-image: url({{asset('/')}}assets/images/background/help-bg.jpg);"></div>
                <div class="content-box">
                    <h2>Need Any Help For Cleaning?</h2>
                    <ul class="info-list clearfix">
                        <li><a href="tel:18004567890">+{{$setting['top_helpline']}}</a>,</li>
                        <li><a href="mailto:info@example.com">{{$setting['top_email']}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- help-section end -->


    <!-- testimonial-style-four -->
    <section class="testimonial-style-four home-10">
        <div class="pattern-layer" style="background-image: url({{asset('/')}}assets/images/shape/shape-39.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title light">
                        <h6>Testimonials</h6>
                        <h2>What They’re Talking About Comapany ?</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        @foreach($testimonials as $testimonial)
                        <div class="testimonial-block-four">
                            <div class="inner-box">
                                <div class="text-inner">
                                    <div class="quote"><i class="flaticon-quotation"></i></div>
                                    <p>{!! $testimonial['comment'] !!}</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('/')}}{{$testimonial['image'] ?? ''}}" alt=""></figure>
                                    <h5>{{$testimonial['name']}}</h5>
                                    <span class="designation">{{$testimonial['designation']}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-four end -->


    <!-- cta-style-three -->
    <section class="cta-style-three home-10">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>cost calculator</h6>
                            <h2>We Provide You Free Cleaning Estimates, So Why Wait?</h2>
                        </div>
                        <p>This cost calculator is handed to guests to help you in establishing the estimated cleaning cost for your home or company.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image"><img src="{{asset('/')}}assets/images/resource/cta-2.png" alt=""></figure>
                        <div class="image-shape">
                            <div class="shape-1"></div>
                            <div class="shape-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-style-three end -->


    <!-- news-style-two -->
    <section class="news-style-two home-4">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="sec-title">
                            <h6>company news</h6>
                            <h2>Lates Articles & Blogs</h2>
                        </div>
                        <div class="text">
                            <p>If you need to cleaning or servicing your house or office, call today and talk to one of our Service.</p>
                            <a href="{{route('blog')}}"><span>explore more</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="row clearfix">
                            @foreach($blogs as $blog)
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <a href="{{route('blogDetails',$blog['slug'])}}">
                                                <img src="{{asset('/')}}{{$blog['image']}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="lower-content">
                                            <span class="post-date">{{$blog['created_at']}}</span>
                                            <h3><a href="{{route('blogDetails',$blog['slug'])}}">{{$blog['title']}}</a></h3>
                                            <h6><a href="{{route('blogDetails',$blog['slug'])}}">continue reading</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-style-two end -->


    <!-- award-section -->
    <section class="award-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 title-column">
                        <div class="sec-title">
                            <h6>Awards & Reconization</h6>
                            <h2>Quality Improvement Awards of our Company.</h2>
                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal .</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 award-column">
                        <div class="award-content">
                            <ul class="award-list">
                                <li><img src="{{asset('/')}}assets/images/resource/award-1.png" alt=""></li>
                                <li><img src="{{asset('/')}}assets/images/resource/award-2.png" alt=""></li>
                                <li><img src="{{asset('/')}}assets/images/resource/award-3.png" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- award-section end -->


    <!-- clients-section -->
    <section class="clients-section home-4">
        <div class="title-text"><h6>We worked with royal clients</h6></div>
        <div class="auto-container">
            <div class="inner-container">
                @foreach($clients as $client)
                <figure class="clients-box">
                    <a href="{{$client['url']}}">
                        <img src="{{asset('/')}}{{$client['image'] ?? ''}}" alt="">
                    </a>
                </figure>
                @endforeach
            </div>
        </div>
    </section>
    <!-- clients-section end -->

@endsection
