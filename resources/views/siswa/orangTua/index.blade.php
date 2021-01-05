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
                        <h4 class="font-size-18">Data OrangTua</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Lengkapi Data OrangTua anda <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span></li>  
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <form action="{{ route("postDataOrangTua") }}" method="post" autocomplete="off" enctype="multipart/form-data">@csrf
                            <div class="alert alert-danger">
                                Jika ada tanda <span class="text-danger font-weight-bold">*</span> form wajib diisi
                            </div>
                            <div class="form-group">
                                <label>Nama Ayah <span class="text-danger">*</span></label>
                                <input type="text" name="nama_ayah" class="form-control" value="{{ old("nama_ayah") }}" placeholder="Masukkan Nama Ayah anda">
                                @error('nama_ayah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Ayah<span class="text-danger">*</span></label>
                                <select name="status_ayah" class="form-control">
                                    <option selected disabled>Pilih Status Ayah</option>
                                    @php
                                        $status = ["Masih ada","Meninggal Dunia"];
                                    @endphp
                                    @foreach ($status as $s)
                                        <option value="{{ $s }}" {{ old('status_ayah') == $s ? 'selected' : '' }}>{{ $s }}</option>
                                    @endforeach
                                </select>
                                @error('status_ayah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    $pendidikan = ["Tidak Berpendidikan","SD","SMP","SMA/SEDERAJAT","Diploma","S1","S2","S3"]
                                @endphp
                                <label>Pendidikan Ayah<span class="text-danger">*</span></label>
                                <select name="pendidikan_ayah" class="form-control">
                                    <option selected disabled>Pilih Pendidikan Ayah</option>
                                    @foreach ($pendidikan as $p)
                                    <option value="{{ $p }}" {{ old('pendidikan_ayah') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('pendidikan_ayah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ayah <span class="text-danger">*</span></label>
                                <input type="text" name="pekerjaan_ayah" class="form-control" value="{{ old("pekerjaan_ayah") }}" placeholder="Masukkan Pekerjaan Ayah anda">
                                @error('pekerjaan_ayah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    $penghasilan = ["< 500rb","500-1jt","1jt-3jt","3jt-5jt","5jt-10jt","> 10jt"]
                                @endphp
                                <label>Penghasilan Ayah<span class="text-danger">*</span></label>
                                <select name="penghasilan_ayah" class="form-control">
                                    <option selected disabled>Pilih Penghasilan Ayah</option>
                                    @foreach ($penghasilan as $p)
                                    <option value="{{ $p }}" {{ old('penghasilan_ayah') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('penghasilan_ayah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu <span class="text-danger">*</span></label>
                                <input type="text" name="nama_ibu" class="form-control" value="{{ old("nama_ibu") }}" placeholder="Masukkan Nama Ibu anda">
                                @error('nama_ibu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Ibu<span class="text-danger">*</span></label>
                                <select name="status_ibu" class="form-control">
                                    <option selected disabled>Pilih Status Ibu</option>
                                    @php
                                        $status = ["Masih ada","Meninggal Dunia"];
                                    @endphp
                                    @foreach ($status as $s)
                                        <option value="{{ $s }}" {{ old('status_ibu') == $s ? 'selected' : '' }}>{{ $s }}</option>
                                    @endforeach
                                </select>
                                @error('status_ibu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    $pendidikan = ["Tidak Berpendidikan","SD","SMP","SMA/SEDERAJAT","Diploma","S1","S2","S3"]
                                @endphp
                                <label>Pendidikan Ibu<span class="text-danger">*</span></label>
                                <select name="pendidikan_ibu" class="form-control">
                                    <option selected disabled>Pilih Pendidikan Ibu</option>
                                    @foreach ($pendidikan as $p)
                                    <option value="{{ $p }}" {{ old('pendidikan_ibu') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('pendidikan_ibu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Ibu <span class="text-danger">*</span></label>
                                <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ old("pekerjaan_ibu") }}" placeholder="Masukkan Pekerjaan Ibu anda">
                                @error('pekerjaan_ibu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                @php
                                    $penghasilan = ["< 500rb","500-1jt","1jt-3jt","3jt-5jt","5jt-10jt","> 10jt"]
                                @endphp
                                <label>Penghasilan Ibu<span class="text-danger">*</span></label>
                                <select name="penghasilan_ibu" class="form-control">
                                    <option selected disabled>Pilih Penghasilan Ibu</option>
                                    @foreach ($penghasilan as $p)
                                    <option value="{{ $p }}" {{ old('penghasilan_ibu') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('penghasilan_ibu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No.Hp/Telepon/WA Orang Tua <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" value="{{ old("nohp_ortu") }}" name="nohp_ortu" placeholder="No.Hp/Telepon/WA bisa ayah dan ibu. No.Hp/Telepon/WA harus aktif">
                                @error('nohp_ortu')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Wali</label>
                                <input type="text" name="nama_wali" class="form-control" placeholder="Masukkan Nama Wali anda">
                            </div>
                            <div class="form-group">
                                @php
                                    $pendidikan = ["Tidak Berpendidikan","SD","SMP","SMA/SEDERAJAT","Diploma","S1","S2","S3"]
                                @endphp
                                <label>Pendidikan Wali</label>
                                <select name="pendidikan_wali" class="form-control">
                                    <option selected disabled>Pilih Pendidikan Wali</option>
                                    @foreach ($pendidikan as $p)
                                    <option value="{{ $p }}">{{ $p }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan Wali </label>
                                <input type="text" name="pekerjaan_wali" class="form-control"  placeholder="Masukkan Pekerjaan Wali anda">
                            </div>
                            <div class="form-group">
                                @php
                                    $penghasilan = ["< 500rb","500-1jt","1jt-3jt","3jt-5jt","5jt-10jt","> 10jt"]
                                @endphp
                                <label>Penghasilan Wali</label>
                                <select name="penghasilan_wali" class="form-control">
                                    <option selected disabled>Pilih Penghasilan Wali</option>
                                    @foreach ($penghasilan as $p)
                                    <option value="{{ $p }}">{{ $p }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No.Hp/Telepon/WA Wali</label>
                                <input type="number" class="form-control" name="nohp_wali" placeholder="No.Hp/Telepon/WA wali. No.Hp/Telepon/WA harus aktif">
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