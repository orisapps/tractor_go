<!DOCTYPE html>
<html lang="en">

@include('userdashboard.inc.header')

<body translate="no">

<main ng-app="homeApp" ng-controller="homeCtrl" ng-cloak ng-init="display_data()">
    <div class="darker"></div>
@include('userdashboard.inc.nav')


    <div class="container home_" ng-switch on="section" ng-class="{forward: direction, backward:!direction}">
        <div class="animate-switch" ng-switch-default>
          @include('partials.errors')
        @include('partials.success')
<div class="row">


    <div class="home_centralise">
        <div class="text-center home_mgr_wrap"><span class="home_tagline">My Farmers</span>
        </div>
        <div class="details_wrap">
            <div class="container">
              <div class="prof">
                @if ($viewaddfarmer->count() )
            @foreach ($viewaddfarmer as $farmer)  <ul>
			<li>
				<a  href="#{{$farmer->phone}}" class="accordion-trigger" data-accord-group="group1"></strong>  {{$farmer->firstname}} {{$farmer->lastname}}</a>
				<div id="{{$farmer->phone}}" class="accordion-content collapsed">

              <ul class="list-group list-group-flush">

              <p class="list-group-item"><strong style=" text-transform:uppercase;">Email:</strong>   {{$farmer->email}}</p>
              <p class="list-group-item"><strong style=" text-transform:uppercase;">Farm Name:</strong>   {{$farmer->farm_name}}</p>
              <p class="list-group-item"><strong style=" text-transform:uppercase;">Mobile Number:</strong>  {{$farmer->phone}}</p>

              <p class="list-group-item"><strong style=" text-transform:uppercase;">Date Created:</strong> {{$farmer->created_at}}</p>

            </ul>

				</div>

			</li>

		</ul>@endforeach
  </div>



<script type="text/javascript" src="{{asset('assets/user/js/QuickAccord.js')}}"></script>
		<script type="text/javascript">
			$(".accordion-trigger").QuickAccord();
		</script>

      <div class="pull-right" style="margin-top:-30px;">{{ $viewaddfarmer->links() }}</div>
    @else
      <div class="alert alert-danger"style="text-align:center;" role="alert">
   No Record Found!
 </div>
       @endif
            </div>
        </div>

            @include('layouts.copyright')
        </div>
    </div>
</div>
</div>

@include('homepage_foot_script')
