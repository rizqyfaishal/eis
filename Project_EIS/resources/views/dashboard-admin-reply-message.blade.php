@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Inbox Reply</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('sending_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Pengiriman Sukses!!
                        &nbsp;</strong>
                </div>
            @endif
            <form method="POST" action="{{ action('MessageController@reply') }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-user">&nbsp;</i>
                                    From
                                </span>
                                <input type="text" name="email_from" value="{{ $email}}" class="form-control" >
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
                                <textarea class="form-control" name="message" placeholder="Message to reply" rows="7"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-reply">&nbsp;</i>Reply</button>
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