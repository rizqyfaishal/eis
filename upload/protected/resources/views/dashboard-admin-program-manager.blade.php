@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <a href="{{ action('DashboardController@createProgram') }}">
            <div class="text-center well">
                <h3><b>+ Create New Post Program</b></h3>
            </div>
        </a>
    </div>
    <div class="col-md-9">

        <div class="well">

            <h1>Programs Manager</h1>
            <hr>
            @if(\Illuminate\Support\Facades\Session::has('program_created'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Program Created</strong>
                </div>
            @endif
            @if(\Illuminate\Support\Facades\Session::has('program_edited'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <strong>Program Edited</strong>
                </div>
            @endif
            <div class="panel panel-default">
                <table id="program_id" class="display table table-hover table striped">
                    <thead>
                    <tr>
                        <th>Time</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($programs as $program)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($program->created_at)->toDayDateTimeString() }}</th>
                            <td>{{ $program->title }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ action('ProgramController@show',$program->id) }}">
                                    <i class="fa fa-eye">&nbsp;</i>View
                                </a>
                                <a class="btn btn-danger" href="{{ action('ProgramController@showDeleteConfirmation',$program->id) }}">
                                    <i class="fa fa-trash">&nbsp;</i>Delete
                                </a>
                                <a class="btn btn-warning" href="{{ action('ProgramController@edit',$program->id) }}">
                                    <i class="fa fa-pencil">&nbsp;</i>Edit
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
            $('#program_id').DataTable();
        });
    </script>
@endsection