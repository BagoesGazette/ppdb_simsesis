@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Data Pendaftar</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Selamat Datang dihalaman data pendaftar</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Data Pribadi</h4>
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
                </div>
            </div>
            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Data Sekolah</h4>
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
                    <h4 class="text-center">Data Orang Tua</h4>
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
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Semester 1</h4>
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester1->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester1->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester1->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester1->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester1->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester1->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester1->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester1->rata_rata }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Semester 2</h4>
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester2->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester2->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester2->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester2->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester2->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester2->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester2->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester2->rata_rata }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Semester 3</h4>
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester3->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester3->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester3->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester3->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester3->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester3->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester3->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester3->rata_rata }}</td>
                        </tr>
                    </table>
                </div>  
            </div>

            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <h4 class="text-center">Dokumen</h4>
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
                </div>
            </div>

        </div>

        <a href="{{ route("pendaftar") }}" class="btn btn-primary btn-block">Kembali</a>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@include('admin.layouts.footer')
