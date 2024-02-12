<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo navbar-brand" href=""><img src="images/Transparentlogo2.png" alt="logo" style="width: 140px; height: 50px; padding-right: 40px" /></a>
        <a class="sidebar-brand brand-logo-mini" href=""><img src="images/Transparentlogo2.png" alt="logo" style="width: 80px; height: 30px; padding-right: 10px"/></a>
    </div>
    <ul class="nav">
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/redirect')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_catagory')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                <span class="menu-title">Categories</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/view_product')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">Add Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/show_product')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">View Products</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('order')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                <span class="menu-title">Orders</span>
            </a>
        </li>

    </ul>
</nav>
