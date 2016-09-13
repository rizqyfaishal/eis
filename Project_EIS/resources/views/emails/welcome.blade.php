@extends('emails.templates.minty')

@section('content')

    @include('emails.templates.minty.contentStart')
    <div class="content" style="padding: 1.5em">
        {!! $content !!}
    </div>
    @include('emails.templates.minty.contentEnd')

@stop