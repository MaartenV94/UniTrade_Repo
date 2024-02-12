<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
        <!-- partial -->
    @include('admin.body', [
    'total_product' => $total_product,
    'total_order' => $total_order,
    'total_user' => $total_user,
    'total_revenue' => $total_revenue,
    'total_delivered' => $total_delivered,
    'total_processing' => $total_processing
    ])
<!-- container-scroller -->
<!-- plugins:js -->
    @include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
