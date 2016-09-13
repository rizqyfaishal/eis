@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Panel Kontrol Akun</h1>
            <form>
                <div class="row">
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
                                <textarea class="form-control" disabled rows="10">{{ $message->message }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <a href="{{ action('DashboardController@messageReply',$message->id) }}" class="btn-primary btn btn-lg"><i class="fa fa-reply">&nbsp;</i>Reply</a>
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