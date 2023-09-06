@extends('website.layouts.master')

@section('title')
    {{$title}}
@endsection
@section('content')
    <div class="section login-register-section section-padding"
         style="background-image:url({{asset('fe/assets/images/hero6-img.jpg')}});background-size: 1500px">
        <div class="container">

            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrap">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <!-- Login & Register Box Start -->
                        <div class="login-register-box">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title" style="color: white">Đăng nhập</h2>
                            </div>
                            @error('email')
                            <span style="color: white;text-shadow: 2px 2px red;font-size: 14px">{{ $message }}</span>
                            @enderror
                            <!-- Section Title End -->
                            <div class="login-register-form">
                                <form action="{{route('postLogin')}}" id="myForm" method="post">
                                    @csrf
                                    <div class="single-form">
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="Email">
                                    </div>
                                    <div class="single-form">
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="Password">
                                        @error('password')
                                        <span style="color: white;text-shadow: 2px 2px red;font-size: 14px">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="single-form">
                                        <button class="btn" id="submitButton" disabled>Đăng nhập</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login & Register Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        // Lấy các phần tử cần thiết từ DOM
        const form = document.getElementById('myForm');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const submitButton = document.getElementById('submitButton');

        // Lắng nghe sự kiện nhập liệu trong các input
        email.addEventListener('input', checkInputs);
        password.addEventListener('input', checkInputs);

        // Hàm kiểm tra dữ liệu và hiển thị nút submit
        function checkInputs() {
            if (email.value.trim() !== '' && password.value.trim() !== '') {
                submitButton.removeAttribute('disabled');
            } else {
                submitButton.setAttribute('disabled', 'true');
            }
        }
    </script>
@endpush
