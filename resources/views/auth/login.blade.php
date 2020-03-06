@extends('layouts.app')
@section('title', config('app.websitelogin', 'TractorOnTheGo') )
@section('content')
@include('layouts.loginlayout.loginform')

@include('layouts.loginlayout.footerscript')

@endsection
