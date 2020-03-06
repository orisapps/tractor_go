
<header id="header" id="home">
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" alt="" title=""/></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">


                    <li><a href="#">Jobs</a></li>

                        <li class="menu-has-children"><a href=""><span class="flag-icon flag-icon-ng"></span> Nigeria</a>
                        <ul>
                            <li><a href="#"><span class="flag-icon flag-icon-gh"></span> Ghana</a></li>
                            <li><a href="#"><span class="flag-icon flag-icon-bj"></span> Benin Republic</a></li>
                            <li><a href="#"><span class="flag-icon flag-icon-tg"></span> Togo</a></li>
                            <li><a href="#"><span class="flag-icon flag-icon-cm"></span> Cameroun</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li><a href="#">FAQ</a></li>

                    <li><a class="ticker-btn" href="{{ route('login') }}"><span class="lnr lnr-enter"></span> Login</a></li>
                    <li><a class="ticker-btn" href="{{ route('register') }}"><span class="lnr lnr-user"></span> Sign Up</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header>
