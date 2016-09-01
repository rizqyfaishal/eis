@extends('layout.dashboard-master-long')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-12">
        <a href="{{ action('DashboardController@createArticle').'?type=1' }}">
            <div class="text-center well">
                <h3><b>+ Create New Post R &amp; I</b></h3>
            </div>
        </a>
    </div>
    <div class="col-md-12">
        <div class="well">
            <h1>R &amp; I Manager</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('article_created'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Article Created</strong>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('article_edited'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Article Edited</strong>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('article_deleted'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Article Deleted</strong>
                </div>
            @endif
            <div class="panel panel-default">
                <table id="randi_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <th>{{ \Carbon\Carbon::parse($article->created_at)->toDayDateTimeString() }}</th>
                            <th>{{ $article->title }}</th>
                            <th>{{ $article->snippet }}...</th>
                            <th>
                                <a href="{{ action('ArticleController@show',$article->id) }}" class="btn btn-primary">
                                    <i class="fa fa-eye">&nbsp;</i> View
                                </a>
                                <a href="{{ action('ArticleController@edit',$article->id) }}" class="btn btn-warning">
                                    <i class="fa fa-pencil">&nbsp;</i> Edit
                                </a>
                                <a href="{{ action('DashboardController@articleDeleteConfirm',$article->id) }}"
                                class="btn btn-danger">
                                    <i class="fa fa-trash">&nbsp;</i> Delete
                                </a>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
    <!-- start jquery data table -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#randi_id').DataTable();
        });
    </script>
@endsection