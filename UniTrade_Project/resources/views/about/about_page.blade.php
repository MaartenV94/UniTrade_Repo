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
        .p {
            width: 75%;
            padding-bottom: 30px ;
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
            About Us
        </h2>
        <p class="p">
            At our e-commerce platform, we understand the challenges university 
            students face when it comes to acquiring and disposing of academic 
            equipment, books, electronics, and more. That's why we've created a 
            convenient marketplace tailored specifically for students, allowing 
            them to buy and sell unused items effortlessly. Our platform serves 
            as a hub for students to find academic resources they need for their 
            current modules, while also providing a sustainable solution for 
            those looking to declutter their space. We believe in fostering a 
            community where students can not only alleviate the burden of storing 
            unnecessary items from past courses but also have the opportunity to 
            earn some extra income by selling what they no longer need. Through 
            our platform, students can easily connect with each other, making 
            transactions smoother and fostering a sense of camaraderie among peers.
        </p>
        <p class="p">
            At our core, we're committed to simplifying the process of exchanging 
            academic resources among university students. Whether you're searching 
            for a specific textbook, a piece of equipment for a lab project, or 
            simply looking to upgrade your electronics, our platform offers a diverse 
            range of items to meet your needs. By harnessing the power of online 
            commerce, we aim to empower students to take control of their academic 
            journey while also promoting sustainability through the reuse of resources. 
            Join us in creating a vibrant marketplace where students can thrive 
            academically, financially, and socially. Together, let's build a community 
            where every transaction is a win-win, benefiting both buyers and sellers 
            alike.
        </p>
    </div>

    <!-- why section -->
    @include('home.why')
    <!-- end why section -->

    <!-- arrival section -->
    @include('home.new_arrival')
    <!-- end arrival section -->        
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
<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>

</body>
</html>
