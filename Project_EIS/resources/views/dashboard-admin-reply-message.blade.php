@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">

        <div class="well">
            <h3>Send Email</h3>
            @if(\Illuminate\Support\Facades\Session::has('email_sended_success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Pengiriman Sukses &nbsp;</strong>
                </div>
            @endif
            {!! Form::open(['action' => ['DashboardController@sendMailReply'],'method' => 'POST']) !!}
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group {{ $errors->has('to') ? 'has-error' : '' }}">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-users">&nbsp;</i>To
                        </span>
                            {!! Form::text('to',$email,['class' => 'form-control']) !!}
                        </div>
                        @if($errors->has('to'))
                            <span class="help-block">
                              <strong>{{ $errors->first('to') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                        <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-balance-scale">&nbsp;</i>Subject
                        </span>
                            {!! Form::text('subject',null,['class' => 'form-control','placeholder' => 'Subject']) !!}
                        </div>
                        @if($errors->has('subject'))
                            <span class="help-block">
                              <strong>{{ $errors->first('subject') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <div class="form-group {{ $errors->has('messages') ? 'has-error' : '' }}">
                        {!! Form::label('messages','Messages') !!}
                        {!! Form::textarea('messages',null,['class' => 'form-control','placeholder' => 'Messages','class' => 'tinymce']) !!}

                        @if($errors->has('messages'))
                            <span class="help-block">
                              <strong>{{ $errors->first('messages') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <button class="btn btn-primary"><i class="fa fa-send">&nbsp;</i>Send</button>
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

