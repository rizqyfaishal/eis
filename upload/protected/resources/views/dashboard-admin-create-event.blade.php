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
                @include('partials._event-form')
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