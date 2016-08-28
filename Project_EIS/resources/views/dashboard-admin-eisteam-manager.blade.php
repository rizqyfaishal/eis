@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">

        <div class="well">
            <h1>EIS Team Manager</h1>
            <hr>
            <div class="panel panel-default">
                <table id="program_id" class="display table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">President</th>
                        <th>Name</th>
                        <td>
                            <a href="#">edit</a>
                        </td>
                    </tr>
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