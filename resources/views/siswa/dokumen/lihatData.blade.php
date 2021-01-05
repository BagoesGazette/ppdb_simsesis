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
                                <li class="breadcrumb-item active">Halaman untuk melihat data dokumen pendaftaran</li>
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
                                    <td>Akta Lahir</td>
                                    <td>: <a target="_blank" href="{{ url("assets/images/akta_lahir/".$dokumen->akta_lahir) }}">Lihat Data</a></td>
                                </tr>
                                <tr>
                                    <td>Surat Keterangan Lulus (SKL)</td>
                                    <td>: <a target="_blank" href="{{ url("assets/images/skl/".$dokumen->skl) }}">Lihat Data</a></td>
                                </tr>
                                <tr>
                                    <td>Kartu Keluarga (KK)</td>
                                    <td>: <a target="_blank" href="{{ url("assets/images/kk/".$dokumen->kk) }}">Lihat Data</a></td>
                                </tr>
                                <tr>
                                    <td>Raport</td>
                                    <td>: <a target="_blank" href="{{ url("assets/images/raport/".$dokumen->raport) }}">Lihat Data</a></td>
                                </tr>
                                @if ($dokumen->lainnya === null)
                                    
                                @else
                                <tr>
                                    <td>Dokumen Penjunjang Lainnya</td>
                                    <td><a target="_blank" href="{{ url("assets/images/lainnya/".$dokumen->lainnya) }}">Lihat Data</a></td>
                                </tr>
                                @endif
                            </table>
                            <a href="{{ url("/") }}" class="btn btn-block btn-primary mt-2"><i class="ti-back-left"></i> Kembali</a>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@include('layouts.footer')