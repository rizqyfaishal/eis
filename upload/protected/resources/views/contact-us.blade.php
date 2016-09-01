@extends('layout/master')

@section('title')

    Contact Us

@endsection

@section('content')
    <div class="row text-center font-avenir-book">
        <h3 class="title-program-page">CONTACT US</h3>
    </div>
    <div class="row">
        <div class="col-lg-6">
            @if(\Illuminate\Support\Facades\Session::has('send_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Success! &nbsp;</strong> Pengiriman Sukses
                </div>
            @endif
            {!! Form::model($message = new \App\Message(),['method' => 'POST', 'action' => ['MessageController@sendMessage'], 'class' => 'form-contact-us']) !!}
                @if(!$authAvailable)
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group {{ $errors->has('email_from') ? 'has-error' : ''}}">
                                {!! Form::label('email_from','Email') !!}
                                {!! Form::email('email_from',null,['class' => 'form-control','placeholder' => 'Email']) !!}
                                @if($errors->has('email_from'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email_from') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group {{ $errors->has('name_from') ? 'has-error' : ''}}">
                                {!! Form::label('name_from','Name') !!}
                                {!! Form::text('name_from',null,['class' => 'form-control','placeholder' => 'Name']) !!}
                                @if($errors->has('name_from'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('name_from') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                @else
                    {!! Form::hidden('email_from',$email) !!}
                    {!! Form::hidden('name_from',$name) !!}
                @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                        {!! Form::label('message','Message') !!}
                        {!! Form::textarea('message',null,['class' => 'form-control','placeholder' => 'Message']) !!}
                        @if($errors->has('message'))
                            <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="form-group">
                        <button class="btn btn-primary btn-lg" type="submit"><i class="fa fa-send">&nbsp;</i>Send</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-lg-6">
            <div class="row">
                <iframe id="maps"
                        frameborder="0" style="border:0" style="margin: 2em 0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAyl5lSDTppcIvICxImY-oDCHyt0dDRdkE
    &q=Fakultas Ekonomi dan Bisnis Universitas Indonesia">
                </iframe>
            </div>
            <div class="row text-center font-avenir-book">
                <div class="row">
                    <p>Gedung Prof. Mr. R. Soenario Kolopaking, 2nd Floor</p>
                </div>
                <div class="row">
                    <p>Jalan Prof. Dr. Soemitro Djojohadikusumo</p>
                </div>
                <div class="row">
                    <p>Depok 16424</p>
                </div>
                <div class="row">
                    <p>(021) 727-2425 ext. 134, 144</p>
                </div>
                <div class="row">
                    <p>eisociety.ui@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection
