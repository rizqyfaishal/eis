@extends('layout/master')

@section('title')

    Ask Our Alumni

@endsection

@section('content')
    <div class="col-lg-9">
        <div class="event-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-image-header">
                        <img src="/p/{{ $event->thumbnail->hashcode }}" alt="{{ $event->thumbnail->filename }}">
                    </div>
                    <div class="event-content">
                        <h1>{{ $event->title }}</h1>
                        <hr>
                        <div class="event-content-body">
                            {!! $event->body  !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="event-detail">
            <div class="event-date-time">
                <h3>{{ Carbon\Carbon::parse($event->event_date)->format('D') }}</h3>
                <h4>{{ Carbon\Carbon::parse($event->event_date)->toFormattedDateString()}}</h4>
                <h3><i class="fa fa-clock-o">&nbsp;</i>{{  Carbon\Carbon::parse($event->event_date)->toTimeString() }}</h3>
            </div>
            <div class="event-location">
                <h4><i class="fa fa-map-marker">&nbsp;</i>{{ $event->event_location }}</h4>
            </div>
        </div>
    </div>
@endsection