@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Error Start -->
    <div class="section error-section section-padding">
        <div class="container">
            <!-- Error Wrapper Start -->
            <div class="error-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="error-item text-center">
                            <div class="error-thumb">
                                <img src="{{asset('fe/assets/images/404.png')}}" alt="">
                            </div>
                            <div class="error-content">
                                <h3 class="title">Sorry We Can`t Find That Page!</h3>
                                <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                                <div class="error-form">
                                    <form class="search-form" action="#" method="get">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="flaticon-loupe"></i></button>
                                    </form>
                                </div>
                                <a class="btn" href="#">Take Me Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Error Wrapper End -->
        </div>
    </div>
    <!-- Error End -->
@endsection
