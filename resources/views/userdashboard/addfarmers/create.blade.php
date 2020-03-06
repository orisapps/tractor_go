<!DOCTYPE html>
<html lang="en">

@include('layouts.registerlayout.head')

<body translate="no">

  <main>
      <div class="darker"></div>
@include('userdashboard.inc.nav')

<form class="form-horizontal" method="POST" action="{{route('agentsavefarmer')}}">
    {{ csrf_field() }}

    <div class="container home_">
      @include('partials.errors')
        @include('partials.success')
        <div class="animate-switch">
            <div class="row">
                <div id="main_card" class="home_centralise">
                    <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span
                                class="home_tagline">Agent Portal <br> TOG</span>
                    </div>
                    <div class="img_wrap">
                        <div class="image-caption">Register New Farmer</div>
                    </div>

                    <div class="home_btns_wrap">
                        <div class="home_btns_bottom text-center">
                            <input name="email" id="email" type="email" placeholder="Email address"
                                   class="form-control input-md type_of_house location_box"
                                   required="" data-parsley-type="email" data-parsley-trigger="keyup"/>
                            <input name="password" id="password" type="password" placeholder="Password"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-length="[6, 15]" data-parsley-pattern="/^[A-Za-z0-9_@./#*&+-]*$/"
                                   data-parsley-pattern-message="Some characters you entered are not allowed."
                                   data-parsley-length-message="Must be between 6 and 15 characters long."
                                   data-parsley-trigger="keyup"/>


                            <input name="c_password" id="c_password" type="password" placeholder="Confirm Password"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-equalto="#password"
                                   data-parsley-equalto-message="Passwords must match. Please crosscheck."
                                   data-parsley-trigger="keyup"/>
                            <input name="phone" id="phonenumb" type="number" placeholder="Mobile Number"
                                          class="form-control input-md type_of_house location_box" required=""
                                          />
                            <input name="firstname" id="first_name" type="text" placeholder="First Name"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-pattern="^[a-zA-Z ]+$"/>
                            <input name="lastname" id="last_name" type="text" placeholder="Last Name"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-pattern="^[a-zA-Z ]+$"/>

                                   <select name="farm_type"
                                           class="form-control input-md type_of_house minimal" required="">
                                       <option label="Type of Farm" selected disabled>Type of Farm
                                       </option>
                                       <option value="Commercial Farm">Commercial Farm</option>
                                       <option value="Residential Farm">Residential Farm</option>
                                   </select>
                                   <input name="farm_name" id="farm_name" type="text" placeholder="Farm Name"
                                          class="form-control input-md type_of_house location_box" required=""
                                          data-parsley-pattern="^[a-zA-Z ]+$"/>

                                   <select name="farm_location" id="farm_location" type="text"
                                           data-placeholder="Farm Location (select from dropdown)"
                                           class="form-control input-md type_of_house location_box" required=""
                                           data-width="100%"></select>


                                   <textarea name="farmer_bio" id="farmer_bio"
                                             placeholder="Write a brief description about yourself and your farm"
                                             class="form-control input-md type_of_house location_box" rows="4"
                                             cols="50" data-parsley-trigger="keyup" data-parsley-minlength="20"
                                             data-parsley-maxlength="100"
                                             data-parsley-minlength-message="Your bio is too short. Please make it at least 20 characters.."
                                             data-parsley-validation-threshold="10" required=""></textarea>
                               </div>




                            <div id="p_errors" class="bs-callout bs-callout-warning hidden">
                                <div class="alert alert-warning" role="alert">

                                    <p><span class="lnr lnr-warning"></span>&nbsp; This form contains errors. Please
                                        crosscheck your inputs.</p>
                                </div>
                            </div>

                            <button class="form-control input-lg btn-success"
                                    name="home_signup" id="home_signup" type="submit"
                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing...">
                                Register Farmer Now!
                            </button>
                            <hr>



                        </div>

                      @include('layouts.copyright')
                    </div>
                </div>

            </div>
        </div>

    </div>
</form>



</main>
@include('layouts.registerlayout.clusterfooter')
</body>
</html>
