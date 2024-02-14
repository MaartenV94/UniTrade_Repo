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
    <title>UniTrade</title>
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

    <style type="text/css">
        .center
        {
            margin: auto;
            width: 80%;
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
            height: 90px;
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

    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

    <div class="heading_container heading_center">
        <h2>
            Orders
        </h2>
    </div>
    <div class="center">

        <table>

            <tr>
                <th class="th_deg">Product Title</th>
                <th class="th_deg">Quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Payment Status</th>
                <th class="th_deg">Delivery Status</th>
                <th class="th_deg img_deg">Image</th>
                <th class="th_deg">Cancel Order</th>
            </tr>

            @foreach ($order as $order)
            <tr>
                <td>{{$order->product_title}}</td>
                <td>{{$order->quantity}}</td>
                <td>{{$order->price}}</td>
                <td>{{$order->payment_status}}</td>
                <td>{{$order->delivery_status}}</td>
                <td>
                    <img height="180" width="180" src="product/{{$order->image}}">
                </td>

                <td>
                    @if($order -> delivery_status == 'Processing')

                    <a onclick="return confirm('Are you sure you want to cancel this order?')" class="btn btn-danger" href="{{url('cancel_order', $order->id)}}">Cancel Order</a>

                    @else

                        <p>Not Allowed</p>

                    @endif
                </td>
            </tr>
            @endforeach
        </table>

    </div>

<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">UniTrade</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">UniTrade</a>

    </p>
</div>
<!-- jQery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

{{--<script src="home/js/jquery-3.4.1.min.js"></script>--}}
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>


<script>
    $(document).ready(function(){
        $('.nav-item').click(function(){
            $('.nav-item').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

</body>
</html>
