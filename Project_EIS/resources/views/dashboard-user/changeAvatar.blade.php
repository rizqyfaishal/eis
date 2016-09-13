@extends('layout.dashboard-user-master')

@section('title')

    Ganti Password

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Ganti Avatar</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('change_avatar_failed'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Warning! &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_avatar_failed') }}
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('change_avatar_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Sukses!! &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_avatar_success') }}
                </div>
            @endif

            <div class="current-avatar">
                @if(is_null($user->avatar))
                    <div class="avatar-image">
                        <img src="{{ URL::asset('img/user.png') }}" alt="Avatar" width="100">
                    </div>
                @else
                    <div class="avatar-image">
                        <img src="/p/{{ $user->avatar->hashcode }}" alt="Avatar" width="100">
                    </div>
                @endif
            </div>
            {!! Form::open(['method' => 'POST','action' => ['DashboardUserController@gantiAvatarPost'],'class' => 'form-change','enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="input-group">
                    <span class="input-group-addon text-left" id="basic-addon1"><i
                                class="fa fa-clipboard">&nbsp;</i>Upload Avatar</span>
                            {!! Form::file('avatar',array('class' => 'form-control','placeholder' => 'Avatar')) !!}
                        </div>
                        @if ($errors->has('avatar'))
                            <span class="help-block">
                                 <strong>{{ $errors->first('avatar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="input-field col s12">
                {!! Form::submit('Ganti Avatar', array('class' => 'btn waves-effect waves-light pjax-form')) !!}
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