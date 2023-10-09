@extends('website.layouts.master')
@section('title')
    {{$title}}
@endsection
@section('content')
    <!-- Contact Start -->
    <div class="section contact-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-wrap">
                        <h3 class="info-title">Liên hệ</h3>
                        <!--Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="info-content">
                                <h5 class="title">Số điện thoại</h5>
                                <p>0372948410</p>
                            </div>
                        </div>
                        <!--Single Contact Info End -->
                        <!--Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <div class="info-content">
                                <h5 class="title">Email</h5>
                                <p>tuanmc0302@gmail.com</p>
                            </div>
                        </div>
                        <!--Single Contact Info End -->
                        <!--Single Contact Info Start -->
                        <div class="single-contact-info">
                            <div class="info-icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <div class="info-content">
                                <h5 class="title">Địa chỉ</h5>
                                <p>Hà Nội</p>
                            </div>
                        </div>
                        <!--Single Contact Info End -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form Wrap Start -->
                    <div class="contact-form-wrap">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{route('postContact')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" type="text" name="name" placeholder="Họ tên">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" type="email" name="email" placeholder="Email">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" type="text" name="phone_number" placeholder="Số điện thoại">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-6">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <input class="form-control" type="text" name="subject" placeholder="Tiêu đề">
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <textarea class="form-control" name="message" placeholder="Nội dung"></textarea>
                                    </div>
                                    <!-- Single Form End -->
                                </div>
                                <div class="col-md-12">
                                    <!--  Single Form Start -->
                                    <div class="form-btn">
                                        <button class="btn" type="submit">Gửi</button>
                                    </div>
                                    <!--  Single Form End -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form Wrap End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
