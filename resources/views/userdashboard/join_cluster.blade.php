<!DOCTYPE html>
<html lang="en">

@include('layouts.registerlayout.head')

<body translate="no">

  <main>
      <div class="darker"></div>
@include('userdashboard.inc.nav')
<div class="container home_">
  @include('partials.errors')
  @include('partials.success')
    <div class="animate-switch">
  <div class="row">
<form class="form-horizontal" method="POST" action="{{ route('joincluster.update', [Auth::user()->id]) }}">
    {{ csrf_field() }}
    @method('PUT')


                <div id="main_card" class="home_centralise">
                  <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span
                              class="home_tagline">Choose A Cluster</span>
                  </div>
                  <div class="img_wrap">
                      <div class="image-caption">Pick your prefer cluster from the list..</div>
                  </div>

                  <div class="home_btns_wrap">
                      <div class="home_btns_bottom text-center">
                          <input type="hidden" name="method" value="put">



                                 <select name="attached_cluster" id="farm_cluster"
                                         data-placeholder="Attached Cluster (if applicable)"
                                         class="form-control input-md type_of_house location_box"
                                         data-width="100%"></select>



                          <div id="p_errors" class="bs-callout bs-callout-warning hidden">
                              <div class="alert alert-warning" role="alert">

                                  <p><span class="lnr lnr-warning"></span>&nbsp; This form contains errors. Please
                                      crosscheck your inputs.</p>
                              </div>
                          </div>


                           <hr>

                           <button class="form-control input-lg btn-success"
                                   name="home_signup" id="home_signup" type="submit"
                                   data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing...">
                               Update Profile
                           </button>

                           </div>
                            </div>
                          </form>
                          <hr>



                      </div>

@include('layouts.copyright')


            </div>
        </div>

    </div>




</main>
@include('layouts.registerlayout.clusterfooter')
</body>
</html>
