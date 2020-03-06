<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular-animate.min.js"></script>
<script src="{{asset('resources/js/tog_app.js')}}"></script>

<script>
    var current = 1;
    $('form#house_profile').on('change', '.service_item_no', function (e) {
        $(e.target).next('.service_item').removeAttr('disabled');
    });

    $('#login_form').submit(function(e) {
        e.preventDefault();

        if ($(this).parsley().isValid()) {
            var $this = $('#home_signup');
            $this.button('loading');

            setTimeout(function () {
                $.ajax({
                    url: 'login/user',
                    data: $('#login_form').serialize(),
                    type: 'POST',
                    success: function (data) {
                        console.log(data);
                        var status = data['status'];
                        var msg = data['message'];

                        if (status == 'success') window.location.href = "/home";
                        else if (status == 'error') {
                            var $error = '<div id="p_errors_all" class="bs-callout bs-callout-warning">' +
                                '                                    <div class="alert alert-danger" role="alert">' +
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
