@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Konfirmasi Hapus Artikel</h1>
            <h4>{{ $article->title }}</h4>
            <hr>
            {!! Form::model($article,['method'=>'DELETE','action' => ['ArticleController@delete',$article->id]]) !!}
            <div class="row">
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-danger btn-lg">
                        <i class="fa fa-trash">&nbsp;</i> Delete
                    </button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
@endsection