@extends('layout/master')

@section('title')

    Homepage

@endsection

@section('content')
<div class="row whole-content">
    <div class="col-lg-1 col-md-2"></div>

    <div class="content-update col-lg-3 col-md-4 col-sm-12">
        <p class="post-title">EIS Update</p>
        <div class="tweet-eis">
            <a class="twitter-timeline" href="https://twitter.com/eis_UI">Tweets by eis_UI</a>
            <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

        <div>
            <!-- SnapWidget -->
            <br>
            <h4>instagram</h4>
            <script src="https://snapwidget.com/js/snapwidget.js"></script>
            <iframe src="https://snapwidget.com/embed/242414" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
        </div>

        {{--<article class="article">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>--}}
        {{--</article>--}}
    </div>
    <div class="content-ri col-lg-4 col-md-4 col-sm-12">
        <p class="post-title">Column for R&I</p>

        <div class="row">
            <div class="text-center">
                <a href="#"> <h2 class="title-bold"><b>NEW YORK ON CITY</b></h2></a>
                <a href="#"><h2 class="title-bold"><b>NEW YORK AT UI HAS...</b></h2></a>
                <a href="#"><h2 class="title-bold"><b>JAKARTA LIKE NEW YO..</b></h2></a>
                <a href="#"><h2 class="title-bold"><b>NEW YORK AT UI HAS...</b></h2></a>
                <a href="#"><h2 class="title-bold"><b>NEW YORK AT UI HAS...</b></h2></a>
                <br>
                <button class="btn btn-primary">Load more..</button>
            </div>
        </div>

        {{--<article class="article">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>--}}
        {{--</article>--}}
    </div>
    <div class="content-upcoming col-lg-3 col-md-5">
        <p class="post-title">Upcoming Events</p>
        <div class="row">
            <div class="text-center">
                <a href="#"><h3 class="title-bold"><b>NEW YORK AT UI HAS...</b></h3></a>
                <a href="#"><h3 class="title-bold"><b>NEW YORK AT UI HAS...</b></h3></a>
                <a href="#"><h3 class="title-bold"><b>JAKARTA LIKE NEW YO..</b></h3></a>
                <a href="#"><h3 class="title-bold"><b>NEW YORK AT UI HAS...</b></h3></a>
                <a href="#"> <h3 class="title-bold"><b>NEW YORK ON CITY</b></h3></a>
                <br>
                <button class="btn btn-primary">Load more..</button>
            </div>
        </div>
        {{--<article class="article">--}}
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget venenatis leo. Pellentesque luctus justo ultrices metus eleifend semper. Ut volutpat congue est non mollis. Sed dignissim massa vel condimentum tempus. Integer suscipit ex vel pellentesque eleifend. Vivamus sit amet sapien ac mi ultricies varius. Nulla facilisi. Proin lacinia dui nec ligula iaculis, eget gravida dolor tempus. Nam sed ipsum scelerisque, dignissim mauris eget, tempor tellus. Aenean quis diam feugiat, condimentum lorem in, dictum libero. Suspendisse at ex sed risus semper pulvinar a nec urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla quis velit quis malesuada. Donec vulputate malesuada placerat. Phasellus cursus, massa ac blandit placerat, est dui ultrices nunc, vitae porta mi dui nec tortor. Proin leo risus, luctus a luctus ac, fringilla nec est.</p>--}}
        {{--</article>--}}
    </div>

    <div class="col-lg-1 col-md-2 col-sm-1"></div>
</div>
@endsection