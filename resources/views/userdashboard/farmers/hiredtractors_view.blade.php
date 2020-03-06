<!DOCTYPE html>
<html lang="en">

@include('userdashboard.inc.header')

<body translate="no">

<main ng-app="homeApp" ng-controller="homeCtrl" ng-cloak ng-init="display_data()">
    <div class="darker"></div>
@include('userdashboard.inc.nav')


    <div class="container home_" ng-switch on="section" ng-class="{forward: direction, backward:!direction}">
      @include('partials.errors')
        @include('partials.success')
        <div class="animate-switch" ng-switch-default>
<div class="row">


    <div class="home_centralise">
        <div class="text-center home_mgr_wrap"><span class="home_tagline">Transactions History</span>
        </div>
        <div class="details_wrap">
            <div class="container">
 @if ($hiredtractors->count())

     @foreach ($hiredtractors as $hired)
       <div class="ziehharmonika">
   <h3 @if ($hired->transaction_status == "success")
     style="background:green;"
   @endif
     @if ($hired->transaction_status == "failed")
       style="background:red;"
   @endif>

   <span>Total Amount: &#x20A6;{{$hired->amount}}</span> <br>
     <span
       style="float:right; @if ($hired->transaction_status == 'success')
        color:green; background:#ffcd99;
         @else
           background:#292929; color: yellow;
        @endif margin-right: 12px;padding: 5px;text-transform:uppercase;"
      >{{$hired->transaction_status}}</span>
     <br>
     <span style="font-size:13px;">Reference ID: {{$hired->paystack_ref}}<span>
   </h3>
   <div>
     <p><strong style=" text-transform:uppercase;">Reference ID:</strong> {{$hired->paystack_ref}}</p>
     <p><strong style=" text-transform:uppercase;">FARM DETAILS: </strong>{{$hired->building_specification}}</p>
     <p><strong style=" text-transform:uppercase;">OPERATION TYPE: </strong>{{$hired->subscription_title}}</p>
     <p><strong style=" text-transform:uppercase;">DATE: </strong>{{$hired->created_at}}</p>
   </div>


 </div>
        @endforeach


<br>




   <div class="pull-right" style="margin-top:-30px;">{{ $hiredtractors->links() }}</div>
 @else
   <div class="alert alert-danger"style="text-align:center;" role="alert">
No Record Found!
</div>
    @endif
<script src="{{asset('assets/user/ziehharmonika.js')}}"></script>
<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: '★'
		});
	});
</script>

            @include('layouts.copyright')
        </div>
    </div>
</div>
</div>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-animate.min.js"></script>
<script src="{{asset('assets/user/app.js')}}"></script>

<script>
    var current = 1;
    $('form#house_profile').on('change', '.service_item_no', function (e) {
        $(e.target).next('.service_item').removeAttr('disabled');
    });

    var options = {
        minimumInputLength: 1,
        ajax: {
            url: 'https://autocomplete.geocoder.cit.api.here.com/6.2/suggest.json',
            delay: 250,
            dataType: 'json',
            data: function (params) {
                return {
                    query: params.term,
                    app_id: 'nXD9LtvKImo6jjKRHj9M',
                    app_code: 'KxeD2mPjPl-imYy3b1JekQ',
                    beginHighlight: '<b>',
                    endHighlight: '</b>',
                    country: 'NGA'
                };
            },
            processResults: function (data) {
                return {
                    results: $.map(data.suggestions, function (obj) {
                        return {id: obj.label.split(', ').reverse().join(', ').replace(/<\/?[^>]+(>|$)/g, ""), text: obj.label.split(', ').reverse().join(', ')};
                    })
                };
            }
        },
        escapeMarkup: function (markup) {
            return markup;
        }
    };

    var clusters = {
        minimumInputLength: 1,
        ajax: {
            url: '/tractor_clusters.php',
            delay: 200,
            dataType: 'json',
            data: function (params) {
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (obj) {
                        return {id: obj.label, text: obj.label + ' (' + obj.total_count + ' tractors)'};
                    })
                };
            }
        }
    };

    $('#tractor_location, #farm_location').select2(options).on('select2:select', function (e) {
        // event
    });

    $('#operator_cluster, #farm_cluster').select2(clusters).on('select2:select', function (e) {
        // event
    });

    var parsleyConfig = {
        errorsContainer: function (parsleyField) {
            var cntr = parsleyField.$element.closest('div.cntr');

            if (cntr.length > 0) {
                return cntr.find('#checkbox-errors');
            }
            return parsleyField;
        }
    };


    $('#signup_form').submit(function (e) {
        e.preventDefault();
        var ok = $('.parsley-error').length === 0;
        $('#p_errors').toggleClass('hidden', ok);

        if ($(this).parsley(parsleyConfig).isValid()) {
            var $this = $('#home_signup');
            $this.button('loading');

            setTimeout(function () {
                $.ajax({
                    url: '/register/user',
                    data: $('#signup_form').serialize(),
                    type: 'get',
                    success: function (data) {
                        console.log(data);
                        var status = data['status'];
                        var msg = data['message'];
                        var type_thing = data['type'];

                        var $success_card = '<div class="card text-center" style="margin-top: 20px;">' +
                            '                            <div class="card-body">' +
                            '                                <span class="lnr lnr-checkmark-circle" style="font-size: 100px;"></span><br><hr>' +
                            '                            <h4 class="card-title" style="line-height: 24px !important;">You have been successfully registered on TractorOnTheGo <br><br>You will be notified shortly via email and text. We remain committed to bringing you the best value for your Tractors in Nigeria</h4>' +
                            '                                <hr><a href="{{ route('login') }}" class="btn btn-success input-lg" style="font-size: large !important; padding: 10px 12px !important;">Login to Dashboard</a>' +
                            '                            </div>' +
                            '                        </div>';

                        if (status == 'success') $('#main_card').html($success_card);
                        else if (status == 'error') {
                            var $error = '<div id="p_errors_all" class="bs-callout bs-callout-warning">' +
                                '                                    <div class="alert alert-warning" role="alert">' +
                                '' +
                                '                                        <p><span class="lnr lnr-warning"></span>  ' + msg + '</p>' +
                                '                                    </div>' +
                                '                                </div>';


                            if ($('#p_errors_all').length === 0) $('#home_signup').before($error);
                            $this.button('reset');
                        }
                    },
                    error: function (data) {
                        console.log(data);
                        $this.button('reset');
                    }
                });
            }, 3000);

        }
    });

    $("[name=thing]").click(function () {
        $('.none').hide();
        $(".none :input").attr("disabled", true);
        $("#block" + $(this).val()).show();
        $("#block" + $(this).val() + " :input").attr("disabled", false);
    });

    $(function () {
        var toggler = '.navbar-toggle';
        var pagewrapper = '#wrapper';
        var navigationwrapper = '.navbar-header';
        var menuwidth = '100%'; // the menu inside the slide menu itself
        var slidewidth = '80%';
        var menuneg = '-100%';
        var slideneg = '-80%';

        $("#slide-nav").on("click", toggler, function (e) {
            var selected = $(this).hasClass('slide-active');

            $('#slidemenu').stop().animate({
                left: selected ? menuneg : '0px'
            });

            $('#navbar-height-col').stop().animate({
                left: selected ? slideneg : '0px'
            });

            $(pagewrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(navigationwrapper).stop().animate({
                left: selected ? '0px' : slidewidth
            });

            $(this).toggleClass('slide-active', !selected);
            $('#slidemenu').toggleClass('slide-active');


            $('#page-content, .navbar, body, .navbar-header').toggleClass('slide-active');
        });

        var selected = '#slidemenu, #page-content, body, .navbar, .navbar-header';

        $(window).on("resize", function () {
            if ($(window).width() > 767 && $('.navbar-toggle').is(':hidden')) {
                $(selected).removeClass('slide-active');
            }
        });
    });
</script>
</body>
</html>
