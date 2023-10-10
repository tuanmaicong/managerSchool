@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Blog Standard Start -->
    <div class="section blog-standard-section section-padding">
        <div class="container">
            <!-- Blog Standard Wrap Start -->
            <div class="blog-standard-wrap">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Blog Post Wrap Start -->
                        <div class="blog-post-wrap">
                            <!-- Single Blog Start -->
                            @foreach($data as $item)
                                <div class="single-blog single-blog-post">
                                    <div class="blog-img">
                                        <a href=""><img src="{{asset($item->image)}}" alt=""></a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="far fa-calendar-alt"></i>{{$item->created_at}}</span>
                                        </div>
                                        <h3 class="title"><a href="">{{$item->subject}}</a></h3>
                                        <a class="blog-btn" href="{{route('news.detail',$item)}}">Chi tiết</a>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single Blog End -->
                            <!-- upstudy Pagination Start -->
                            <div class="upstudy-pagination">
                                <ul class="pagination justify-content-center">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="">1</a></li>
                                    <li><a class="active" href="">2</a></li>
                                    <li><a href="">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href=""><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- upstudy Pagination End -->
                        </div>
                        <!-- Blog Post Wrap Ed -->
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
            <!-- Blog Standard Wrap End -->
        </div>
    </div>
    <!-- Blog Standard End -->
@endsection
