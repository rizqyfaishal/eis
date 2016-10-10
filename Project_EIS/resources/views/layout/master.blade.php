<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EIS - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">

    @yield('add-css')
</head>
<body>
<div id="logo-ui">
    <img src="{{ URL::asset('img/logo-ui.png') }}" alt="Logo UI" width="180" style="margin-left: 2em; position: absolute;top: 0;left: 2em;">
</div>
<div id="overlay">
    <div class="overlay-content">
        <img src="{{ URL::asset('img/EIS_logo_text.gif') }}" alt="Loader" style="margin: -2em auto;display: block;">
        <h3 class="text-center">Loading ...</h3>
    </div>
</div>
<header>

    @include('layout/hexa-up')
    <div class="container">
        <div class="row header-logo">
            <div class="col-lg-12">
                <img class="" src="{{ URL::asset('img/EIS_logo_text.gif') }}">
            </div>
        </div>
    </div>
    @include('layout/nav-bar')
</header>

    <div class="floating-widget">
        <ul>
            <li><a href="#"><i class="icon-facebook fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="icon-twitter fa fa-twitter-square"></i></a></li>
            <li><a href="#"><i class="icon-google fa fa-google-plus-square"></i></a></li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>

<footer>
    @include('layout/eis-footer')
    @include('layout/hexa-down')

</footer>
    <script src="{{ URL::asset('js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    @yield('scripts')
    @yield('codingan-angular')
    @yield('tiny-mce')
    @yield('select2')
    @yield('stellar')
</body>
</html>