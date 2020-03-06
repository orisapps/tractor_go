<!DOCTYPE html>
<html lang="en">

@include('userdashboard.inc.header')

<body translate="no">

<main ng-app="homeApp" ng-controller="homeCtrl" ng-cloak ng-init="display_data()">
    <div class="darker"></div>
  @include('userdashboard.inc.nav')  

<form name="homeAppForm" class="form-validation" role="form" novalidate>
<div class="container home_" ng-switch on="section" ng-class="{forward: direction, backward:!direction}">
<div class="animate-switch" ng-switch-default>
<div class="row">
  <div class="home_centralise">
     @include('partials.errors')
        @include('partials.success')
      <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span class="home_tagline"> Dashboard</span>
      </div>
      <div class="img_wrap">
          <div class="image-caption">Welcome! <strong>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</strong>. What would you like to do today?</a></div>
      </div>

    @if (Auth::user()->user_type == "1")
<div class="home_btns_wrap">
<div class="home_btns_bottom text-center">
<button class="form-control input-lg btn-success" name="place_order"
value="Place Order" ng-click="next('property-type')"><span
class="lnr lnr-book pull-right"></span>&nbsp; <span
class="pull-left">Place an Order</span></button>


<a href="{{route('hired_tractors')}}" style='margin-top: 10px; color:#fff;' class="form-control input-lg btn-primary"
name="tractors_hired" value="Tractors Hired"><span
class="lnr lnr-cog pull-right"></span>&nbsp; <span class="pull-left">Tractors Hired</span>
</a>


</a>
@if (Auth::user()->attached_cluster == false)
<a href="{{url('joincluster')}}/{{ Auth::user()->id }}/edit" style='margin-top: 10px; color: #fff;' class="form-control input-lg btn-danger"
name="join_cluster" value="Join Cluster"><span
class="lnr lnr-frame-expand pull-right"></span>&nbsp; <span
class="pull-left">Join a Cluster</span></a>
@else
<button  style='margin-top: 10px; color: #c00; font-weight:bold;'  class="form-control input-lg btn-danger"
name="join_cluster" value="Join Cluster" readonly>&nbsp; <span
class="pull-left">You Are Member Of [ {{mb_strtoupper(Auth::user()->attached_cluster)}} ] Cluster </span></button>

@endif

<a href="{{url('/home/all_request_complain')}}" style="margin-top: 10px; background-color: #222; color: #fff; border: 0"
class="form-control input-sm btn-default"
name="ComRequest" value="Complaints & Requests">Complaints & Requests
</a>

</div>

@include('layouts.copyright')
</div>  @endif
@if (Auth::user()->user_type =="2")
<div class="home_btns_wrap">
<div class="home_btns_bottom text-center">
<button class="form-control input-lg btn-success" name="add_tractor"
value="Add Tractor"><span class="lnr lnr-plus-circle pull-right"></span>&nbsp; <span
class="pull-left">Add a Tractor</span></button>

<a onclick="openLogin('signup');">
<button style='margin-top: 10px;' class="form-control input-lg btn-primary"
name="manage_tractors" value="Manage Tractors"><span
class="lnr lnr-cog pull-right"></span>&nbsp; <span class="pull-left">Manage your Tractors</span>
</button>
</a>
<a onclick="openLogin('signup');">
<button style='margin-top: 10px;' class="form-control input-lg btn-danger"
name="join_cluster" value="Join Cluster"><span
class="lnr lnr-frame-expand pull-right"></span>&nbsp; <span
class="pull-left">Join a Cluster</span>
</button>
</a>
              <a onclick="openLogin('signup');">
                  <button style='margin-top: 10px;' class="form-control input-lg btn-info"
                          name="manage_orders" value="Manage Orders"><span class="lnr lnr-menu pull-right"></span>&nbsp; <span
                              class="pull-left">Manage Orders</span>
                  </button>
              </a>
              <a onclick="openLogin('signup');">
                  <button style='margin-top: 10px;' class="form-control input-lg btn-default"
                          name="view_transactions" value="View Transactions"><span class="lnr lnr-layers pull-right"></span>&nbsp; <span
                              class="pull-left">View all Transactions</span>
                  </button>
              </a>

    <a href="{{url('/home/all_request_complain')}}" style="margin-top: 10px; background-color: #222; color: #fff; border: 0"
class="form-control input-sm btn-default"
name="ComRequest" value="Complaints & Requests">Complaints & Requests
</a>
          </div>

            @include('layouts.copyright')
      </div>  @endif

  @if (Auth::user()->user_type=="5")

      <div class="home_btns_wrap">
          <div class="home_btns_bottom text-center">
<a href="{{route('createfarmers')}}" style="text-decoration:none; color:#fff;"class="form-control input-lg btn-success" name="view_orders"
value="View Assigned Orders"><span
class="lnr lnr-book pull-right"></span>&nbsp; <span
class="pull-left">Add Farmer To Your List</span></a>

<a href="{{route('showmyfarmers')}}" class="form-control input-lg btn-primary" name="view_orders"
value="View Assigned Orders"><span
class="lnr lnr-book pull-right"></span>&nbsp; <span
class="pull-left">My Farmers</span></a>


<a href="{{route('hired_transaction')}}"style='margin-top: 10px;' class="form-control input-lg btn-secondary"
name="view_transactions" value="View Transactions"><span class="lnr lnr-layers pull-right"></span>&nbsp; <span
class="pull-left">My Farmers Transactions</span>
</a>


              <input style="margin-top: 10px; background-color: #222; color: #fff; border: 0"
                     class="form-control input-sm btn-default"
                     name="complaints" value="Complaints & Requests" type="button"/>
          </div>

        @include('layouts.copyright')
      </div>

  @endif
  </div>
</div>
</div>


<div class="animate-switch" ng-switch-when="property-type">
<div ng-show="loaded" ng-include="'/templates/property_type.html'" onload="loaded = true"></div>
</div>
<div class="animate-switch" ng-switch-when="farmers-profile">
<div ng-show="loaded" ng-include="'/templates/farmer_profile.html'" onload="loaded = true"></div>
</div>
<div class="animate-switch" ng-switch-when="service-type">
<div ng-show="loaded" ng-include="'/templates/service_type.html'" onload="loaded = true"></div>
</div>
<div class="animate-switch" ng-switch-when="order-summary">
<div ng-show="loaded" ng-include="'/templates/order_summary.html'" onload="loaded = true"></div>
</div>
<div class="animate-switch" ng-switch-when="join_cluster">
<div ng-show="loaded" ng-include="'/templates/join_cluster.php'" onload="loaded = true"></div>
</div>
</div>
</form>
@include('homepage_foot_script')
