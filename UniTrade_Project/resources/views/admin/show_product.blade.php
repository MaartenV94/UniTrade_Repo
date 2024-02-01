<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .center
        {
            margin: auto;
            width: 90%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;

        }
        .font_size
        {
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }
        .img_size
        {
            width: 250px;
            height: 150px;
        }
        .th_colour
        {
            background: #6c7293;
        }
        .th_design
        {
            padding: 17px;
        }

    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="">

            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>

            @endif

            <h2 class="font_size">All Products</h2>

            <table class="center">

                <tr class="th_colour">
                    <th class="th_design">Product Title</th>
                    <th class="th_design">Description</th>
                    <th class="th_design">Quantity</th>
                    <th class="th_design">Category</th>
                    <th class="th_design">Price</th>
                    <th class="th_design">Discount Price</th>
                    <th class="th_design">Product Image</th>
                    <th class="th_design">Edit</th>
                    <th class="th_design">Delete</th>
                </tr>

                @foreach($product as $product)

                <tr>
                    <td>{{$product->title}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->discount_price}}</td>
                    <td>

                        <image class="img_size" src="/product/{{$product->image}}"></image>

                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product', $product->id)}}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')" href="{{url('delete_product', $product->id)}}">Delete</a>
                    </td>
                </tr>

                @endforeach

            </table>

        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
