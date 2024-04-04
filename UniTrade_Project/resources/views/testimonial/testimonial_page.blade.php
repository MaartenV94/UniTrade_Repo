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
        .carousel-control-prev i,
        .carousel-control-next i {
        color: #ffffff; 
        font-size: 24px; 
        }
}
    </style>
</head>
<body>
<div class="hero_area">
    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Molly Reid
                                </h5>
                                <h6>
                                    Customer/ Fist Year Student
                                </h6>
                                <p>
                                As a first-year university student, I was thrilled to discover this e-commerce platform 
                                for academic essentials. It has made my life so much easier! The user-friendly interface 
                                allowed me to quickly find and purchase all the textbooks and equipment I needed for my 
                                courses. The convenience of buying and selling academic materials in one place is unmatched. 
                                Not to mention, the affordable prices saved me a ton of money. I can't imagine navigating 
                                through my studies without this invaluable resource. Thank you for making my academic journey 
                                smoother and more enjoyable!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Ethan Jones
                                </h5>
                                <h6>
                                    Customer/ Second Year Student
                                </h6>
                                <p>
                                As a second-year university student, I've found this e-commerce platform to be an essential tool 
                                for managing my academic needs. The seamless browsing experience and comprehensive selection of 
                                academic essentials have made it incredibly convenient to find everything I need for my courses. 
                                Whether it's textbooks, electronics, or study aids, this platform has it all. Plus, the ability 
                                to sell my used materials has helped me declutter my space and earn some extra cash. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Callum Templeman
                                </h5>
                                <h6>
                                    Customer/ Third Year Student
                                </h6>
                                <p>
                                As a third-year university student, I've come to rely heavily on this e-commerce platform for all my
                                academic needs. The platform's intuitive interface and extensive range of products have saved me countless 
                                hours of searching for textbooks and supplies. Being able to access everything I need in one place, 
                                from essential course materials to study aids and electronics, has been a game-changer for my productivity. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
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
