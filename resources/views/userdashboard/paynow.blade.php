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
                  @include('partials.errors')
                  @include('partials.success')
                    <div class="home_centralise">



                      <div class="home_btns_wrap" style="margin-top:160px;">
                        <img src="{{asset('./images/resources/paynow.png')}}"style="margin-bottom:10px;" width="100%" height="70px"/>

                          <div class="home_btns_bottom text-center">
                             <script src="https://js.paystack.co/v1/inline.js"></script>
                              <input   class="form-control input-lg btn-success"

                                     name="home_signup" onclick="payWithPaystack()"

                                     value=" PAYMENT NOW >>"
                                     type="button"/>






                          </div>
                      </div>
                        </div>


                    </div>
                </div>
            </div>

            <script>
              function payWithPaystack(){
                var handler = PaystackPop.setup({
                  key: 'pk_test_5238378cf91dd8bec286f8f94e47dabd262b2328',
                  email: '{{Auth::user()->email}}',
                  amount: "{{ $data}}00",
                  currency: "NGN",
                  ref: "{{$refid}}", // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                  metadata: {
                     custom_fields: [
                        {
                            display_name: "{{Auth::user()->fullname}}",
                            variable_name: "{{Auth::user()->phone}}",
                            value: "{{Auth::user()->phone}}"
                        }
                     ]
                  },
                  callback: function(response){

                    window.location = "/home/farmer_hired_tractors_success/"+ response.reference;

                  },
                  onClose: function(){
                    window.location = "/home/farmer_hired_tractors_failed/"+ response.reference;
                  }
                });
                handler.openIframe();
              }
            </script>



        </div>
    </form>
@include('homepage_foot_script')
