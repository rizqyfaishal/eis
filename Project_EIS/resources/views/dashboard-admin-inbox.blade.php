@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

    <div class="col-md-9">
    <div class="well">
        <h1>Inbox From Contact Us Page</h1>
        <hr>
        <div class="panel panel-default">
            <table id="inbox_id" class="display">
                <thead>
                <tr>
                    <th>Time</th>
                    <th>From</th>
                    <th>Content</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Unread</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Read</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Replied</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Replied</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Replied</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Replied</td>
                </tr>
                <tr>
                    <th scope="row">16/08/2016</th>
                    <td>Luthfi Ab..</td>
                    <td>Halo aku mau nanya tentang..</td>
                    <td>
                        <a href="#">view</a>
                        <a href="#">del</a>
                        <a href="#">reply</a>
                    </td>
                    <td>Replied</td>
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
            $('#inbox_id').DataTable();
        });
    </script>
@endsection