<div class="row">
    <button class="form-control input-lg btn-success back-button pull-left"
           name="home_signup" ng-click="back('')"><span class="lnr lnr-chevron-left"></span> Back </button>

    <div ng-hide="loaded"><span class="lnr lnr-sync pull-right">&nbsp;<span style="font-family: 'Rubik', sans-serif">Loading</span></span></div>

    <div class="home_centralise">
                    <div class="text-center home_mgr_wrap" style="margin-bottom: 0 !important;"><span
                                class="home_tagline">Choose A Cluster</span>
                    </div>
                    <div class="img_wrap">
                        <div class="image-caption">Pick your prefer cluster from the list..</div>
                    </div>

                    <div class="home_btns_wrap">
                        <div class="home_btns_bottom text-center">




                                   <select name="farm_cluster" id="farm_cluster"
                                           data-placeholder="Attached Cluster (if applicable)"
                                           class="form-control input-md type_of_house location_box"
                                           data-width="100%"></select>



                            <div id="p_errors" class="bs-callout bs-callout-warning hidden">
                                <div class="alert alert-warning" role="alert">

                                    <p><span class="lnr lnr-warning"></span>&nbsp; This form contains errors. Please
                                        crosscheck your inputs.</p>
                                </div>
                            </div>

                            <button class="form-control input-lg btn-success"
                                    name="home_signup" id="home_signup" type="submit"
                                    data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing...">
                                Submit Now !
                            </button>
                            <hr>



                        </div>

                        <div class="copyright_home text-center">
                            <span>&copy; 2019 TOG Services Limited</span><br>
                            <a href="/privacy">Privacy</a> | <a
                                href="/terms">Terms</a>
                        </div>
                    </div>
                </div>

            </div>
