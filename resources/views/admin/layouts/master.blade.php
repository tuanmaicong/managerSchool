{{--trang con và page kế thừa layout này--}}
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('be/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('be/css/sb-admin-2.min.css')}}" rel="stylesheet">
    @stack('styles')
    <style>
        #notification {
            display: none;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
        }
    </style>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.layouts.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('admin.layouts.partials.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card shadow mb-4" @if(empty(session()->has('msg'))) style="display: none" @endif>

                    <div class="col-md-6 pt-3">
                        @if(session()->has('msg'))
                            <div class="alert
            @if(session()->get('status') == \Illuminate\Http\Response::HTTP_OK)
                alert-success
            @else
                alert-danger
            @endif
            ">
                                <p>{{ session()->get('msg') }}</p>
                            </div>
                        @endif
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('admin.layouts.partials.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('admin.layouts.partials.logout')

<!-- Bootstrap core JavaScript-->
<script src="{{asset('be/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('be/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@stack('script')
<!-- Core plugin JavaScript-->
<script src="{{asset('be/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('be/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
