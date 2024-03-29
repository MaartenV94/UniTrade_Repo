<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <base href="/public">
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

</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->


<div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width: 50%; padding: 30px">

        <div class="img-box" style="width: 100%; max-width: 500px; margin: auto;">
            <img src="product/{{$product->image}}" alt="" style="width: 100%; max-height: 600px;">
        </div>
        <br>
        <div class="detail-box" >
            <h5>
                {{$product->title}}
            </h5>
            <br>

            @if($product->discount_price!=null)

                <h6 style="color: #2f99e0">
                    Discount Price
                    <br>
                    £{{$product->discount_price}}
                </h6>

                <h6 style="text-decoration: line-through; color: red">
                    Price
                    <br>
                    £{{$product->price}}
                </h6>

            @else

                <h6 style="color: #2f99e0">
                    Price
                    <br>
                    £{{$product->price}}
                </h6>

            @endif

            <h6>Product Category: {{$product->category}}</h6>

            <h6>Description: {{$product->description}}</h6>

            <h6>Available Quantity: {{$product->quantity}}</h6>

            <form action="{{url('add_cart',$product->id)}}" method="POST">
                @csrf

                <div class="row" style="padding-top: 20px">
                    <div class="col-md-4" style="padding-right: 210px">
                        <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" value="Add To Cart">
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

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
