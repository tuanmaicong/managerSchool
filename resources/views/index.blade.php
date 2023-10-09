@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('banner')
    @include('website.partials.banner')
@endsection
@section('content')
    <!-- Blog Start -->
    <div class="section upstudy-blog-section section-padding">
        <div class="container">
            <!-- Latest Blog Wrap Start -->
            <div class="blog-wrap">
                <div class="section-title text-center">
                    <h2 class="title">Latest <span>News</span></h2>
                </div>
                <div class="blog-content-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Latest Blog Item Start -->
                            <div class="single-blog text-center">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{asset('fe/assets/images/blog/blog-1.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-user"></i> <a href="#">Admin</a></span>
                                        <span><i class="far fa-calendar-alt"></i> 09 Jun, 2023</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">How to Make Your UX Design Portfolio Stand Out</a></h3>
                                    <a class="blog-btn" href="blog-details.html"> Read More</a>
                                </div>
                            </div>
                            <!-- Latest Blog Item End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Latest Blog Item Start -->
                            <div class="single-blog text-center">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{asset('fe/assets/images/blog/blog-2.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-user"></i> <a href="#">Admin</a></span>
                                        <span><i class="far fa-calendar-alt"></i> 11 Jun, 2023</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">The Complete Digital Marketing Learning Path</a></h3>
                                    <a class="blog-btn" href="blog-details.html"> Read More</a>
                                </div>
                            </div>
                            <!-- Latest Blog Item End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Latest Blog Item Start -->
                            <div class="single-blog text-center">
                                <div class="blog-img">
                                    <a href="blog-details.html"><img src="{{asset('fe/assets/images/blog/blog-3.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-user"></i> <a href="#">Admin</a></span>
                                        <span><i class="far fa-calendar-alt"></i> 15 Jun, 2023</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">How To Start Learn Online Study From Your Home</a></h3>
                                    <a class="blog-btn" href="blog-details.html"> Read More</a>
                                </div>
                            </div>
                            <!-- Latest Blog Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Wrap End -->
        </div>
    </div>
    <!-- Blog End -->
@endsection
@section('website.partials.bannerbottom')
@endsection

