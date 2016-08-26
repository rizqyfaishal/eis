@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
        <a href="#">
            <div class="text-center well">
                <h3><b>+ Create New Post Program</b></h3>
            </div>
        </a>
    </div>
    <div class="col-md-9">

        <div class="well">
            <h1>EIS Team Manager</h1>
            <hr>
            <div class="panel panel-default">
                <table id="program_id" class="display">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">President</th>
                        <td>Rafi Biagi Sjarif</td>
                        <td><a href="#">change</a></td>
                        <td><a href="#">edit</a></td>
                        <td>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
                            <a href="#">edit</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>NEW YORK ON CITY</td>
                        <td>So, this is the city of am..</td>
                        <td>
                            <a href="#">view</a>
                            <a href="#">del</a>
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