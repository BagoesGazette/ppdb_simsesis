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
                        <h4 class="font-size-18">Data Sekolah</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Lengkapi Data Sekolah anda <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span></li>  
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <form action="{{ route("postDataSekolah") }}" method="post" autocomplete="off" enctype="multipart/form-data">@csrf
                            <div class="alert alert-danger">
                                Jika ada tanda <span class="text-danger font-weight-bold">*</span> form wajib diisi
                            </div>
                            <div class="form-group">
                                <label>Asal Sekolah <span class="text-danger">*</span></label>
                                @php
                                    $asal = ["Sekolah Menengah Pertama (SMP)","Madrasah Tsanawiyah (MTS)"];
                                @endphp
                                <select name="asal_sekolah" class="form-control">
                                    <option selected disabled>Pilih Asal Sekolah</option>
                                    @foreach ($asal as $p)
                                    <option value="{{ $p }}" {{ old('asal_sekolah') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('asal_sekolah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Sekolah <span class="text-danger">*</span></label>
                                <input type="text" name="nama_sekolah" class="form-control" value="{{ old("nama_sekolah") }}" placeholder="Masukkan Nama Sekolah anda">
                                @error('nama_sekolah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Sekolah <span class="text-danger">*</span></label>
                                @php
                                    $status = ["Negeri","Swasta"];
                                @endphp
                                <select name="status_sekolah" class="form-control">
                                    <option selected disabled>Pilih Status Sekolah</option>
                                    @foreach ($status as $p)
                                    <option value="{{ $p }}" {{ old('status_sekolah') == $p ? 'selected' : '' }}>{{ $p }}</option>
                                    @endforeach
                                </select>
                                @error('status_sekolah')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat Sekolah <span class="text-danger">*</span></label>
                                <textarea name="alamat_sekolah" class="form-control" placeholder="Masukkan alamat sekolah" cols="30" rows="10"></textarea>
                                @error('alamat_sekolah')
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