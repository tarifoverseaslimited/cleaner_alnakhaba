@extends('website.layout.app')
@section('title','Contact Us')
@section('body')
    <!-- contact-page-section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <h6>get in touch</h6>
                <h2>We Love to Hear From You</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form method="post" action="{{route('contact.form.submit')}}" id="contact-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your Name" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your email" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" required="" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <textarea name="message" placeholder="message"></textarea>
                            </div>
                            <div class="form-group message-btn">
                                <button class="theme-btn btn-two" type="submit" name="submit-form">submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="text">
                            <h2>Our Address</h2>
                            <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service.</p>
                        </div>
                        <ul class="info-list clearfix">
                            <li>
                                <div class="icon-box"><img src="assets/images/icons/icon-60.png" alt=""></div>
                                <h4>Address :</h4>
                                <p>{{$setting['office_address']}}</p>
                            </li>
                            <li>
                                <div class="icon-box"><img src="assets/images/icons/icon-61.png" alt=""></div>
                                <h4>Phone :</h4>
                                <p><a href="tel:{{$setting['top_helpline']}}">{{$setting['top_helpline']}}</a>  /  <a href="tel:{{$setting['footer_phone']}}">{{$setting['footer_phone']}}</a></p>
                            </li>
                            <li>
                                <div class="icon-box"><img src="assets/images/icons/icon-62.png" alt=""></div>
                                <h4>Email :</h4>
                                <p><a href="mailto:{{$setting['footer_email']}}">{{$setting['footer_email']}}</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-page-section end -->


    <!-- google-map-two -->
    <section class="google-map-two">
        <div class="map-inner">
            <div
                class="google-map"
                id="contact-google-map"
                data-map-lat="40.712776"
                data-map-lng="-74.005974"
                data-icon-path="assets/images/icons/map-marker.png"
                data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

            </div>
        </div>
    </section>
    <!-- google-map-two end -->
@endsection
