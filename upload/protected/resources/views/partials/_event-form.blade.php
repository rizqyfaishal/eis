<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-pencil">&nbsp;</i>
                                    Judul Acara
                                </span>
                {!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Title']) !!}
            </div>
            @if($errors->has('title'))
                <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('event_date') ? 'has-error' : '' }}">
            <div class='input-group date datetimepicker'>
                    <span class="input-group-addon">
                          <span class="fa fa-calendar">&nbsp;</span> Event Date
                    </span>
                {!! Form::text('event_date',null,['class' => 'form-control','placeholder' => 'Event Date',]) !!}
            </div>
            @if($errors->has('event_date'))
                <span class="help-block">
                                <strong>{{ $errors->first('event_date') }}</strong>
                            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('event_location') ? 'has-error' : '' }}">
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-map-marker">&nbsp;</i>Location
                            </span>
                {!! Form::text('event_location',null,['class' => 'form-control','placeholder' => 'Event Location']) !!}
            </div>
            @if($errors->has('event_location'))
                <span class="help-block">
                                <strong>{{ $errors->first('event_location') }}</strong>
                            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-image">&nbsp;</i>Image Header
                            </span>
                {!! Form::file('thumbnail',['class' => 'form-control','placeholder' => 'Image Header']) !!}
            </div>
            @if($errors->has('thumbnail'))
                <span class="help-block">
                                <strong>{{ $errors->first('thumbnail') }}</strong>
                            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
            {!! Form::label('body') !!}
            {!! Form::textarea('body',null,['class' => 'tinymce']) !!}
            @if($errors->has('body'))
                <span class="help-block">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <button type="submit" class="btn btn-lg btn-primary"><i class="fa fa-floppy-o">&nbsp;</i>Save</button>
    </div>
</div>