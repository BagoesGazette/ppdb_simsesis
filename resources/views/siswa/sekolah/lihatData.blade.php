@include('layouts.header')
@include('layouts.page-topbar')
@include('layouts.topnav')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

                <!-- start page title -->
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="page-title-box">
                            <h4 class="font-size-18">Lihat Data</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active">Halaman untuk melihat data sekolah pendaftaran</li>
                            </ol>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <table>
                                <tr>
                                    <td>Asal Sekolah</td>
                                    <td>: {{ $sekolah->asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Sekolah</td>
                                    <td>: {{ $sekolah->nama_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Status Sekolah</td>
                                    <td>: {{ $sekolah->status_sekolah }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Sekolah</td>
                                    <td>: {{ $sekolah->alamat_sekolah }}</td>
                                </tr>
                            </table>
                            <a href="{{ url("/") }}" class="btn btn-block btn-primary mt-2"><i class="ti-back-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@include('layouts.footer')