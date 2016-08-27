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