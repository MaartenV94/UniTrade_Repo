<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{url('/')}}"><img width="160" height="80" src="images/Transparentlogo.png" alt="#" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Info</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('about_page')}}">About</a></li>
                            <li><a href="{{url('testimonial_page')}}">Testimonial</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('product_page')}}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact_page')}}">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/upload_page')}}">Upload</a>
                    </li>

                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    @if (Route::has('login'))

                        @auth

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @else


                            <li class="nav-item">
                                <a class="btn btn-custom btn-outline-primary" style="margin-right: 20px; margin-left: 20px" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-outline-dark" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth

                    @endif

                </ul>
            </div>
        </nav>
    </div>
</header>
