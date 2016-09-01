@extends('layout/master')

@section('title')

    Homepage

@endsection

@section('content')
    <div class="row whole-content">
        <div class="content-update col-lg-4 col-md-4 col-sm-12">
            <p class="post-title">EIS Update</p>

            <div>
                <h4><i class="fa fa-instagram">&nbsp;</i>Instagram</h4>
                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                <iframe src="https://snapwidget.com/embed/242414" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
            </div>

            <div class="tweet-eis">
                <h4><i class="fa fa-twitter">&nbsp;</i>Twitter</h4>
                <a class="twitter-timeline" href="https://twitter.com/eis_UI">Tweets by eis_UI</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

        </div>
        <div class="content-ri col-lg-4 col-md-4 col-sm-12">
            <p class="post-title">Column for R&I</p>
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-lg-12">
                       <div class="event-content-list">
                           <h3><a class="text-center text-uppercase" href="{{ action('ArticleController@show',$article->id) }}">{{ $article->title }}</a>
                           </h3>
                       </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="content-upcoming col-lg-4 col-md-5">
            <p class="post-title">Upcoming Events</p>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-12">
                       <div class="event-content-list">
                           <h3><a class="text-center text-uppercase" href="{{ action('EventController@show',$event->id) }}">{{ $event->title }}</a>
                           </h3>
                       </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection