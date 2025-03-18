@extends('website.layout.app')
@section('title',$project['name'])
@section('body')
    <!-- project-details -->
    <section class="project-details">
        <div class="auto-container">
            <div class="row clearfix">
                {!! $project['description'] !!}
            </div>
        </div>
    </section>
    <!-- project-details end -->
@endsection
