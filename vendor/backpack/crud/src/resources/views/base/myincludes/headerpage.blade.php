<header class="main-header">
  <!-- Logo -->

   <a href="{{ backpack_url('/dashboard') }}" class="logo">
     <!-- mini logo for sidebar mini 50x50 pixels -->
     <span class="logo-mini">{!! config('backpack.base.project_logo') !!}</span>
     <!-- logo for regular state and mobile devices -->
     <span class="logo-lg"><img src="{{asset('assets/img/logo.png')}}" alt="" title=""/></span>
   </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">{{ trans('backpack::base.toggle_navigation') }}</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">




        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="/vendor/adminlte/dist/img/avatar04.png" class="user-image" alt="User Image">
            <span class="hidden-xs">{{ backpack_auth()->user()->firstname }} {{ backpack_auth()->user()->lastname }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="/vendor/adminlte/dist/img/avatar04.png" class="img-circle" alt="User Image">

              <p>
                {{ backpack_auth()->user()->firstname }} {{ backpack_auth()->user()->lastname }}
                <small>Member since {{ backpack_auth()->user()->created_at }}</small>
              </p>
            </li>

            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('backpack.account.info') }}" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">

                <a href="{{ route('backpack.auth.logout') }}" class="btn btn-default btn-flat"><i class="fa fa-btn fa-sign-out"></i>{{ trans('backpack::base.logout') }}</a>
              </div>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>
</header>
