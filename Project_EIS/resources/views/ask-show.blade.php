@extends('layout.master')

@section('content')
    <div class="ask-container">
        <div class="ask-show" ng-app="discussion" ng-controller="DiscussionController" ng-init="id = {{ $ask->id }}">
            <script type="text/ng-template" id="commentForm.html">
                <div class="input-form" >
                    <form method="post"  ng-if="showForm">
                        <input type="hidden" ng-model="$rootScope.token" name="_token" value="{{ csrf_token() }}">
                        <div class="row" >
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="tinymce" ng-model="$parent.replyMessage"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button id="id" style="display: block;float: right;margin-left: 1em;" ng-click="post(id,replyMessage)"
                                            class="btn btn-primary"><i class="fa fa-pencil">&nbsp;</i><span ng-hide="loading">Post</span><span ng-show="loading">Loading...</span></button>
                                    <button type="button" ng-click="showCommentForm(id)" style="display: block;float: right;" class="btn btn-primary">
                                        <i class="fa fa-sign-out">&nbsp;</i>Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <div class="ask-reply-button">
                        <div class="form-group">
                            <button type="button" ng-click="showCommentForm(id)" class="btn btn-primary" ng-hide="showForm">
                                <i class="fa fa-reply">&nbsp;</i>Reply
                            </button>
                        </div>
                    </div>
                </div>
            </script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4><i class="fa fa-question-circle">&nbsp;</i>Discussion</h4></div>
                        <div class="panel-body">
                            <div class="ask-content">
                                <div class="avatar">
                                    <img src="{{ URL::asset('img/user.png') }}" alt="Avatar">
                                </div>
                                <h2 ng-bind="ask.ask_subject"></h2>
                                <h4 ng-bind="ask.author.fname + ' ' + ask.author.lname"></h4>
                                <small class="ask-date" ng-bind="ask.created_at"></small>
                                <hr>
                                <div class="ask-content-body">
                                    <div ng-bind-html="ask.ask_content" class="ask-content-html"></div>
                                    <comment-form id="<% ask.id %>" ask="ask"></comment-form>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ask-comment-input" ng-attr-id="wrapper-<% ask.id %>"></div>
                                    </div>
                                </div>
                                <div class="ask-reply-details">
                                    <div class="reply-count" style="float: left;">
                                        <strong ng-bind="(commentCounts - 1) + ' Comment' + (commentCounts  > 1 ? 's' : '')"></strong>
                                    </div>
                                </div>
                                <hr>
                                <div class="ask-content-2" ng-init="level = 0">
                                    <div class="new-comment-temp">
                                        <comment-list ng-repeat="temp in ask.temp" parent="ask" ask="temp" level="level"></comment-list>
                                    </div>
                                    <div class="comment-panel" ng-repeat="reply in ask.reply">
                                        <comment-list parent="ask" ask="reply" level="level"></comment-list>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('tiny-mce')
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce',
            height: 500,
            menubar: false,
            statusbar: false,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image',
            toolbar2: 'bullist numlist outdent indent | print preview media | forecolor backcolor',
            image_advtab: true,
//            content_css: [
//                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
//                '//www.tinymce.com/css/codepen.min.css'
//            ],
            file_browser_callback : elFinderBrowser,
//            relative_urls: true,
        });

        function elFinderBrowser (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                file: '<?= route('elfinder.tinymce4') ?>',
                title: 'elFinder 2.0',
                width: 900,
                height: 450,
                resizable: 'yes'
            },{
                setUrl: function (url) {
                    win.document.getElementById(field_name).value = url;
                }
            });

            return false;
        }
    </script>
@endsection


@section('codingan-angular')
    <script src="{{ URL::asset('js/angular.min.js') }}"></script>
    <script>
        var app = angular.module('discussion',[],function($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
        })
                .constant('ASK_URL','/ask/')
                .directive('tinymce',function () {
                    return {
                        restrict: 'C',
                        require: 'ngModel',
                        link: function (scope,element,attrs,modelCtrl) {
                            element.tinymce({
                                setup: function (e) {
                                    e.on('change keydown',function () {
                                        modelCtrl.$setViewValue(element.val());
                                        scope.$apply();
                                    })
                                }
                            });
                        }
                    }
                })
                .directive('postButton',function () {
                    return {
                        restrict: 'C',
                        scope: {
                            replyMessage: '@',
                            id: '@'
                        },
                        link: function (scope, element, attr) {

                        }
                    }
                })
                .directive('commentList',function ($sce,$http,ASK_URL) {
                    return {
                        restrict: 'E',
                        templateUrl: '/templates/comment.html',
                        scope: {
                            ask: '=',
                            level: '=',
                            parent: '='
                        },
                        link: function (s,a,e) {
                            s.ask.ask_content = $sce.trustAsHtml(s.ask.ask_content);
                        }
                    }
                })
                .controller('DiscussionController',function ($scope,$q,$http,ASK_URL,$sce,$rootScope) {
                    $scope.id = null;
                    var defer = $q.defer();

                    $http.get(ASK_URL + '{{ $ask->id }}' + '/json').then(function (res) {
                        if(res.status == 200){
                            defer.resolve(res.data);
                        } else {
                            alert("Error");
                        }
                    });

                    $scope.ask_url = ASK_URL;

                    defer.promise.then(function (data) {
                        $scope.ask = data.data;
                        $rootScope.commentCounts = $scope.ask.comments_count;
                        $scope.ask.temp = [];
                        $scope.ask.ask_content = $sce.trustAsHtml($scope.ask.ask_content);
                    });

                })
                .directive('commentForm',function ($templateCache,$http,ASK_URL,$rootScope) {
                    return {
                        restrict: 'E',
                        template: $templateCache.get('commentForm.html'),
                        scope: {
                            id: '@',
                            ask: '='
                        },
                        link: function (scope, elem, attrs) {
                            scope.loading = false;
                            scope.replyMessage = null;
                            scope.showForm = false;
                            scope.showCommentForm = function (id) {
                                scope.showForm = !scope.showForm;
                                scope.replyMessage = null;
                            };
                            scope.post = function (id,replyMessage) {
                                if(replyMessage == null || replyMessage == ''){
                                    alert('Comment must be a value');
                                } else {
                                    scope.loading = true;
                                    var param = $.param({
                                        content: replyMessage,
                                        _token: $rootScope.token
                                    });
                                    $http.post(ASK_URL + id + '/saveComment',param,{
                                        headers: {
                                            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
                                        }
                                    }).success(function (res) {
                                        if(res.status){
                                            scope.replyMessage = null;
                                            scope.ask.temp.unshift(res.data);
                                            $rootScope.commentCounts = $rootScope.commentCounts + 1;
                                            scope.showForm = false;
                                            scope.loading = false;
                                        } else {
                                            window.location.href = res.redirectTo;
                                        }
                                    }).error(function (msg) {
                                        alert('Error found - please reload your browser');
                                    });
                                }


                            }
                        }
                    }
                });
    </script>
@endsection