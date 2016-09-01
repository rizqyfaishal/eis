@extends('layout.master')

@section('content')
    <div class="ask-container">
        <div class="ask-show" ng-app="discussion" ng-controller="DiscussionController">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4><i class="fa fa-question-circle">&nbsp;</i>Discussion</h4></div>
                        <div class="panel-body">
                            <div class="ask-content">
                                <div class="avatar">
                                    <img src="{{ URL::asset('img/user.png') }}" alt="Avatar">
                                </div>
                                <h2 ng-bind="ask.ask_subject">{{ $ask->ask_subject }}</h2>
                                <h4>{{ $ask->author->fname. ' '.$ask->author->lname }} -
                                    <span class="badge">{{ Carbon\Carbon::parse($ask->created_at)->diffForHumans() }}</span>
                                </h4>
                                <hr>
                                <div class="ask-content-body">
                                    {!! $ask->ask_content !!}
                                </div>
                                <div class="ask-content">
                                    <div class="comment-panel">
{{--                                        {!! Form::open !!}--}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script type="text/ng-template" id="commentForm"></script>
        </div>

    </div>
@endsection

@section('codingan-angular')
    <script src="{{ URL::asset('js/angular.min.js') }}"></script>
    <script src="{{ URL::asset('js/angular-script-discussion.js') }}"></script>
@endsection