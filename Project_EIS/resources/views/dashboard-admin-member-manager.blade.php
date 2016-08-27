@extends('layout/dashboard-master-long')

@section('title')

    Dashboard Admin

@endsection

@section('content')
    <div class="col-md-12">
        <div class="well">
            <h1>Members Manager</h1>
        </div>
        <div class="well">
            <h1>Daftar Alumni</h1>
            <hr>
            <div class="panel panel-default">
                <table id="student_table_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Time Join</th>
                        <th>Name</th>
                        <th>Major</th>
                        <th>Batch</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($alumnis as $alumni)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($alumni->created_at)->toDayDateTimeString() }}</th>
                            <td>{{ $alumni->user->fname . $alumni->user->lname }}</td>
                            <td>{{ $alumni->major }}</td>
                            <td>{{ $alumni->batch }}</td>
                            <td>{{ $alumni->user->email }}</td>
                            <td>{{ $alumni->user->phone }}</td>
                            <td>{{ $alumni->user->isAccepted }}</td>
                            <td>
                                <a href="#">accept</a>
                                <a href="#">reject</a>
                                <a href="#">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="well" style="">
            <h1>Future Student</h1>
            <hr>
            <div class="panel panel-default">
                <table id="alumni_table_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Time Join</th>
                        <th>Name</th>
                        <th>NISN</th>
                        <th>School</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fStudents as $fStudent)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($fStudent->created_at)->toDayDateTimeString() }}</th>
                            <td>{{ $fStudent->user->fname . ' ' . $fStudent->user->lname }}</td>
                            <td>{{ $fStudent->student_number }}</td>
                            <td>{{ $fStudent->school }}</td>
                            <td>{{ $fStudent->user->email }}</td>
                            <td>{{ $fStudent->user->phone }}</td>
                            <td>{{ $fStudent->user->isAccepted }}</td>
                            <td>
                                <a href="#">accept</a>
                                <a href="#">reject</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="well" style="">
            <h1>Current Student</h1>
            <hr>
            <div class="panel panel-default">
                <table id="c_student_table_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Time Join</th>
                        <th>FName</th>
                        <th>LName</th>
                        <th>NPM</th>
                        <th>Major</th>
                        <th>Batch</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cStudents as $cStudent)
                        <tr>
                            <th scope="row">{{ \Carbon\Carbon::parse($cStudent->created_at)->toDayDateTimeString() }}</th>
                            <td>{{ $cStudent->user->fname . ' ' . $cStudent->user->lname }}</td>
                            <td>{{ $cStudent->student_number }}</td>
                            <td>{{ $cStudent->major }}</td>
                            <td>{{ $cStudent->batch }}</td>
                            <td>{{ $cStudent->user->email }}</td>
                            <td>{{ $cStudent->user->phone }}</td>
                            <td>{{ $cStudent->user->isAccepted }}</td>
                            <td>
                                <a href="#">accept</a>
                                <a href="#">reject</a>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#alumni_table_id').DataTable();
        });

        $(document).ready(function(){
            $('#student_table_id').DataTable();
        });

        $(document).ready(function(){
            $('#c_student_table_id').DataTable();
        });
    </script>
@endsection