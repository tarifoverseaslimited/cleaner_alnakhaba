@extends('website.layout.app')
@section('title',$service['name'])
@section('body')

    <!-- service-details -->
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="category-widget sidebar-widget">
                            <ul class="category-list clearfix">
                                @foreach($services as $serve)
                                <li><a href="{{route('serviceDetails',$serve['slug'])}}" class="{{$serve['name'] == $service['name'] ? 'current':''}}">{{ $serve['name'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="contact-widget sidebar-widget">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/resource/sidebar-1.jpg" alt=""></figure>
                                </div>
                                <div class="content-box">
                                    <h3><span>Available</span> for any type of Cleaning Service</h3>
                                    <h2>We can help</h2>
                                    <div class="btn-box centred">
                                        <a href="{{route('contact')}}" class="theme-btn btn-two">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="service-details-content">
                        <div class="content-one">
                            <h2>{{ $service['name']}} Job in Saudi Arabia – A Stable & Rewarding Career</h2>
                        </div>
                        <div class="content-two">
                            <div class="row clearfix">
                                {!! $service['long_description'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-details end -->

@endsection
