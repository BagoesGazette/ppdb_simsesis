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
                                <li class="breadcrumb-item active">Halaman untuk melihat data pribadi pendaftaran</li>
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
                                    <td>NIK</td>
                                    <td>: {{ $dataPribadi->nik }}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>: {{ $dataPribadi->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>: {{ $dataPribadi->nama_lengkap }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>: {{ $dataPribadi->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>: {{ $dataPribadi->tempat_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: {{ $dataPribadi->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>: {{ $dataPribadi->agama }}</td>
                                </tr>
                                <tr>
                                    <td>Golongan Darah</td>
                                    @if ($dataPribadi->golongan_darah === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->golongan_darah }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Tinggi Badan</td>
                                    @if ($dataPribadi->tinggi_badan === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->tinggi_badan }}</td>
                                    @endif
                                <tr>
                                    <td>Berat Badan</td>
                                    @if ($dataPribadi->berat_badan === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->berat_badan }}</td>
                                    @endif
                                <tr>
                                    <td>Status Keluarga</td>
                                    <td>: {{ $dataPribadi->status }}</td>
                                </tr>
                                <tr>
                                    <td>Penyakit</td>
                                    @if ($dataPribadi->penyakit === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->penyakit }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Hobi</td>
                                    @if ($dataPribadi->hobi === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->hobi }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Prestasi</td>
                                    @if ($dataPribadi->prestasi === null)
                                        <td>: Data Kosong</td>
                                    @else
                                        <td>: {{ $dataPribadi->prestasi }}</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Desa</td>
                                    <td>: {{ $dataPribadi->desa }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>: {{ $dataPribadi->kecamatan }}</td>
                                </tr>
                                <tr>
                                    <td>Kabupaten</td>
                                    <td>: {{ $dataPribadi->kabupaten }}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>: {{ $dataPribadi->provinsi }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: {{ $dataPribadi->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>No HP</td>
                                    <td>: {{ $dataPribadi->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td>Jurusan</td>
                                    <td>: {{ $dataPribadi->jurusan }}</td>
                                </tr>
                                <tr>
                                    <td>Foto</td>
                                    <td> <a data-fancybox="gallery" href="{{ asset("assets/images/siswa/". $dataPribadi->image) }}"><img src="{{ asset("assets/images/siswa/". $dataPribadi->image) }}" width="200" height="100"></a></td>
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