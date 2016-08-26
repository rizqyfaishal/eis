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
            <h1>Students</h1>
            <div class="panel panel-default">
                <table id="student_table_id" class="display">
                    <thead>
                    <tr>
                        <th>Time Join</th>
                        <th>FName</th>
                        <th>LName</th>
                        <th>ID</th>
                        <th>Major</th>
                        <th>Batch</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>1406557535</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>Current Student</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>1406557535</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>Future Student</td>
                        <td>accepted</td>
                        <td>
                            -
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>1406557535</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>Current Student</td>
                        <td>rejected</td>
                        <td>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>1406557535</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>Current Student</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>1406557535</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>Current Student</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="well" style="">
            <h1>Alumni</h1>
            <div class="panel panel-default">
                <table id="alumni_table_id" class="display">
                    <thead>
                    <tr>
                        <th>Time Join</th>
                        <th>FName</th>
                        <th>LName</th>
                        <th>Major</th>
                        <th>Batch</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>accepted</td>
                        <td>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">16/08/2016</th>
                        <td>Luthfi</td>
                        <td>Abdurrahim</td>
                        <td>S1</td>
                        <td>Sistem Informasi</td>
                        <td>luthviar.a@gmail.com</td>
                        <td>087884187967</td>
                        <td>-</td>
                        <td>
                            <a href="#">accept</a>
                            <a href="#">reject</a>
                            <a href="#">delete</a>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#alumni_table_id').DataTable();
        });

        $(document).ready(function(){
            $('#student_table_id').DataTable();
        });
    </script>
@endsection