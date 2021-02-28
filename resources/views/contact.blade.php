<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Mora Blog | Html Template</title>

    <!-- Theme style CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="background-transparent">

<!-- Header Top Area -->
<div class="header_top_area">
    <div class="container">
        <div class="header_top_inner d-sm-flex justify-content-sm-between">
            <ul class="left_info">
                <li><a href="{{URL('/')}}">Home</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <ul class="header_social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-vine"></i></a></li>
                <li><a href="#" class="shop_btn"><i class="flaticon-shopping-bag"></i> <span>0</span></a></li>
                <li><a href="{{URL('/cart')}}" class="quote_btn">Cart {{Cart::count()}}<i class="fa fa-cart"></i></a></li>
                <li><a href="{{URL('/cart_clear')}}" class="quote_btn">Clear cart<i class="fa fa-cart"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<center><h1>UNIVERSITY OF LAGOS</h1>
    <h2>DEPARTMENT OF SYSTEMS ENGINEERING</h2>
    <p>CHIJIOKE OGBONNA</p>
    <p>Matric No - 199047003</p>
</center>