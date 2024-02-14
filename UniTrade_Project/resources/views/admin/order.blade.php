<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>

        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }
        .table_deg
        {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }
        .th_deg
        {
            background-color: #6c7293;
        }
        .img_size
        {
            width: 170px;
            height: 140px;
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

            <h1 class="title_deg">All Orders</h1>

            <div style="padding-left: 450px; padding-bottom: 30px">
                <form action="{{url('search')}}" method="get">
                    @csrf
                    <input type="text" style="border-radius: 20px; color: black" name="search" placeholder="Search...">
                    <input type="submit" value="search" class="btn btn-outline-primary">
                </form>
            </div>

            <table class="table_deg">

                <tr class="th_deg">

                    <th style="padding: 10px">Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Phone</th>
                    <th>Product Title</th>
                    <th style="padding: 10px">Quantity</th>
                    <th style="padding: 10px">Price</th>
                    <th style="padding: 10px">Payment Status</th>
                    <th style="padding: 10px">Delivery Status</th>
                    <th style="padding: 10px">Image</th>
                    <th style="padding: 10px">Delivered</th>

                </tr>

                @foreach($order as $order)

                <tr>

                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>£{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}">
                    </td>
                    <td>
                        @if($order->delivery_status=='Processing')

                            <a href="{{url('delivered', $order->id)}}" onclick="return confirm('Are you sure this product is delivered?')" class="btn btn-primary">Delivered</a>

                        @else

                            <p style="color: yellow">Delivered</p>

                        @endif
                    </td>

                </tr>

                @endforeach

            </table>

        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
