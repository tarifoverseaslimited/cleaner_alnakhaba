@extends('website.layout.app')
@section('title',$blog['title'])
@section('body')
    <!-- sidebar-page-container -->
    <section class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-three">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{asset('/')}}{{$blog['image']}}" alt="{{$blog['title']}}"></figure>
                                    <div class="post-date" style="font-size: 11px">{{$blog['created_at']}}</div>
                                </div>
                                <div class="lower-content">
                                   {{-- <ul class="post-info clearfix">
                                        <li>By :  <a href="blog-details.html">Admin</a></li>
                                        <li><a href="blog-details.html">window cleaning</a>, <a href="blog-details.html">home cleaning</a></li>
                                        <li>Comments: <a href="blog-details.html">7</a></li>
                                    </ul>--}}
                                    <h2>{!! $blog['title'] !!}</h2>
                                    <p>
                                        {!! $blog['description'] !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Services</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    @foreach($services as $service)
                                    <li><a href="{{route('serviceDetails',$service['slug'])}}">{{$service['name']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Recent Blogs</h3>
                            </div>
                            <div class="post-inner">
                                @foreach($blogs as $blg)
                                <div class="post">
                                    <figure class="post-thumb">
                                        <a class="img-fluid" href="{{route('blogDetails',$blg['slug'])}}">
                                            <img src="{{asset('/')}}{{$blg['image']}}" alt="">
                                        </a>
                                    </figure>
                                    <h5>
                                        <a href="{{route('blogDetails',$blg['slug'])}}">{!! $blg['title'] !!}</a>
                                    </h5>
                                    <span class="post-date">{{$blg['created_at']}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar-page-container end -->
@endsection
