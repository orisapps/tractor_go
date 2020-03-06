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
<form class="form-horizontal" method="POST" action="{{ route('complain_request') }}">
    {{ csrf_field() }}
    


                <div id="main_card" class="home_centralise">
                  <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span
                              class="home_tagline">Request / Complain Box</span>
                  </div>
                  <div class="img_wrap">
                      <div class="image-caption"></div>
                  </div>

                  <div class="home_btns_wrap">
                      <div class="home_btns_bottom text-center">
    

                           <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{Auth::user()->id}}">
                  <input type="hidden" class="form-control" name="email" value="{{Auth::user()->email}}">
                </div>


                   <div class="form-group">
                  <input type="text" class="form-control input-md type_of_house location_box" name="subject" placeholder="Enter Subject">
                </div>

                                 <div>
                  <textarea name="message" class="textarea" placeholder="Enter Message"
                            style="width: 100%; height: 155px; font-size: 17px; color: #000; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>



                          <div id="p_errors" class="bs-callout bs-callout-warning hidden">
                              <div class="alert alert-warning" role="alert">

                                  <p><span class="lnr lnr-warning"></span>&nbsp; This form contains errors. Please
                                      crosscheck your inputs.</p>
                              </div>
                          </div>


                           <hr>

                           <button class="form-control input-lg btn-success"
                                    id="home_signup" type="submit"
                                   data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing...">
                               Submit
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
