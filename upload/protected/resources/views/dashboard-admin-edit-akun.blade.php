@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Informasi Akun</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('change_akun_failed'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Warning! &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_akun_failed') }}
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('change_akun_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Sukses!!
                        &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('change_akun_success') }}
                </div>
            @endif
            {!! Form::model($admin,['method'=>'PATCH','action' => ['AdminController@update']]) !!}
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('fname') ? 'has-error'  : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user">&nbsp;</i> First Name
                            </span>
                            {!! Form::text('fname',is_null($admin->user) ? '' : $admin->user->fname,['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                        </div>
                        @if($errors->has('fname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('lname') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-leaf">&nbsp;</i> Last Name
                                </span>
                            {!! Form::text('lname',is_null($admin->user) ? null : $admin->user->lname,['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                        </div>
                        @if($errors->has('lname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('email') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope">&nbsp;</i> Email
                                    </span>
                            {!! Form::text('email',is_null($admin->user) ? null : $admin->user->email,['class' => 'form-control', 'placeholder' => 'Email']) !!}
                        </div>
                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('phone') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone">&nbsp;</i> Phone
                                    </span>
                            {!! Form::text('phone',is_null($admin->user) ? null : $admin->user->phone,['class' => 'form-control', 'placeholder' => 'Phone']) !!}
                        </div>
                        @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('address1') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker">&nbsp;</i> Address 1
                                    </span>
                            {!! Form::text('address1',null,['class' => 'form-control', 'placeholder' => 'Address 1']) !!}
                        </div>
                        @if($errors->has('address2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address1') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('address2') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker">&nbsp;</i> Address 2
                                    </span>
                            {!! Form::text('address2',null,['class' => 'form-control', 'placeholder' => 'Address 2']) !!}
                        </div>
                        @if($errors->has('address2'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address2') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('city') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-o">&nbsp;</i> City
                                    </span>
                            {!! Form::text('city',null,['class' => 'form-control', 'placeholder' => 'City']) !!}
                        </div>
                        @if($errors->has('city'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('postal_code') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope-square">&nbsp;</i> Postal Code
                                    </span>
                            {!! Form::text('postal_code',null,['class' => 'form-control', 'placeholder' => 'Postal Code']) !!}
                        </div>
                        @if($errors->has('postal_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('postal_code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('description') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-file-text">&nbsp;</i> Description
                                    </span>
                            {!! Form::textarea('description',null,['class' => 'form-control', 'placeholder' => 'Description']) !!}
                        </div>
                        @if($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-primary btn-lg">
                        <i class="fa fa-pencil">&nbsp;</i> Update
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