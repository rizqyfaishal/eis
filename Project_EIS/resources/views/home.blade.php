<!doctype html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    <header>
        <div class="hexa-up">
            <img class="" src="{{ URL::asset('img/hexa_up.png') }}">
        </div>

        <div class="row header-logo">
            <img class="" src="{{ URL::asset('img/EIS_logo_text.gif') }}">
        </div>

        <div class="row nav-bar">
            <nav role="navigation">
                <ul class="nav header-ul">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/meet-eis">Meet EIS</a></li>
                    <li><a href="/our-program">Our Program</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                    <li><a href="/ask-our-alumni">Ask Our Alumni</a></li>
                    <li><a href="/social-media">Social Media</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="row whole-content">

        <div class="col-lg-1 col-md-2"></div>

        <div class="content-update col-lg-3 col-md-4 col-sm-12">
            <p class="post-title">EIS Update</p>
            <article class="article">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>
            </article>
        </div>
        <div class="content-ri col-lg-4 col-md-4 col-sm-12">
            <p class="post-title">Column for R&I</p>
            <article class="article">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>
            </article>
        </div>
        <div class="content-upcoming col-lg-3 col-md-5">
            <p class="post-title">Upcoming Events</p>
            <article class="article">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>
            </article>
        </div>

        <div class="col-lg-1 col-md-2 col-sm-1"></div>

    </div>

    <footer>
        <div class="hexa-down">
            <img src="{{ URL::asset('img/hexa_down.png') }}">
        </div>
        <div class="eis-mark">
            <img src="{{ URL::asset('img/eis_mark.png') }}">
        </div>

        <div class="row">
            <p>Copyright &copy; 2016 by <a href="http://fukicorp.id">Fuki Corp</a></p>
        </div>
    </footer>

</body>
</html>