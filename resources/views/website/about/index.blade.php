@extends('website.layout.app')
@section('title','About Us')
@section('body')

    <!-- about-style-nine -->
    <section class="about-style-nine">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_seven">
                        <div class="image-box">
                            <figure class="image image-1"><img src="assets/images/resource/about-12.jpg" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/resource/about-13.jpg" alt=""></figure>
                            <div class="text-inner">
                                <div class="inner">
                                    <div class="icon-box"><i class="flaticon-glass-cleaner"></i></div>
                                    <h6>certified service</h6>
                                    <h3>Certified Cleaning Service</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_11">
                        <div class="content-box">
                            <div class="sec-title">
                                <h6>Welcome to Our workshop</h6>
                                <h2>Committed to Give High Quality Cleaning Services</h2>
                            </div>
                            <div class="text">
                                <p>Welcome to Al Nakhaba Cleaning Services, your trusted partner for professional cleaning solutions in Riyadh, Saudi Arabia. We specialize in high-quality residential, commercial, and industrial cleaning, ensuring spotless and hygienic spaces for our valued clients.

                                    At Al Nakhaba, we believe that a clean environment enhances well-being and productivity. Our experienced team uses eco-friendly products, advanced equipment, and industry-best practices to deliver exceptional cleaning services. Whether you need home cleaning, office cleaning, carpet cleaning, window washing, or deep sanitization, we are committed to providing 100% customer satisfaction.

                                    With a strong reputation for reliability, affordability, and efficiency, Al Nakhaba Cleaning Services is dedicated to making your space cleaner, fresher, and healthier. Contact us today for a cleaning service tailored to your needs! </p>
                            </div>
                            <div class="list-inner">
                                <ul class="list-style-one clearfix">
                                    <li>Highly Professional Staff</li>
                                    <li>100% Satisfaction Guarantee</li>
                                    <li>Quality Control System</li>
                                </ul>
                                <ul class="list-style-one clearfix">
                                    <li>Accourate Testing Process</li>
                                    <li>Unrivalle Workmanship</li>
                                    <li>Timely Delivery</li>
                                </ul>
                            </div>
                            <div class="btn-box">
                                <a href="{{route('service')}}" class="theme-btn btn-two">view all services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-nine end -->


    <!-- feature-style-two -->
    <section class="feature-style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>Our Clinic Features</h6>
                            <h2>Why choose our cleaning service for home</h2>
                        </div>
                        <div class="text">
                            <p>All of our services are provided by registered psychologists, or by experienced masters and doctoral clinicians under the supervision of a psychologist.</p>
                        </div>
                        <div class="list-inner">
                            <ul class="list-style-one clearfix">
                                <li>Personalized Cleaning</li>
                                <li>Licensed Cleaner</li>
                                <li>Experience Staff</li>
                                <li>Comfortable Timing</li>
                            </ul>
                            <ul class="list-style-one clearfix">
                                <li>Personalized Cleaning</li>
                                <li>Licensed Cleaner</li>
                                <li>Experience Staff</li>
                                <li>Comfortable Timing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 video-column">
                    <div class="video-content">
                        <div class="video-inner" style="background-image: url(assets/images/background/video-bg-2.jpg);">
                            <div class="btn-box">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-two end -->

    <!-- testimonial-section -->
    <section class="testimonial-section about-page">
        <div class="auto-container">
            <div class="sec-title">
                <h6>Testimonials</h6>
                <h2>What They Say About Our Service</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
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
    </section>
    <!-- testimonial-section end -->

    <!-- company-section -->
    <section class="company-section">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>about our service</h6>
                            <h2>Cleanex Cleaning Company</h2>
                        </div>
                        <div class="text">
                            <p>At Airtronix, we provide a comprehensive range of air conditioner services including Air conditioner repair, AC installation/removal, AC servicing, aircon servicing, AC gas filling charges, leakage repair, advanced piping, and more- all available at affordable and transparent prices.</p>
                            <p>Besides, you can book our AC services from the comfort of your home.You just need to give us a call or send us your query to book our professional AC repair services within minutes whether the issue is big or small, our professionals will come to provide doorstep repair solutions at the promised time. Our 30 days service warranty further assures you that you’ll get the best value for your money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 inner-column">
                    <div class="list-inner">
                        <ul class="list clearfix">
                            <li>High-Quality AC Repairs</li>
                            <li>Experienced AC Service Engineers</li>
                            <li>90-day warranty on spare parts</li>
                            <li>AC AMC (Annual Maintenance) Available</li>
                            <li>30-day warranty on service</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- company-section end -->

@endsection
