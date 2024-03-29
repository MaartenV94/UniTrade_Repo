<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="full">
                    <div class="logo_footer">
                        <a class="navbar-brand" href="{{url('/')}}"><img width="170" height="100" style="margin-top: -50px" src="images/transparentLogo.png" alt="#" /></a>
                    </div>
                    <div class="information_f">
                        <p><strong>ADDRESS:</strong> 28 Tower road, Aylesbury, Buckinghamshire, UK</p>
                        <p><strong>TELEPHONE:</strong> 0800 484 789</p>
                        <p><strong>EMAIL:</strong> UniTrade@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Menu</h3>
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="{{url('about_page')}}">About</a></li>
                                        <li><a href="{{url('testimonial_page')}}">Testimonial</a></li>
                                        <li><a href="{{url('product_page')}}">Products</a></li>
                                        <li><a href="{{url('contact_page')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget_menu">
                                    <h3>Account</h3>
                                    <ul>
                                        <li><a href="{{url('show_cart')}}">Cart</a></li>
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="widget_menu">
                            <h3>Newsletter</h3>
                            <div class="information_f">
                                <p>Subscribe by our newsletter to get our latest updates.</p>
                            </div>
                            <div class="form_sub">
                                <form>
                                    <fieldset>
                                        <div class="field">
                                            <input type="email" placeholder="Enter Your Mail" name="email" />
                                            <input type="submit" value="Subscribe" />
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
