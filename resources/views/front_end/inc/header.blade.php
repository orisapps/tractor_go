<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>{{ config('app.websitename', 'TractorOnTheGo') }}</title>

    <script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtVa7UEITPJrdU6rrXGbaOltsD70lxhEY&libraries=places"
            async defer></script>

            <script src="{{asset('assets/js/easing.min.js')}}"></script>
            <script src="{{asset('assets/js/hoverIntent.js')}}"></script>
            <script src="{{asset('assets/js/superfish.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
            <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
            <script src="{{asset('assets/js/parallax.min.js')}}"></script>
            <script src="{{asset('assets/js/mail-script.js')}}"></script>
              <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
              <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
            <script src="{{asset('assets/js/main.js')}}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->

    <link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assets/flags/css/flag-icon.css')}}">
</head>
