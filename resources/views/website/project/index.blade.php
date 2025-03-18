@extends('website.layout.app')
@section('title','Projects')
@section('body')

    <!-- project-page-section -->
    <section class="project-page-section project-page-three pt-5">
        <div class="outer-container">
            <div class="sec-title centred">
                <h6>Our portfolio</h6>
                <h2>Our Recent Work</h2>
            </div>
            <div class="sortable-masonry">
                <div class="filters centred">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All</li>
                        @foreach($services as $service)
                            <li class="filter" data-role="button" data-filter=".{{$service['slug']}}">{{$service['name']}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="items-container row clearfix">
                    @foreach($projects as $project)
                    <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column {{$project['service_filter']}}">
                        <div class="project-block-two">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('/')}}{{$project['image']}}" alt=""></figure>
                                <div class="content-box">
                                    <ul class="option-list clearfix">
                                        <li><a href="{{asset('/')}}{{$project['image']}}" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a></li>
                                    </ul>
                                    <div class="text">
                                        <h6>{{ $project['name'] }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- project-page-section end -->
@endsection
