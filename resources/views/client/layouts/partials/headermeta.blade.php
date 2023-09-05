<div class="header-meta">
    <div class="header-search d-none d-xl-block">
        <form action="#">
            <input type="text" placeholder="Search Courses">
            <button><i class="flaticon-loupe"></i></button>
        </form>
    </div>

    <div class="header-login d-none d-lg-block">
        <a class="link" href="{{asset('fe/login-register.html')}}"><i class="far fa-user"></i> Login</a>
        <a class="link" href="{{asset('fe/login-register.html')}}">Register</a>
    </div>

    <div class="header-cart dropdown">
        <button class="cart-btn" data-bs-toggle="dropdown">
            <i class="flaticon-shopping-cart"></i>
            <span class="count">3</span>
        </button>
        <div class="dropdown-menu dropdown-cart">
            <!-- Cart Items Start -->
            <div class="cart-items">
                <!-- Single Cart Item Start -->
                <div class="single-cart-item">
                    <div class="item-image">
                        <img src="{{asset('fe/assets/images/shop-cart-1.jpg')}}" alt="Cart">
                    </div>
                    <div class="item-content">
                        <h4 class="title"><a href="">Smart Gear Watch</a></h4>
                        <span class="quantity"> 2 x $59.99 </span>
                    </div>
                    <button class="btn-close"></button>
                </div>
                <!-- Single Cart Item End -->
                <!-- Single Cart Item Start -->
                <div class="single-cart-item">
                    <div class="item-image">
                        <img src="{{asset('fe/assets/images/shop-cart-2.jpg')}}" alt="Cart">
                    </div>
                    <div class="item-content">
                        <h4 class="title"><a href="">Smart Gear Watch</a></h4>
                        <span class="quantity"> 2 x $59.99 </span>
                    </div>
                    <button class="btn-close"></button>
                </div>
                <!-- Single Cart Item End -->
                <!-- Single Cart Item Start -->
                <div class="single-cart-item">
                    <div class="item-image">
                        <img src="{{asset('fe/assets/images/shop-cart-3.jpg')}}" alt="Cart">
                    </div>
                    <div class="item-content">
                        <h4 class="title"><a href="">Smart Gear Watch</a></h4>
                        <span class="quantity"> 2 x $59.99 </span>
                    </div>
                    <button class="btn-close"></button>
                </div>
                <!-- Single Cart Item End -->
            </div>
            <!-- Cart Items End -->

            <!-- Cart Total Start -->
            <div class="cart-total">
                <span class="label">Subtotal:</span>
                <span class="value">$229.95</span>
            </div>
            <!-- Cart Total End -->

            <!-- Cart Button Start -->
            <div class="cart-btns">
                <a href="" class="btn">View Cart</a>
                <a href="" class="btn btn-white">Checkout</a>
            </div>
            <!-- Cart Button End -->
        </div>
    </div>

    <div class="header-toggle d-lg-none">
        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

</div>
