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
                                <h2 class="title" style="color: white">Đăng ký tài khoản</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="login-register-form">
                                <form action="{{route('postRegister')}}" id="myForm" method="post">
                                    @csrf
                                    <div class="single-form">
                                        <input type="email" id="email" name="email" class="form-control"
                                               placeholder="Email">
                                    </div>
                                    <div class="single-form">
                                        <input type="text" id="username" name="username" class="form-control"
                                               placeholder="Username or email">
                                    </div>
                                    <div class="single-form">
                                        <input type="password" id="password" name="password" class="form-control"
                                               placeholder="Password">
                                    </div>
                                    <div class="single-form">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                                               placeholder="Confirm Password">
                                    </div>
                                    <div class="single-form">
                                        <button class="btn" id="submitButton" disabled>Đăng ký</button>
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
        const username = document.getElementById('username');
        const password = document.getElementById('password');
        const password_confirmation = document.getElementById('password_confirmation');
        const submitButton = document.getElementById('submitButton');

        // Lắng nghe sự kiện nhập liệu trong các input
        email.addEventListener('input', checkInputs);
        username.addEventListener('input', checkInputs);
        username.addEventListener('input', checkInputs);
        password_confirmation.addEventListener('input', checkInputs);

        // Hàm kiểm tra dữ liệu và hiển thị nút submit
        function checkInputs() {
            if (email.value.trim() !== '' && username.value.trim() !== '' && username.value.trim() !== ''&& password_confirmation.value.trim() !== '') {
                submitButton.removeAttribute('disabled');
            } else {
                submitButton.setAttribute('disabled', 'true');
            }
        }
    </script>
@endpush
