@extends('layout/dashboard-master-long')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-12">
        <a href="{{ action('DashboardController@createEvent') }}">
            <div class="text-center well">
                <h3><b>+ Create New Post Event</b></h3>
            </div>
        </a>
    </div>
    <div class="col-md-12">
        <div class="well">
            @if(\Illuminate\Support\Facades\Session::has('event_created'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Sukses!!
                        &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('event_created') }}
                </div>
            @endif
                @if(\Illuminate\Support\Facades\Session::has('event_updated'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>Sukses!!
                            &nbsp;</strong>{{ \Illuminate\Support\Facades\Session::get('event_updated') }}
                    </div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('event_deleted'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <strong>Deleted!!
                            &nbsp;</strong>
                    </div>
                @endif
        </div>
        <div class="well">
            <h1>Events Manager</h1>
            <hr>
            <div class="panel panel-default">
                <table id="event_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Time Created</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($event->created_at)->toDayDateTimeString() }}</th>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->event_location }}</td>
                            <td>{{ \Carbon\Carbon::parse($event->event_date)->toDayDateTimeString() }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ action('EventController@show',$event->id) }}">
                                    <i class="fa fa-eye">&nbsp;</i>Open
                                </a>

                                <a href="{{ action('EventController@edit',$event->id) }}" class="btn btn-warning">
                                    <i class="fa fa-pencil">&nbsp;</i>Edit
                                </a>
                                <a href="{{ action('DashboardController@eventDeleteConfirm',$event->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash">&nbsp;</i>Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#myTabs a').click(function (e) {
                e.preventDefault()
                $(this).tab('show')
            });
        });
    </script>
    <!-- start jquery data table -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#event_id').DataTable();
        });
    </script>
@endsection