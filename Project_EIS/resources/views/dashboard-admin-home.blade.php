@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

<div class="col-md-9">
    <div class="well">
        <h1>Panel Kontrol Akun</h1>
        <hr>
        <p>Hallo, {{ $admin->user->fname .' '.$admin->user->lname }}</p>
        <p>Dari Panel Kontrol Akun, Anda dapat melihat informasi akun Anda, Daftar Seluruh Pemesan, Daftar seluruh paket, dan membuat paket baru Anda.</p>
    </div>
    <div class="well">
        <h1>Informasi Akun</h1>
        <hr>
        <div class="row">
            <div class="col-lg-2">
                <p>Nama Akun</p>
            </div>
            <div class="col-lg-10">: {{ $admin->user->fname . ' ' . $admin->user->lname }}</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p>Email</p>
            </div>
            <div class="col-lg-10">: {{ $admin->user->email }}</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p>Phone</p>
            </div>
            <div class="col-lg-10">: {{ $admin->user->phone }}</div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p>Alamat</p>
            </div>
            <div class="col-lg-10">
                <p>: {{ $admin->address1 }}</p>
                <p>&nbsp; {{  $admin->address2  }}</p>
                <p>&nbsp; {{ $admin->city . ', ' .$admin->postal_code }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <p>Tipe User</p>
            </div>
            <div class="col-lg-10">: Admin</div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <a href="#" class="btn btn-primary btn-block btn-md"><i class="fa fa-wrench">&nbsp;</i>Edit Informasi Akun</a>
            </div>
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