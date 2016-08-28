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
        <div class="form-group {{ $errors->has('snippet') ? 'has-error' : '' }}">
            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-pencil">&nbsp;</i>
                                    Ringkasan Artikel
                                </span>
                {!! Form::textarea('snippet',null,['class' => 'form-control', 'placeholder' => 'Snippet','rows' => 6]) !!}
            </div>
            @if($errors->has('snippet'))
                <span class="help-block">
                                <strong>{{ $errors->first('snippet') }}</strong>
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