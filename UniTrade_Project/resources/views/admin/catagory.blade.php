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
        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_colour
        {
            color: black;
        }
        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            /*border: 3px solid white;*/
        }

        .styled-table
        {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table th,
        .styled-table td
        {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .styled-table tbody tr:last-child td
        {
            border-bottom: none;
        }

        .styled-table th
        {
            background-color: #f2f2f2;
        }

        .styled-table td a
        {
            /*display: block;*/
            padding: 8px;
            text-align: center;
            background-color: #dc3545;
            /*color: #fff;*/
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .styled-table td a:hover
        {
            background-color: #c82333;
        }

        .bold-text
        {
            font-weight: bold;
            font-size: 20px;
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

            <div class="div_center">

                <h2 class="h2_font">Add a New Product Category</h2>

                <form action="{{url('/add_catagory')}}" method="POST">

                    @csrf

                    <input class="input_colour" type="text" name="catagory" placeholder="Add a new Category">

                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">

                </form>

            </div>

            <table class="center styled-table">

                <tr>
                    <td class="bold-text">Category Name</td>
                    <td class="bold-text">Action</td>
                </tr>

                @foreach($data as $data)

                <tr>
                    <td>{{$data->catagory_name}}</td>
                    <td>
                        <a onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger" href="{{url('delete_catagory', $data->id)}}">Delete</a>
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
