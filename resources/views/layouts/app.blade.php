<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.loginlayout.head')
<body>
  <main>

@include('layouts.nav')
<div class="darker"></div>


            @yield('content')
        </main>

</body>
</html>
