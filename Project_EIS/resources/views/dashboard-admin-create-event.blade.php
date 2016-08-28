@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Create Event</h1>
            <hr>
            {!! Form::model($event = new \App\Event(), ['method' => 'POST','action' => ['EventController@store'],'enctype' => 'multipart/form-data']) !!}
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

@section('date-time-picker')
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}">
    <script src="{{ URL::asset('js/moment-with-locales.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.datetimepicker').each(function (e,k) {
                $(k).datetimepicker({
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    },
                });
            });
        })
    </script>
@endsection

@section('tiny-mce')
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce',
            height: 500,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | link image',
            toolbar2: 'bullist numlist outdent indent | print preview media | forecolor backcolor',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            file_browser_callback : elFinderBrowser,
            relative_urls: true,
        });

        function elFinderBrowser (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                file: '<?= route('elfinder.tinymce4') ?>',
                title: 'elFinder 2.0',
                width: 900,
                height: 450,
                resizable: 'yes'
            },{
                setUrl: function (url) {
                    win.document.getElementById(field_name).value = url;
                }
            });

            return false;
        }
    </script>
@endsection