<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .font_size
        {
            font-size: 40px;
            padding-bottom: 40px;
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
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
    <!-- partial -->
    <div class="main-panel">
        <div class="div_div">

            @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}

                </div>

            @endif

            <div class="div_center">

                <h1 class="font_size">Add Products</h1>

                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

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
                        @foreach($catagory as $catagory)
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
