@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Konfirmasi Hapus Akun</h1>
            <h4>{{ $alumni->user->fname. ' ' .$alumni->user->lname }} | {{ $alumni->user->email }}</h4>
            <hr>
            {!! Form::model($alumni,['method'=>'DELETE','action' => ['AlumniController@delete',$alumni->id]]) !!}
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('fname') ? 'has-error'  : '' }}">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-user">&nbsp;</i> First Name
                            </span>
                            {!! Form::text('fname',is_null($alumni->user) ? '' : $alumni->user->fname,['class' => 'form-control', 'placeholder' => 'First Name']) !!}
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
                            {!! Form::text('lname',is_null($alumni->user) ? null : $alumni->user->lname,['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
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
                            {!! Form::text('email',is_null($alumni->user) ? null : $alumni->user->email,['class' => 'form-control', 'placeholder' => 'Email']) !!}
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
                            {!! Form::text('phone',is_null($alumni->user) ? null : $alumni->user->phone,['class' => 'form-control', 'placeholder' => 'Phone']) !!}
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
                    <div class="form-group {{ $errors->has('batch') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker">&nbsp;</i> Batch
                                    </span>
                            {!! Form::text('batch',null,['class' => 'form-control', 'placeholder' => 'Batch']) !!}
                        </div>
                        @if($errors->has('major'))
                            <span class="help-block">
                                <strong>{{ $errors->first('batch') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group {{ $errors->has('major') ? 'has-error'  : '' }}">
                        <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-map-marker">&nbsp;</i> Major
                                    </span>
                            {!! Form::text('major',null,['class' => 'form-control', 'placeholder' => 'MajorA']) !!}
                        </div>
                        @if($errors->has('major'))
                            <span class="help-block">
                                <strong>{{ $errors->first('major') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
          
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