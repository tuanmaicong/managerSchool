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
                    <h2 class="title">Tin tức <span>nổi bật</span></h2>
                </div>
                <div class="blog-content-wrap">
                    <div class="row">
                        @foreach($data as $item)
                        <div class="col-lg-4 col-sm-6">
                            <!-- Latest Blog Item Start -->
                            <div class="single-blog text-center">
                                <div class="blog-img">
                                    <a href=""><img width="355px" height="266px" src="{{asset($item->image)}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i>{{$item->created_at}}</span>
                                    </div>
                                    <h3 class="title"><a href="">{{$item->subject}}</a></h3>
                                    <a class="blog-btn" href="{{}}">Chi tiết</a>
                                </div>
                            </div>
                            <!-- Latest Blog Item End -->
                        </div>
                        @endforeach
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

