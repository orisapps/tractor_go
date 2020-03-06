<form  name="login_form" id="login_form" class="form-validation" role="form" data-parsley-validate="">
   {{ csrf_field() }}
    <div class="container home_">
        <div class="animate-switch">
            <div class="row">
                <div class="home_centralise">
                    <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span class="home_tagline">Login to dashboard</span>
                    </div>
                    <div class="img_wrap">
                        <div class="image-caption">Login as a farmer, operator or agent.</div>
                    </div>

                    <div class="home_btns_wrap">
                        <div class="home_btns_bottom text-center">
                            <input name="email" id="email" type="text" placeholder="Email or Operator ID" class="form-control input-md type_of_house location_box" required="" data-parsley-type="email" data-parsley-trigger="keyup" />
                            <input name="password" id="password" type="password" placeholder="Password" class="form-control input-md type_of_house location_box" style="width: 100% !important;" required="" data-parsley-trigger="keyup" />

                            <div class="form-group text-center">
                                          <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                          <label for="remember"> Remember Me</label>
                                      </div>

                            <button class="form-control input-lg btn-success"
                                    name="home_signup" id="home_signup" type="submit"
                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing...">
                                Log In
                            </button><hr>

                            <span>Don't have an account? <a href="{{route('register')}}" ><strong>Register now</strong></a>.</span>
                        </div>


                      @include('layouts.copyright')
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
