@extends('layout/master')

@section('title')

    Ask Our Alumni

@endsection

@section('content')
    <div class="ask-container">
        <div class="well">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tambahkan Diskusi</h2>
                    <hr>
                </div>
                <div class="col-lg-9">
                    {!! Form::model($ask = new \App\Ask(),['action' => ['AskController@save'],'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('ask_subject') ? 'has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag">&nbsp;</i>Discussion Subject</span>
                                        {!! Form::text('ask_subject',null,['class' => 'form-control', 'placeholder'=> 'Ask Subject' ]) !!}
                                    </div>
                                    @if($errors->has('ask_subject'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ask_subject') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group {{ $errors->has('ask_category') ? 'has-error' : '' }}">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-tag">&nbsp;</i>Category</span>
                                        {!! Form::select('ask_category[]',\App\AskCategory::lists('name','id'),null,['class' => 'form-control' , 'multiple' => true]) !!}
                                    </div>
                                    @if($errors->has('ask_category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('ask_category') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group {{ $errors->has('ask_content') ? 'has-error' : '' }}">
                                {!! Form::label('ask_content','Content') !!}
                                {!! Form::textarea('ask_content',null,['class' => 'tinymce form-control', 'placeholder' => 'Content']) !!}
                                @if($errors->has('ask_content'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('ask_content') }}</strong>
                                        </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-4">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-floppy-o">&nbsp;</i>Save
                                </button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('select2')
    <link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}">
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("select").select2();
        });
    </script>
@endsection

@section('tiny-mce')
    <script src="{{ URL::asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ URL::asset('js/tinymce/jquery.tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.tinymce',
            height: 300,
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
//            relative_urls: true,
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