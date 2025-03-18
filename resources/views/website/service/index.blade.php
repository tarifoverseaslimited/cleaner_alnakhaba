@extends('website.layout.app')
@section('title','Services')
@section('body')
    <!-- service-page-section -->
    <section class="service-page-section pt-5">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>our services</h6>
                <h2>What We Do For Our Customers</h2>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will <br />uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
            </div>
            <div class="row clearfix">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- service-page-section end -->


    <!-- chooseus-style-four -->
    <section class="chooseus-style-four">
        <figure class="image-layer"><img src="{{asset('/')}}assets/images/resource/chooseus-3.png" alt=""></figure>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h6>our guarantee</h6>
                        <h2>Why Choose Us</h2>
                        <p>We take pride in delivering exceptional cleaning solutions with a commitment to quality, professionalism, and customer satisfaction.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon"><i class="flaticon-thumbs-up"></i></div>
                                    </div>
                                    <h3>✔ 100% Satisfaction Guaranteed</h3>
                                    <p>Your happiness is our priority! We ensure thorough cleaning and outstanding results, leaving your space spotless and refreshed.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon"><i class="flaticon-biodegradable"></i></div>
                                    </div>
                                    <h3>✔ Trusted & Reliable Service</h3>
                                    <p>We take pride in delivering exceptional cleaning solutions with a commitment to quality, professionalism, and customer satisfaction.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon"><i class="flaticon-broom"></i></div>
                                    </div>
                                    <h3>✔ Eco-Friendly Products</h3>
                                    <p>We use non-toxic, environmentally safe cleaning solutions to protect your health, pets, and the planet while maintaining top-notch cleanliness.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon"><i class="flaticon-warranty"></i></div>
                                    </div>
                                    <h3>✔ Over 280,000 Cleans Completed</h3>
                                    <p>With extensive experience and a track record of excellence, we have successfully cleaned thousands of homes, offices, and commercial spaces.</p>
                                </div>
                            </div>
                            {{--<div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="single-item">
                                    <div class="icon-box">
                                        <div class="icon"><i class="flaticon-warranty"></i></div>
                                    </div>
                                    <h3>✔ Cost-Effective Solutions</h3>
                                    <p>Our services provide top-quality cleaning at affordable rates, ensuring you get the best value without compromising on quality.</p>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-style-four end -->

@endsection
