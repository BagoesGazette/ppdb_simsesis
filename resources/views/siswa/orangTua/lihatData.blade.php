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
                                <li class="breadcrumb-item active">Halaman untuk melihat data orang tua pendaftaran</li>
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
                                    <td>Nama Ayah</td>
                                    <td>: {{ $orangtua->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Status Ayah</td>
                                    <td>: {{ $orangtua->status_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Ayah</td>
                                    <td>: {{ $orangtua->pendidikan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan Ayah</td>
                                    <td>: {{ $orangtua->pekerjaan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan Ayah</td>
                                    <td>: {{ $orangtua->penghasilan_ayah }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Ibu</td>
                                    <td>: {{ $orangtua->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Status Ibu</td>
                                    <td>: {{ $orangtua->status_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan Ibu</td>
                                    <td>: {{ $orangtua->pendidikan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan Ibu</td>
                                    <td>: {{ $orangtua->pekerjaan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Penghasilan Ibu</td>
                                    <td>: {{ $orangtua->penghasilan_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>No Hp Orang Tua</td>
                                    <td>: {{ $orangtua->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Wali</td>
                                    @if ($orangtua->nama_wali === null)
                                    <td>: Data Kosong</td>
                                    @else
                                    <td>: {{ $orangtua->nama_wali }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Pendidikan Wali</td>
                                    @if ($orangtua->pendidikan_wali === null)
                                    <td>: Data Kosong</td>
                                    @else
                                    <td>: {{ $orangtua->pendidikan_wali }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Pekerjaan Wali</td>
                                    @if ($orangtua->pekerjaan_wali === null)
                                    <td>: Data Kosong</td>
                                    @else
                                    <td>: {{ $orangtua->pekerjaan_wali }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Penghasilan Wali</td>
                                    @if ($orangtua->penghasilan_wali === null)
                                    <td>: Data Kosong</td>
                                    @else
                                    <td>: {{ $orangtua->penghasilan_wali }}</td>
                                    @endif
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