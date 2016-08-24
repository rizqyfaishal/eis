<!doctype html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EIS - @yield('title')</title>
</head>
<body>
<header>
    @include('layout/hexa-up')

    <div class="row header-logo">
        <img class="" src="{{ URL::asset('img/EIS_logo_text.gif') }}">
    </div>
    @include('layout/nav-bar')

</header>

    @yield('content')

<footer>
    @include('layout/eis-footer')
    @include('layout/hexa-down')

    <div class="footer-copyright">
        <p>Copyright &copy; 2016 by <a href="http://fukicorp.id">FUKI Corp</a></p>
    </div>
</footer>

</body>
</html>