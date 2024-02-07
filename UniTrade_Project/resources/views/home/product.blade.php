<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>Products</span>
            </h2>
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

            <span style="padding-top: 20px; padding-left: 550px">

                {!!$product->withQueryString()->links('pagination::bootstrap-4')!!}

            </span>

    </div>
</section>
