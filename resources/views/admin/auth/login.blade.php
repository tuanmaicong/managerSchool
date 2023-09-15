<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('be/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('be/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                                </div>
                                @error('email')
                                <div class="form-group">
                                        <span style="color: red;font-size: 14px">{{ $message }}</span>
                                </div>
                                @enderror
                                <form id="myForm" class="user" action="{{route('admin.postLogin')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control form-control-user"
                                               placeholder="Nhập email...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                               id="password" placeholder="Nhập mật khẩu...">
                                        @error('password')
                                        <span style="color: red;font-size: 14px">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" id="submitButton" class="btn btn-primary" disabled>Submit</button>
                                </form>
{{--
{{--                                    <hr>--}}
{{--                                    <a href="index.html" class="btn btn-google btn-user btn-block">--}}
{{--                                        <i class="fab fa-google fa-fw"></i> Login with Google--}}
{{--                                    </a>--}}
{{--                                    <a href="index.html" class="btn btn-facebook btn-user btn-block">--}}
{{--                                        <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook--}}
{{--                                    </a>--}}
{{--                                </form>--}}
{{--                                <hr>--}}
{{--                                <div class="text-center">--}}
{{--                                    <a class="small" href="forgot-password.html">Forgot Password?</a>--}}
{{--                                </div>--}}
{{--                                <div class="text-center">--}}
{{--                                    <a class="small" href="register.html">Create an Account!</a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
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
<!-- Bootstrap core JavaScript-->
<script src="{{asset('be/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('be/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('be/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('be/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
