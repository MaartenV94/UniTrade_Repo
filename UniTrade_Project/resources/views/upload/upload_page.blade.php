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

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
            width: 50%;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: 0 auto;
            font-family: Montserrat, sans-serif;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
            font-family: Montserrat, sans-serif;
        }
        .text_colour
        {
            color: black;
            padding-bottom: 20px;
        }
        .label
        {
            padding-right: 30px;
            display: inline-block;
            width: 200px;
        }
        .field_space
        {
            padding-bottom: 15px;
        }
        .category
        {
            padding-bottom: 25px;
        }
        .file_upload
        {
            padding-bottom: 35px;
        }

    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

    <div class="main-panel">
        <div class="div_div">

            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>

            @endif

            <div class="div_center">

                <h1 class="font_size">Upload a New Product</h1>

                <form action="{{url('/new_upload')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="field_space">
                        <label class="label">Product Title :</label>
                        <input class="text_colour" type="text" name="title" placeholder="Write a title" required="">
                    </div>

                    <div class="field_space">
                        <label class="label">Product Description :</label>
                        <input class="text_colour" type="text" name="description" placeholder="Write a Description" required="">
                    </div>

                    <div class="field_space">
                        <label class="label">Product Price :</label>
                        <input class="text_colour" type="number" name="price" placeholder="Enter a Price" required="">
                    </div>

                    <div class="field_space">
                        <label class="label">Discount Price :</label>
                        <input class="text_colour" type="number" name="discount_price" placeholder="Enter a Discount Price">
                    </div>

                    <div class="field_space">
                        <label class="label">Product Quantity :</label>
                        <input class="text_colour" type="number" min="0" name="quantity" placeholder="Enter Quantity" required="">
                    </div>

                    <div class="field_space category">
                        <label class="label">Product Category :</label>
                        <select class="text_colour" name="category" required="">
                            <option value="" selected="">Add a Category</option>
                            @foreach($cat as $catagory)
                                <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field_space file_upload">
                        <label class="label">Product Image :</label>
                        <input type="file" name="image" required="">
                    </div>

                    <div class="field_space">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

            </div>
            </form>

        </div>
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
</body>
</html>
