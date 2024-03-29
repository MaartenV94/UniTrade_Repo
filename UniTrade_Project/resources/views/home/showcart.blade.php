<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('public/home/css/styles.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <style>

        .center
        {
            margin: auto;
            width: 70%;
            text-align: center;
            padding: 30px;
            padding-left: 100px;
        }

        table,th,td
        {
            border: 1px solid black;
            padding: 20px;
            width: 100%;
        }

        .th_deg
        {
            font-size: 20px;
            padding: 20px;
            background: #2f99e0;
            color: #fafafa;
        }

        .img_deg
        {
            height: 190px;
            width: 230px;
        }

        .total_deg
        {
            font-size: 20px;
            padding: 40px;
        }

    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->
    <div class="heading_container heading_center">
        <h2>
            Cart
        </h2>
    </div>

    @if(session()->has('message'))

        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}

        </div>

    @endif

<div class="center">

    <table style="border-radius: 20px">

        <tr>
            <th class="th_deg">Product Title</th>
            <th class="th_deg">Product Quantity</th>
            <th class="th_deg">Price</th>
            <th class="th_deg">Image</th>
            <th class="th_deg">Action</th>
        </tr>

        <?php $totalprice = 0;  ?>

        @foreach ($cart as $cart)

        <tr>
            <td>{{$cart->product_title}}</td>
            <td>{{$cart->quantity}}</td>
            <td>£{{$cart->price}}</td>
            <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
            <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to remove this product?')" href="{{url('remove_cart', $cart->id)}}">Remove</a></td>
        </tr>

            <?php $totalprice = $totalprice + $cart -> price  ?>

        @endforeach

    </table>

    <div>

        <h3 class="total_deg">Total Price: £{{$totalprice}}</h3>

    </div>

    <div>

        <h3 style="font-size: 25px; padding-bottom: 15px">Proceed to checkout</h3>

        <a href="{{url('cash_order')}}" class="btn btn-primary">Cash on Delivery</a>
        <a href="{{url('stripe', $totalprice)}}" class="btn btn-primary">Pay With Card</a>

    </div>

</div>

<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">UniTrade</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">UniTrade</a>

    </p>
</div>
<!-- jQery -->
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
</body>
</html>
