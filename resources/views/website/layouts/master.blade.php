<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 08:57:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fe/assets/images/favicon.png')}}">
    <style>
        /* Ẩn menu con ban đầu */
        .submenu {
            display: none;
        }

        /* Hiển thị menu con khi hover vào menu cha */
        .menu-parent:hover .submenu {
            display: block;
        }

        /* Tạo kiểu dáng menu */
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
        }

        /* Kiểu dáng menu con */
        .submenu {
            position: absolute;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            padding: 10px;
        }

        .submenu li {
            margin: 5px 0;
        }

    </style>
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/style.css')}}">
    <!-- CSS
       ============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/flaticon.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/aos.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/jquery.powertip.min.css')}}">
    <link rel="stylesheet" href="{{asset('fe/assets/css/plugins/magnific-popup.css')}}">
    @stack('styles')
    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" {{asset('fe/href="assets')}}/css/vendor/plugins.min.css">
    <link rel="stylesheet" {{asset('fe/href="assets')}}/css/style.min.css"> -->

</head>

<body>

<div class="main-wrapper">


    <!-- Preloader start -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start  -->
    <div class="section header">
        {{--        <div class="header-top-section">--}}
        {{--            <div class="container">--}}
        {{--                <div class="header-top-wrap">--}}
        {{--                    <div class="header-top-content text-center">--}}
        {{--                        <p>Learn the latest trends indrive business innovation with the--}}
        {{--                            <span>Oxford  Fintech Programe</span></p>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="header-bottom-section">

            <div class="container-fluid custom-container">
                <div class="header-bottom-wrap">

                    <div class="header-logo-menu">

                        <!--  Header Logo Start  -->
                        <div class="header-logo">
                            <a href="{{asset('fe/index.html')}}"><img src="{{asset('fe/assets/images/logo.png')}}"
                                                                      alt="logo"></a>
                        </div>
                        <!--  Header Logo End  -->

                        <!--  Header Menu Start  -->
                        @include('website.partials.headermenu')
                        <!--  Header Menu End  -->

                    </div>


                    <!-- Header Meta Start -->
                    @include('website.partials.headermeta')
                    <!-- Header Meta End -->

                </div>
            </div>


        </div>
    </div>
    <!-- Header End -->


    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu">

        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="{{asset('fe/index.html')}}"><img src="{{asset('fe/assets/images/logo-white.png')}}" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->

            <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>

        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <ul class="main-menu">
                    <li>
                        <a href="{{asset('fe/index.html')}}">Home</a>
                        <ul class="sub-menu">
                            <li><a href="{{asset('fe/index.html')}}">Main Demo</a></li>
                            <li><a href="{{asset('fe/index-2.html')}}">Course Hub</a></li>
                            <li><a href="{{asset('fe/index-3.html')}}">Distant Learning</a></li>
                            <li><a href="{{asset('fe/index-4.html')}}">Kindergarten</a></li>
                            <li><a href="{{asset('fe/index-5.html')}}">Language</a></li>
                            <li><a href="{{asset('fe/index-6.html')}}">University</a></li>
                        </ul>
                    </li>
                    <li><a href="">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="{{asset('fe/about.html')}}">About Us</a></li>
                            <li><a href="{{asset('fe/team.html')}}">Team</a></li>
                            <li><a href="{{asset('fe/team-details.html')}}">Team Single</a></li>
                            <li><a href="{{asset('fe/event.html')}}">Event</a></li>
                            <li><a href="{{asset('fe/faq.html')}}">Faq's</a></li>
                            <li><a href="{{asset('fe/error.html')}}">404 Page</a></li>
                            <li><a href="{{asset('fe/login-register.html')}}">Login Register</a></li>
                        </ul>
                    </li>
                    <li><a href="{{asset('fe/course-grid.html')}}">Courses</a>
                        <ul class="sub-menu">
                            <li><a href="{{asset('fe/course-grid.html')}}">Course Grid</a></li>
                            <li><a href="{{asset('fe/course-list.html')}}">Course List</a></li>
                            <li><a href="{{asset('fe/course-details.html')}}">Course Details</a></li>
                        </ul>
                    </li>
                    <li class="active-menu"><a href="{{asset('fe/blog.html')}}">Blog</a>
                        <ul class="sub-menu">
                            <li class="active"><a href="{{asset('fe/blog.html')}}">Blog</a></li>
                            <li><a href="{{asset('fe/blog-list.html')}}">Blog List</a></li>
                            <li><a href="{{asset('fe/blog-details.html')}}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="{{asset('fe/contact.html')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Offcanvas End -->


    <!-- Page Banner Start -->
    @yield('banner')
    <!-- Page Banner End -->

    <!-- Content Start -->
    @yield('content')
    <!-- Content End -->

    <!--Banner bottom-->
    @yield('bannerbottom')
    <!--End Banner bottom-->

    <!-- Footer Start -->
    @include('website.partials.footer')
    <!-- Footer End -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
    <!-- back to top end -->

</div>
<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
<!-- JS
============================================ -->
<script src="{{asset('fe/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('fe/assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!-- Bootstrap JS -->
<script src="{{asset('fe/assets/js/plugins/popper.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/bootstrap.min.js')}}"></script>

<!-- Plugins JS -->
<script src="{{asset('fe/assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/aos.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/waypoints.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/jquery.counterup.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/back-to-top.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/jquery.powertip.min.js')}}"></script>
<script src="{{asset('fe/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
@stack('scripts')

<!-- Main JS -->
<script src="{{asset('fe/assets/js/main.js')}}"></script>

</body>


<!-- Mirrored from thepixelcurve.com/html/upstudy/upstudy/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Aug 2023 08:57:40 GMT -->
</html>
