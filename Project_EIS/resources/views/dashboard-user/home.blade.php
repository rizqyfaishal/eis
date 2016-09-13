@extends('layout.dashboard-user-master')

@section('title')

    Dashboard User

@endsection

@section('content')

    <div class="col-md-9">
        <div class="well">
            <h1>Panel Kontrol Akun</h1>
            <hr>
            <p>Hallo, {{ $user->fname .' '.$user->lname }}</p>
            <p>Anda Login Sebagai {{ substr($user->user_type,4) }}</p>
        </div>
        <div class="well">
            <h1>Informasi Akun</h1>
            <hr>
            <div class="row">
                <div class="col-lg-2">
                    <p>Nama Akun</p>
                </div>
                <div class="col-lg-10">: {{ $user->fname . ' ' . $user->lname }}</div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p>Email</p>
                </div>
                <div class="col-lg-10">: {{ $user->email }}</div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p>Phone</p>
                </div>
                <div class="col-lg-10">: {{ $user->phone }}</div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <p>Tipe User</p>
                </div>
                <div class="col-lg-10">: {{ substr($user->user_type,4) }}</div>
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
@endsection