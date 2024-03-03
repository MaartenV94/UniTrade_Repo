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

</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>Products</span>
                </h2>
            </div>

            <div style="display: flex; justify-content: center;">
                <form action="{{url('product_page_search')}}" method="GET">
                    @csrf
                    <input style="width: 500px" type="text" name="search" placeholder="Search for Products">
                    <input type="submit" value="search">
                </form>
            </div>

            <div class="row">

                @foreach($product as $products)

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{url('product_details',$products->id)}}" class="option1">
                                        View Details
                                    </a>
                                    <form action="{{url('add_cart',$products->id)}}" method="POST">
                                        @csrf

                                        <div class="row" style="padding-top: 20px">
                                            <div class="col-md-4">
                                                <input type="number" name="quantity" value="1" min="1" style="width: 100px">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" value="Add To Cart">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="product/{{$products->image}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5 style="font-size: 15px">
                                    {{$products->title}}
                                </h5>

                                @if($products->discount_price!=null)

                                    <h6 style="color: #2f99e0; font-size: 15px">
                                        Discount Price
                                        <br>
                                        £{{$products->discount_price}}
                                    </h6>

                                    <h6 style="text-decoration: line-through; color: red; font-size: 15px">
                                        Price
                                        <br>
                                        £{{$products->price}}
                                    </h6>

                                @else

                                    <h6 style="color: #2f99e0">
                                        Price
                                        <br>
                                        £{{$products->price}}
                                    </h6>

                                @endif

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>

<!-- footer start -->
@include('home.footer')
<!-- footer end -->
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
