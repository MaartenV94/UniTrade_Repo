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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('public/home/css/styles.css') }}">


    <style>
        .btn-custom {
            background-color: #ffffff;
            border-color: #2f99e0;
            color: #2f99e0; /* Text color */
        }
        .btn-custom:hover {
            background-color: #2f99e0;
            border-color: #2f99e0;
            color: #ffffff; /* Text color */
        }
    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->
    @include('home.slider')
    <!-- end slider section -->
</div>
<!-- why section -->
@include('home.why')
<!-- end why section -->

<!-- arrival section -->
@include('home.new_arrival')
<!-- end arrival section -->

<!-- product section -->
@include('home.product', ['product' => $product])
<!-- end product section -->

<!-- subscribe section -->
@include('home.subscribe')
<!-- end subscribe section -->
<!-- client section -->
@include('home.client')
<!-- end client section -->
<!-- footer start -->
@include('home.footer')
<!-- footer end -->
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">UniTrade</a><br>

        Distributed By <a href="https://themewagon.com/" target="_blank">UniTrade</a>

    </p>
</div>

<script>
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>
    
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
