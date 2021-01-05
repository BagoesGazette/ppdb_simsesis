<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMKN 2 TRENGGALEK</title>
    <link rel="icon" href=" {{ asset("assets/images/image1.png") }} ">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ public_path("assets/images/image2.png") }}" alt="image" width="100" style="position: absolute;">
            </div>
            <div class="col-md-8 text-center">
                <h6>PEMERINTAH PROVINSI JAWA TIMUR</h6>
                <h6>DINAS PENDIDIKAN</h6>
                <h6>SEKOLAH MENENGAH KEJURUAN NEGERI 2</h6>
                <h5>TRENGGALEK</h5>
                <p style="font-size: 10px">Jln. Ronggowarsito Gg Sidomukti Nomor 01 Telp.(0355) 7690148</p>
                <p style="font-size: 10px; margin-top:-15px">e-mail : <span class="text-primary">smknduatrenggalek@yahoo.co.id</span> || http:\\<span class="text-primary text-underlined"> www.smk2trenggalek.sch.id</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-right" style="margin-top: -20px;">Kode Pos:66315</p>
                <hr size="5" style="margin-top: -10px;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5>CETAK BUKTI PENDAFTARAN</h5>
            </div>
        </div>
    </div>

    <div class="container">
        @if ($status->status === "proses")
        <h5 class="text-center">Data anda masih dalam proses verifikasi</h5>    
        @elseif($status->status === "diterima")
        <h5 class="text-center">Selamat Anda telah diterima di SMKN 2 TRENGGALEK </h5>
        @endif
        
    </div>

    <div class="container">
        <h5 class="text-center">Data Pribadi</h5>
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
        </table>
    </div>

    <div class="container">
        <h5 class="text-center">Data Orang Tua</h5>
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

    <div class="container">
        <h5 class="text-center">Data Sekolah</h5>
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
    </div>

    <div class="container">
        <h5 class="text-center">Data Nilai Semester</h5>
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
        <br>
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
        <br>
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



</body>
</html>