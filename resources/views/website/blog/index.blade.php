@extends('website.layout.app')
@section('title','Blogs')
@section('body')
    <!-- blog-grid -->
    <section class="blog-grid">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row clearfix">
                        @foreach($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-three">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="{{route('blogDetails',$blog['slug'])}}">
                                                <img src="{{asset('/')}}{{$blog['image'] ?? ''}}" alt="">
                                            </a>
                                        </figure>
                                        <div class="post-date" style="font-size:11px;">{{$blog['created_at'] ?? ''}}</div>
                                    </div>
                                    <div class="lower-content">
                                        <h2>
                                            <a href="{{route('blogDetails',$blog['slug'])}}">{{$blog['title'] ?? ''}}</a>
                                        </h2>
                                        <p>{{$blog['short_description'] ?? ''}}</p>
                                        <div class="btn-box">
                                            <a href="{{route('blogDetails',$blog['slug'])}}" class="theme-btn btn-two">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid end -->
@endsection
