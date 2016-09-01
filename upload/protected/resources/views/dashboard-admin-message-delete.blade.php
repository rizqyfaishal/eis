@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Panel Kontrol Akun</h1>
            <form method="POST" action="{{ action('MessageController@delete',$message->id) }}">
                {{ csrf_field() }}
                <div class="row">
                    <input type="hidden" name="method" value="DELETE">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user">&nbsp;</i>
                                    From
                                </span>
                                <input type="text" disabled value="{{ $message->name_from }} ( {{ $message->email_from }} )" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-file-text">&nbsp;</i>
                                    Message
                                </span>
                                <textarea class="form-control" disabled>{{ $message->message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-trash">&nbsp;</i>Hapus</button>
                    </div>
                </div>
            </form>
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
@endsection