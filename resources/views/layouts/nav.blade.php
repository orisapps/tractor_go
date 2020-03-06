<nav id="slide-nav" class="navbar navbar-default navbar-custom navbar-static-top" role="navigation">
    <div class="container navbar_home">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/logo.png')}}" width="190"
                                                          height="20"/></a><br>
        </div>

        <div id="slidemenu" class="slidemenu pull-right">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
              



                <li>
                    <a href="#">FAQ</a>
                </li>
                <li><a class="ticker-btn" href="{{ route('login') }}"><span class="lnr lnr-enter"></span> Login</a></li>
                <li><a class="ticker-btn" href="{{ route('register') }}"><span class="lnr lnr-user"></span> Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>
