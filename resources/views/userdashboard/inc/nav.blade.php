<nav id="slide-nav" class="navbar navbar-default navbar-custom navbar-static-top" role="navigation">
    <div class="container navbar_home">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}"><img src="{{asset('assets/img/logo.png')}}" width="190"
                                                          height="20"/></a><br>
        </div>

        <div id="slidemenu" class="slidemenu pull-right">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="{{url('/home')}}">DASHBOARD</a>
                </li>

                <li>
                    <a href="/home/user_profile/{{Auth::user()->id}}/edit"><span
                        class="lnr lnr-user pull-left"></span> View Profile </a>
                </li>

                <li>
                    <a
                       href="#" class="top_icons"><strong>Account Type: </strong><strong style="color:blue;">{{Auth::user()->account_type}}</strong>
                        <a href="{{url('/home/logout/user')}}" class="top_icons" style="border-left: 1px solid #ccc;"><span class="lnr lnr-exit"></span>&nbsp;Logout</a></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
