@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="container mb-5 mt-5">
    <!-- Blog Details Wrap Start -->
    <div class="blog-details-wrap">
        <div class="row">
            <div class="col-lg-8">
                <!-- Blog Details Post Start -->
                <div class="blog-details-post">
                    <!-- Single Blog Start -->
                    <div class="single-blog-post single-blog">
                        <div class="blog-image">
                            <a href=""><img src="{{asset($model->image)}}" alt=""></a>
                        </div>
                        <div class="blog-content">
                            <h3 class="title">{{$model->subject}}</h3>
                            <p class="text">{{$model->content}}</p>
                        </div>
                    </div>
                    <!-- Single Blog End -->
                    <div class="blog-details-content">
                        <!-- Blog Blockquote Start -->
                        <div class="blog-quote">
                            <blockquote class="blockquote">
                                <div class="blockquote-icon">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                                    <g>
                                                        <polygon points="0,4 0,28 12,16 12,4" />
                                                        <polygon points="20,4 20,28 32,16 32,4" />
                                                    </g>
                                                </svg>
                                </div>
                                <p>The basic premise of search engine reputation management is to use the following three strategies to accomplish the goal of creating a completely positive first page of search engine results for a specific term…</p>
                                <h3 class="name">Maria Hedge</h3>
                            </blockquote>
                        </div>
                        <!-- Blog Blockquote End -->
                        <!-- Blog Details Text Start -->
                        <div class="blog-details-text">
                            <h4 class="title">Whats New</h4>
                            <p>If you’ve been researching exactly what skill you want to learn, or if you just need one more skill to round out your resume Whether fully virtual, fully in-person or something in between, explore. Nancy boy Charles down the pub get stuffed . </p>
                        </div>
                    </div>
                </div>
                <!-- Blog Details Post End -->
            </div>
            <div class="col-lg-4">
                <!-- Blog Sidebar Start -->
                <div class="blog-sidebar">
                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget sidebar-widget-1">
                        <!-- Widget Search Form Start -->
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Write your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <!-- Widget Search Form End -->
                    </div>
                    <!-- Sidebar Widget End -->

                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget">
                        <!-- Widget Title Start -->
                        <div class="widget-title">
                            <h3 class="title">Popular Posts</h3>
                        </div>
                        <!-- Widget Title End -->
                        <!-- Widget Recent Post Start -->
                        <div class="recent-posts">
                            <ul>
                                <li>
                                    <a class="post-link" href="">
                                        <div class="post-thumb">
                                            <img src="{{asset('fe/assets/images/blog/r-post-1.jpg')}}" alt="">
                                        </div>
                                        <div class="post-text">
                                            <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2023</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="post-link" href="">
                                        <div class="post-thumb">
                                            <img src="{{asset('fe/assets/images/blog/r-post-2.jpg')}}" alt="">
                                        </div>
                                        <div class="post-text">
                                            <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2023</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="post-link" href="">
                                        <div class="post-thumb">
                                            <img src="{{asset('fe/assets/images/blog/r-post-3.jpg')}}" alt="">
                                        </div>
                                        <div class="post-text">
                                            <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                            <span class="post-meta"><i class="far fa-calendar-alt"></i> May 15, 2023</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Widget Recent Post End -->
                    </div>
                    <!-- Sidebar Widget End -->

                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget">
                        <!-- Widget Title Start -->
                        <div class="widget-title">
                            <h3 class="title">Categories</h3>
                        </div>
                        <!-- Widget Title End -->
                        <!-- Widget Category Start -->
                        <ul class="category">
                            <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Technology <span class="post-count">3</span></a></li>
                            <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Innovation <span class="post-count">5</span></a></li>
                            <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Learning <span class="post-count">3</span></a></li>
                            <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Information <span class="post-count">3</span></a></li>
                        </ul>
                        <!-- Widget Category End -->
                    </div>
                    <!-- Sidebar Widget End -->

                    <!-- Sidebar Widget Start -->
                    <div class="sidebar-widget">
                        <!-- Widget Title Start -->
                        <div class="widget-title">
                            <h3 class="title">Tags</h3>
                        </div>
                        <!-- Widget Title End -->
                        <!-- Widget Category Start -->
                        <ul class="sidebar-tag">
                            <li><a href="#">Learning</a></li>
                            <li><a href="#">Course</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Udemy</a></li>
                            <li><a href="#">Online</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                        <!-- Widget Category End -->
                    </div>
                    <!-- Sidebar Widget End -->
                </div>
                <!-- Blog Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog Details Wrap End -->
    </div>
@endsection
