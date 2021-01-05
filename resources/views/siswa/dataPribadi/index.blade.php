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
                        <h4 class="font-size-18">Data Pribadi</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Lengkapi Data Pribadi anda <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span></li>  
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <form action="{{ route("postDataPribadi") }}" method="post" autocomplete="off" enctype="multipart/form-data">@csrf
                            <div class="alert alert-danger">
                                Jika ada tanda <span class="text-danger font-weight-bold">*</span> form wajib diisi
                            </div>
                            <div class="form-group">
                                <label>NIK <span class="text-danger">*</span></label>
                                <input type="text" name="nik" class="form-control" value="{{ old("nik") }}" placeholder="Masukkan NIK anda">
                                @error('nik')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NISN <span class="text-danger">*</span></label>
                                <input type="text" name="nisn" class="form-control" value="{{ old("nisn") }}" placeholder="Masukkan NISN anda">
                                @error('nisn')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" name="nama_lengkap" readonly value="{{ Auth::user()->nama_lengkap }}" class="form-control" placeholder="Masukkan Nama Lengkap anda">
                                @error('nama_lengkap')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin <span class="text-danger">*</span></label>
                                @php
                                    $jenis_kelamin = ["Laki-laki","Perempuan"];
                                @endphp
                                <select name="jenis_kelamin" class="form-control">
                                    <option selected disabled>Pilih Jenis Kelamin anda</option>
                                    @foreach ($jenis_kelamin as $j)
                                        <option value="{{ $j }}" {{ old('jenis_kelamin') == $j ? 'selected' : '' }}>{{ $j }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_kelamin')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{ old("tempat_lahir") }}" placeholder="Masukkan tempat lahir">
                                @error('tempat_lahir')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" value="{{ old("tanggal_lahir") }}" name="tanggal_lahir">
                                @error('tanggal_lahir')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Agama <span class="text-danger">*</span></label>
                                @php
                                    $agama = ["Islam","Kristen Katolik","Kristen Protestan","Hindu","Budha"];
                                @endphp
                                <select name="agama" class="form-control">
                                    <option selected disabled>Pilih Agama anda</option>
                                    @foreach ($agama as $j)
                                        <option value="{{ $j }}" {{ old('agama') == $j ? 'selected' : '' }}>{{ $j }}</option>
                                    @endforeach
                                </select>
                                @error('agama')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Golongan Darah</label>
                                        @php
                                            $golongan = ["A","B","O","AB","Belum Tahu"];
                                        @endphp
                                        <select name="golongan_darah" class="form-control">
                                            <option selected disabled>Pilih Golongan Darah anda</option>
                                            @foreach ($golongan as $j)
                                                <option value="{{ $j }}">{{ $j }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tinggi Badan (cm)</label>
                                        <input type="number" placeholder="Gunakan titik jangan koma" class="form-control" name="tinggi_badan">
                                    </div>
                                </div>
                                <div class="col">
                                    <label>Berat Badan</label>
                                    <input type="number" placeholder="Masukkan berat badan" class="form-control" name="berat_badan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status anda dalam keluarga <span class="text-danger">*</span></label>
                                @php
                                    $status = ["Anak Kandung","Anak Tiri","Anak Angkat"];
                                @endphp
                                <select name="status" class="form-control">
                                    <option selected disabled>Pilih status  anda</option>
                                    @foreach ($status as $j)
                                        <option value="{{ $j }}" {{ old('status') == $j ? 'selected' : '' }}>{{ $j }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Riwayat Penyakit</label>
                                <input type="text" name="penyakit" placeholder="Masukkan riwayat penyakit jika ada" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Hobi</label>
                                <input type="text" name="hobi" placeholder="Masukkan salah satu hobi anda" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Prestasi</label>
                                <input type="text" name="prestasi" placeholder="Masukkan prestasi yang pernah anda raih. Jika ada lampiran sertifikat pada halaman unggah dokumen" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat <span class="text-danger">*</span></label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="desa" class="form-control" value="{{ old("desa") }}" placeholder="Desa">
                                        @error('desa')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="kecamatan" class="form-control" value="{{ old("kecamatan") }}" placeholder="Kecamatan">
                                        @error('kecamatan')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="kabupaten" class="form-control" value="{{ old("kabupaten") }}" placeholder="Kabupaten">
                                        @error('kabupaten')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <input type="text" name="provinsi" class="form-control" value="{{ old("provinsi") }}" placeholder="Provinsi">
                                        @error('provinsi')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <textarea name="alamat" class="form-control mt-2"  placeholder="Masukkan alamat lengkap anda" cols="20" rows="5">{{ old("alamat") }}</textarea>
                                @error('alamat')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No.Kontak/HP/WhatsApp <span class="text-danger">*</span></label>
                                <input type="text" name="no_hp" class="form-control" placeholder="Masukkan No.Kontak/HP/WhatsApp" value="{{ old("no_hp") }}">
                                @error('no_hp')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jurusan <span class="text-danger">*</span></label>
                                @php
                                    $jurusan = ["Rekayasa Perangkat Lunak","Desain Permodelan dan Informasi Bangunan","Tata Boga","Akutansi","Teknik Pengelasan","Teknik Pendingin Tata Udara","Konstruksi Gedung Sanitasi Pembangunan"];
                                @endphp
                                <select name="jurusan" class="form-control">
                                    <option selected disabled>Pilih jurusan  anda</option>
                                    @foreach ($jurusan as $j)
                                        <option value="{{ $j }}" {{ old('jurusan') == $j ? 'selected' : '' }}>{{ $j }}</option>
                                    @endforeach
                                </select>
                                @error('jurusan')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Foto <span class="text-danger">*</span></label>
                                <input type="file" onchange="previewFile(this)"  class="form-control" name="image"> <br>
                                <img src="{{ url("assets/images/image-not-found.jpg") }}" width="200" id="previewImg" class="img-fluid img-thumbnail">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" name="check" type="checkbox" value="1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Data yang saya isi sudah benar tidak saya ubah lagi dan saya bertanggung jawab atas data ini<span class="text-danger">*</span>
                                </label>
                                @error('check')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="btn btn-block btn-primary">Lengkapi Data</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@include('layouts.footer')
<script>
    function previewFile(input){
      var file = $("input[type=file]").get(0).files[0];
      if(file){
        var reader = new FileReader();
        reader.onload = function(){
          $("#previewImg").attr("src",reader.result);
        }
        reader.readAsDataURL(file);
      }
    }
</script>