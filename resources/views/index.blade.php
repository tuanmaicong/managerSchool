@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('banner')
    @include('website.partials.banner')
@endsection
@section('content')
    <div class="section upstudy-blog-section section-padding">
        <div class="container">
            <!-- Latest Blog Wrap Start -->
            <div class="blog-wrap">

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 09 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">How to Make Your UX Design
                                        Portfolio Stand Out</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-2.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 11 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">The Complete Digital
                                        Marketing Learning Path</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-3.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 15 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">How To Start Learn Online
                                        Study From Your Home</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-14.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 17 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">The Complete Digital
                                        Marketing Learning Path</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-15.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 19 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">How to Make Your UX Design
                                        Portfolio Stand Out</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-16.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 21 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">Social Media Marketing
                                        MASTERY( A-Z ) Journey</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-17.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 23 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">Expand Your Career
                                        Opportunities With Python</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 09 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">How To Start Learn Online
                                        Study From Your Home</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Latest Blog Item Start -->
                        <div class="single-blog text-center">
                            <div class="blog-img">
                                <a href="{{asset('fe/blog-details.html')}}"><img
                                        src="{{asset('fe/assets/images/blog/blog-18.jpg')}}" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="far fa-user"></i> <a href="">Admin</a></span>
                                    <span><i class="far fa-calendar-alt"></i> 25 Jun, 2023</span>
                                </div>
                                <h3 class="title"><a href="{{asset('fe/blog-details.html')}}">Branding: How to Brand
                                        Yourself and Your Business</a></h3>
                                <a class="blog-btn" href="{{asset('fe/blog-details.html')}}"> Read More</a>
                            </div>
                        </div>
                        <!-- Latest Blog Item End -->
                    </div>
                </div>

                <!-- upstudy Pagination Start -->
                <div class="upstudy-pagination">
                    <ul class="pagination justify-content-center">
                        <li><a href=""><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="{{asset('fe/blog.html')}}">1</a></li>
                        <li><a class="active" href="{{asset('fe/blog.html')}}">2</a></li>
                        <li><a href="{{asset('fe/blog.html')}}">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="{{asset('fe/blog.html')}}"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
                <!-- upstudy Pagination End -->
            </div>
            <!-- Blog Wrap End -->
        </div>
    </div>
@endsection

