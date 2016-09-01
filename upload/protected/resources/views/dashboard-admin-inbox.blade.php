@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
    <div class="well">
        <h1>Inbox From Contact Us Page</h1>
        <hr>
        @if(\Illuminate\Support\Facades\Session::has('delete_success'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <strong>Delete Sukses! &nbsp;</strong>
            </div>
        @endif
        <div class="panel panel-default">
            <table id="inbox_id" class="display table table-hover table-striped">
                <thead>
                <tr>
                    <th>Time</th>
                    <th>From</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>
                        <th scope="row">{{ Carbon\Carbon::parse($message->created_at)->toDayDateTimeString() }}</th>
                        <td>{{ $message->name_from }} | {{ $message->email_from }}</td>
                        <td>{{ substr($message->message,0,30) }}...</td>
                        <td>{{ $message->status }}</td>
                        <td>
                            <a href="{{ action('DashboardController@messageView',$message->id) }}">view</a>
                            <a href="{{ action('DashboardController@messageDelete',$message->id) }}">del</a>
                            <a href="{{ action('DashboardController@messageReply',$message->id) }}">reply</a>
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
            $('#inbox_id').DataTable();
        });
    </script>
@endsection