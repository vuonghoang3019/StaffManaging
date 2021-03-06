@extends('frontend::master.master')
@section('title')
    <title>About</title>
@endsection
@section('content')
    <div class="all-title-box title-image" style="background-image:url({{ asset('home/images/banner.png') }});background-repeat: no-repeat;background-attachment: fixed;background-position: center">
    </div>    </div>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="text-danger">Tin tức tại trung tâm Ngoại ngữ Asia</h3>
            </div><!-- end title -->
            <div class="row">

                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
                        <div class="image-blog">
                            <img src="{{ asset($newsDetail->image_path) }}" alt="" width="750" height="450">
                        </div>
                        <div class="post-content">
                            <div class="post-date">
                                <span class="day">30</span>
                                <span class="month">Nov</span>
                            </div>
                            <div class="meta-info-blog">
                                <span><i class="fa fa-calendar"></i> {{ $newsDetail->created_at }} </span>
                            </div>
                            <div class="blog-title">
                                <h2>{!! $newsDetail->title  !!}</h2>
                            </div>
                            <div class="blog-desc">
                                <p>{!! $newsDetail->content !!}</p>
                            </div>
                        </div>
                    </div>


                </div><!-- end col -->

                @include('frontend::components.news')
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->






@endsection
