<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EIS - @yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.dataTables.min.css') }}">
    @yield('add-css')
</head>
<body>
<header>
    @include('layout/hexa-up')
    <div class="row header-logo">
        <img class="" src="{{ URL::asset('img/EIS_logo_text.gif') }}">
    </div>
    @include('layout/nav-bar')

</header>

<div class="container">
    <div class="row">
        @include('layout/nav-dashboard')
        @yield('content')
    </div>
</div>


<footer>
    @include('layout/eis-footer')
    @include('layout/hexa-down')

    {{--<div class="footer-copyright">--}}
        {{--<p>Copyright &copy; 2016 by <a href="http://fukicorp.id">FUKI Corp</a></p>--}}
    {{--</div>--}}
</footer>
    <script src="{{ URL::asset('js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    @yield('scripts')
</body>
</html>