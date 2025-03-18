<section class="main-footer">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('/')}}assets/images/shape/shape-6.png);"></div>
        <div class="pattern-2" style="background-image: url({{asset('/')}}assets/images/shape/shape-7.png);"></div>
        <div class="pattern-3" style="background-image: url({{asset('/')}}assets/images/shape/shape-8.png);"></div>
    </div>
    <div class="footer-top">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                    <div class="text-inner">
                        <figure class="image-box">
                            <img src="{{asset('/')}}{{$setting['newsletter_logo']}}" alt="">
                        </figure>
                        <h3>Subscribe to Newsletter</h3>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="{{route('contact.form.submit')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email address" required="">
                                <button type="submit">submit now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="widget-section">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget logo-widget">
                        <figure class="footer-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('/')}}{{$setting['footer_logo']}}" alt="">
                            </a></figure>
                        <ul class="footer-social clearfix">
                            <li><a href="{{$setting['facebook']}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$setting['linkedin']}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$setting['twitter']}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$setting['google_plus']}}"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_40">
                        <div class="widget-title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('service')}}">Services</a></li>
                                <li><a href="{{route('project')}}">Projects</a></li>
                                <li><a href="{{route('blog')}}">Blogs</a></li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml_20">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list clearfix">
                                @foreach($servs as $serve)
                                <li><a href="{{route('serviceDetails',$serve['slug'])}}">{{$serve['name']}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Office Address</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li>{{$setting['office_address']}}</li>
                                <li>Email us : <br /><a href="mailto:{{$setting['footer_email']}}">{{$setting['footer_email']}}</a></li>
                                <li><h3><a href="tel:{{$setting['footer_phone']}}">+ {{$setting['footer_phone']}}</a></h3></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="bottom-inner">
                <p>{!! $setting['copyright_text'] !!}</p>
            </div>
        </div>
    </div>
</section>
