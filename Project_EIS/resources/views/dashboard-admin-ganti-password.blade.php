@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Ganti Password</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('change_password_failed'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Warning! &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_password_failed') }}
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('change_password_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Sukses!! &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_password_success') }}
                </div>
            @endif
            {!! Form::open(['method' => 'POST','action' => ['DashboardController@update'],'class' => 'form-change']) !!}
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="input-group">
                    <span class="input-group-addon text-left" id="basic-addon1"><i
                                class="fa fa-key">&nbsp;</i>Password Lama</span>
                            {!! Form::password('old_password',array('class' => 'form-control','placeholder' => 'Password Lama')) !!}
                        </div>
                        @if ($errors->has('old_password'))
                            <span class="help-block">
                        <strong>{{ $errors->first('old_password') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="input-group">
                    <span class="input-group-addon text-left" id="basic-addon1"><i
                                class="fa fa-key">&nbsp;</i>Password Baru</span>
                            {!! Form::password('password',array('class' => 'form-control','placeholder' => 'Password Baru')) !!}
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="input-group">
                    <span class="input-group-addon text-left" id="basic-addon1"><i
                                class="fa fa-key">&nbsp;</i>Ulangi Password Baru</span>
                            {!! Form::password('password_confirmation',array('class' => 'form-control','placeholder' => 'Ulangi Password Baru')) !!}
                        </div>
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="input-field col s12">
                {!! Form::submit('Ganti Passoword', array('class' => 'btn waves-effect waves-light pjax-form')) !!}
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