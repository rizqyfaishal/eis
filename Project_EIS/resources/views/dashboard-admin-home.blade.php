@extends('layout/dashboard-master')

@section('title')

    Dashboard Admin

@endsection

@section('content')

<div class="col-md-9">
    <div class="well">
        <h1>Panel Kontrol Akun</h1>
        <hr>
        <p>Halo, Travel Agent Abata</p>
        <p>Dari Panel Kontrol Akun, Anda dapat melihat informasi akun Anda, Daftar Seluruh Pemesan, Daftar seluruh paket, dan membuat paket baru Anda.</p>
    </div>
    <div class="col-sm-12">
        <a href="#">
            <div class="text-center well"> Buat Paket Baru</div>
        </a>
    </div>
    <!-- <div class="space h50"></div> -->
    <div class="col-sm-6">
        <div class="well">
            <h1>Informasi Akun</h1>
            <hr>
            <p>Nama : Travel Agent Abata</p>
            <p>Email : abata@gmail.com</p>
            <p>No HP : 087884187967</p>
            <p>Direktur : Bapak Anto</p>
            <!-- Ubah ini menuju ke menu Informasi akun -->
            <div class="text-right"><a href="#">Ubah</a></div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="well">
            <h1>Daftar Paket</h1>
            <hr>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Booking No.</th>
                        <th>Package</th>
                        <th>Visa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">P01324</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">P01523</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">P01692</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- More ini akan menuju menu sidebar "Booking Summary" -->
            <div class="text-right"><a href="#">more..</a></div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="well">
            <h1>Daftar Pemesan</h1>
            <hr>
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Booking No.</th>
                        <th>Package</th>
                        <th>Visa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">P01324</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr>
                        <th scope="row">P01523</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>
                    <tr>
                        <th scope="row">P01692</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- More ini akan menuju menu sidebar "Booking Summary" -->
            <div class="text-right"><a href="#">more..</a></div>
        </div>
    </div>
    <div></div>
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