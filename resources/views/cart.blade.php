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
<body class="background-transparent">

<!-- Header Top Area -->
<div class="header_top_area">
    <div class="container">
        <div class="header_top_inner d-sm-flex justify-content-sm-between">
            <ul class="left_info">
                <li><a href="{{URL('/')}}">Home</a></li>
                <li><a href="{{URL('/contact')}}">Contact Us</a></li>
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
<table style="border: 1px solid black; border-collapse: inherit;">
    <colgroup>
        <col span="4" style="background-color:red">

    </colgroup>
    <thead style="text-align: left; padding: 15px;">
    <tr>
        <th style="width:5%">Product</th>
        <th style="width:5%">Price</th>
        <th style="width:5%">Quantity</th>
        <th style="width:12%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead><br/>
    <tbody style="border: 1px solid black;">
        @foreach(Cart::content() as $item)
            <tr>
                <td style="width: 10%; padding: 10px;">
                    <div>
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $item->name }}</h4>
                        </div>
                    </div>
                </td>
                <td>#{{ $item->price }}</td>
                <td>
                    <input type="text" value="{{ $item->qty }}">
                </td>
                <td data-th="Subtotal" class="text-center">#{{ $item->price * $item->qty }}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot style="margin-top: -30px;">
    <tr >
        <td class="hidden-xs text-center"><strong>Total = </strong></td>
        <td class="hidden-xs text-center"><strong></strong></td>
        <td class="hidden-xs text-center"><strong></strong></td>
        <td class="Subtotal"><strong>#{{ Cart::subtotal() }}</strong></td>
    </tr>

    </tfoot>
</table><br>
<form action="{{URL('/submit')}}" method="post">
    {{ csrf_field() }}
    <label for="fname">Input money:</label><br>
    <input type="text" id="total" name="tot"><br><br/>
    <input type="submit" value="Pay">
</form>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-success">
        {{ session()->get('error') }}
    </div>
    @endif