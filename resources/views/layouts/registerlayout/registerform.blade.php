

<!--THE TOG REGISTER FORM INPUT START HERE  -->
<form name="signup_form" id="signup_form" class="form-validation" data-parsley-validate=""
      data-parsley-excluded="[disabled=disabled]">
    <div class="container home_">
        <div class="animate-switch">
            <div class="row">
                <div id="main_card" class="home_centralise">
                    <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span
                                class="home_tagline">Register on TOG</span>
                    </div>
                    <div class="img_wrap">
                        <div class="image-caption">Register as a farmer, operator or agent.</div>
                    </div>

                    <div class="home_btns_wrap">
                        <div class="home_btns_bottom text-center">
                            <input name="email" id="email" type="text" placeholder="Email address"
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
                            <input name="first_name" id="first_name" type="text" placeholder="First Name"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-pattern="^[a-zA-Z ]+$"/>
                            <input name="last_name" id="last_name" type="text" placeholder="Last Name"
                                   class="form-control input-md type_of_house location_box" required=""
                                   data-parsley-pattern="^[a-zA-Z ]+$"/>

                            <div class="cntr">
                                You're registering as <br>
                                <label for="opt0" class="radio">
                                    <input type="radio" name="thing" value="1" id="opt0" class="hidden"
                                           data-id="farmer"/>
                                    <span class="label"></span>a Farmer
                                </label>

                                <label for="opt1" class="radio">
                                    <input type="radio" name="thing" value='2' id="opt1" class="hidden"
                                           data-id="operator"/>
                                    <span class="label"></span>an Operator
                                </label>


                                <br>
                                <div id="checkbox-errors" style="float:left"></div>
                            </div>


                            <div id="block1" class="none" style="display: none;">
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

                            <div id="block2" class="none" style="display: none;">
                                <select name="tractor_type"
                                        class="form-control input-md type_of_house minimal" required="">
                                    <option label="Type of Tractor" selected disabled>Type of Tractor
                                    </option>
                                    <option value="Utility Tractor">Utility Tractor</option>
                                    <option value="Row Crop Tractor">Row Crop Tractor</option>
                                    <option value="Orchard Type">Orchard Type</option>
                                    <option value="Industrial Tractor">Industrial Tractor</option>
                                    <option value="Rotary Tiller">Rotary Tiller</option>
                                    <option value="Half Track Tractor">Half Track Tractor</option>
                                    <option value="Implement Carrier">Implement Carrier</option>
                                </select>
                                <input name="tractor_model" id="tractor_model" type="text"
                                       placeholder="Tractor Model"
                                       class="form-control input-md type_of_house location_box" required=""/>

                                <select name="tractor_location" id="tractor_location"
                                        data-placeholder="Tractor Location (select from dropdown)"
                                        class="form-control input-md type_of_house location_box" required=""
                                        data-width="100%"></select><br>

                                <select name="operator_cluster" id="operator_cluster"
                                        data-placeholder="Operator Cluster (attach to cluster)"
                                        class="form-control input-md type_of_house location_box"
                                        data-width="100%"></select>


                                <input name="mileage" id="mileage" type="number" placeholder="Mileage"
                                       class="form-control input-md type_of_house location_box" required=""/>

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
                                Sign Up
                            </button>
                            <hr>


                            <span>Already have an account? <a href="{{route('login')}}"><strong>Login now</strong></a>.</span>
                        </div>

                      @include('layouts.copyright')
                    </div>
                </div>

            </div>
        </div>

    </div>
</form>
