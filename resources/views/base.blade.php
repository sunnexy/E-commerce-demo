<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Vendor App</title>

    <!-- Theme style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="background-transparent" align="center">

<!-- Header Top Area -->
<div class="header_top_area">
    <div class="container">
        <div class="header_top_inner d-sm-flex justify-content-sm-between">
            <ul class="left_info">
                <li><a href="{{URL('/')}}">Home</a></li>
                <li><a href="{{URL('/contact')}}">Contact Us</a></li>
            </ul>
            <ul>
                <li><a href="{{URL('/')}}">CJAY BAKERY AND EATERY</a></li>
            </ul>
            <ul class="header_social">
                <li><a href="{{URL('/cart')}}" class="quote_btn">Cart {{Cart::count()}}<i class="fa fa-cart"></i></a></li>
                <li><a href="{{URL('/cart_clear')}}" class="quote_btn">Clear cart<i class="fa fa-cart"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Shop with sidebar -->
<section class="shop_with_sidebar" align="center">
    <div class="container" align="center">
        <div class="row">
            <div class="col-lg-9 shop_left_sidebar" style="align-content: center; text-align: center;">
                <div class="row" style="align-content: center; text-align: center;">
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items" style="width: 200px; height: 20px;">
                            <a href="#" class="shop_img"><img src="{{asset('images/Bread.png')}}" alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Bread</a>
                                <h4>#400</h4>
                                <a href="{{ route('add', ['id'=> 1, 'name'=>'Bread', 'price'=>400]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6 ">
                        <div class="shop_items" style="width: 200px;">
                            <a href="#" class="shop_img"><img src="{{asset('images/Cup_cake.jpg')}}" height="215px"alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Cup-cake</a>
                                <h4>#350</h4>
                                <a href="{{ route('add', ['id'=> 2, 'name'=>'Cup-cake', 'price'=>350]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items" style="width: 200px;">
                            <a href="#" class="shop_img"><img src="{{asset('images/Donut.jpg')}}" height="215px"alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Donut</a>
                                <h4>#300</h4>
                                <a href="{{ route('add', ['id'=> 3, 'name'=>'Donut', 'price'=>300]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/Coke.jpg')}}" alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Coke</a>
                                <h4>#150</h4>
                                <a href="{{ route('add', ['id'=> 4, 'name'=>'Coke', 'price'=>150]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/fanta.png')}}" width="250px" height="240px" alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Fanta</a>
                                <h4>#150</h4>
                                <a href="{{ route('add', ['id'=> 5, 'name'=>'fanta', 'price'=>150]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/yoghurt.png')}}" height="240px"alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Yoghurt</a>
                                <h4>#500</h4>
                                <a href="{{ route('add', ['id'=> 6, 'name'=>'yoghurt', 'price'=>500]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6 ">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/Eva_Water.png')}}" alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Eva-water</a>
                                <h4>#100</h4>
                                <a href="{{ route('add', ['id'=> 7, 'name'=>'Eva-water', 'price'=>100]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/ice_cream.jpg')}}" width="210px" height="215px" alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Ice-cream</a>
                                <h4>#400</h4>
                                <a href="{{ route('add', ['id'=> 8, 'name'=>'Ice-cream', 'price'=>400]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <!-- shop_items -->
                    <div class="col-md-4 col-sm-6">
                        <div class="shop_items">
                            <a href="#" class="shop_img"><img src="{{asset('images/meat_pie.jpg')}}" height="215px"alt=""></a>
                            <div class="shop_text">
                                <a href="#" class="s_heding">Meat-pie </a>
                                <h4>#350</h4>
                                <a href="{{ route('add', ['id'=> 9, 'name'=>'meat-pie', 'price'=>350]) }}" class="theme_btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop with side bar -->

<!-- Connect with us -->
<!-- End Connect with us -->

<!-- Footer Area -->
<!-- <footer class="footer_area">
    <div class="container">
        <div class="footer_inner row">
            <div class="col-lg-5 col-md-6 footer_logo">
                <a href="{{URL('/')}}"><img src="images/logo.png" alt=""></a>
                <p>Established in 2013 as the first cloud mining provider, Blog has become a multi-functional Blog  Categories, trusted by over a million users.</p>
                <address>
                    <span>LOCATION</span>
                    <p>12/4  New Yourk R Block  Street 2101 USA</p>
                </address>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="subscribe">
                    <h4>Subscribe</h4>
                    <p>Sign up for our mailing list to get latest updates and offers</p>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
                        </div>
                    </div>
                    <h6>Working Hours :  Monday-Saturday <span>Close : Sunday</span></h6>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 resources">
                <h4>Short Link</h4>
                <ul class="resources_list">
                    <li><a href="#">About</a></li>
                    <li><a href="{{URL('/contact')}}">Contact</a></li>
                    <li><a href="#">Bug  Bounty Program</a></li>
                    <li><a href="#">Policy</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <p>Copyright © 2018 <a href="#">Mora</a> Developed by <a href="http://themazin.com">Themazin</a></p>
    </div>
</footer> -->
<!-- End Footer Area -->

<!-- Scroll Top Button -->

<!-- jQuery v3.2.1 -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<!-- Bootstrap v4.1.0 -->
<script src="js/bootstrap.min.js"></script>
<!-- Extra Plugin -->
<script src="vendors/animate-css/wow.min.js"></script>

<!-- Theme js / Custom js -->
<script src="js/theme.js"></script>
</body>
</html>