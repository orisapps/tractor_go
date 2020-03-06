<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/vendor/adminlte/dist/img/avatar04.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ backpack_auth()->user()->firstname }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    {{--  <li class="header">MAIN NAVIGATION</li>--}}
      <li >
        <a href="{{ backpack_url('/dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>

        </a>

      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users" ></i>

          <span>FARMERS</span>
          <span class="pull-right-container">
            <span class="label bg-yellow pull-right">{{$users->count() }}</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> View Farmers</a></li>


        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card" ></i>
 <span>AGENT</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">{{$agents->count() }}</small>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="{{route('agents.index')}}"><i class="fa fa-circle-o"></i> View Agents</a></li>
            <li><a href="{{route('agents.create')}}"><i class="fa fa-circle-o"></i> Add Agent</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-train" ></i>
 <span>OPERATORS</span>
          <span class="pull-right-container">
          <small class="label pull-right bg-red">{{$operators->count() }}</small>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href="{{route('operators.index')}}"><i class="fa fa-circle-o"></i> Operators</a></li>
          <li><a href="{{route('operators.create')}}"><i class="fa fa-circle-o"></i> Add Operator</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-money" ></i>
 <span>TRANSACTIONS</span>
          <span class="pull-right-container">
          <small class="label pull-right bg-blue"></small>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href=""><i class="fa fa-money"></i> Farmers Transactions</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-paper-plane" ></i>

          <span>Send Message</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            </ul>
      </li>



      <li class="treeview">
        <a href="#">
          <i class="fa fa-map-o" ></i>
 <span>CLUSTERS</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green"></small>
          </span>
        </a>
        <ul class="treeview-menu">

          <li><a href=""><i class="fa fa-circle-o"></i> All Clusters</a></li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
