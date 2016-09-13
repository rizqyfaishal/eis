@extends('layout/master')

@section('title')

    Ask Our Alumni

@endsection

@section('content')
    <div class="ask-container">
        <div class="well">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Ask Our Alumni</h2>
                    <hr>
                    <p>Forum untuk berdiskusi mengenai kompetisi yang diikuti dan diselenggarakan oleh civitas akademika Fasilkom UI</p>
                </div>
            </div>
        </div>
        <div class="well">
            <div class="row">
                @if(\Illuminate\Support\Facades\Session::has('ask_created'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>Diskusi Telah Ditambahkan</strong>
                    </div>
                @endif
                <div class="col-lg-12">
                    <div class="form-group">
                        <a href="{{ action('AskController@newPost') }}" class="btn btn-primary">
                            <i class="fa fa-pencil">&nbsp;</i> Add Discussion Here
                        </a>
                    </div>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <td>Time Created</td>
                            <td>Discussion</td>
                            <td>Started By</td>
                            <td>Replies</td>
                            <td>Last Post</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($asks as $ask)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($ask->created_at)->toDayDateTimeString() }}</td>
                                <td><a href="{{ action('AskController@show',$ask->id) }}">{{ $ask->ask_subject }}</a></td>
                                <td>{{ $ask->author->email }}</td>
                                <td>{{ $ask->comments_count - 1 }} Comments</td>
                                <td>
                                    @if($ask->reply)
                                        No reply
                                    @else
                                        {{ $ask->reply }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $asks->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection