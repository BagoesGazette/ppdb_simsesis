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
                        <h4 class="font-size-18">Data Dokumen</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Lengkapi data dokumen anda <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span></li>  
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->
            
            
            <div class="row">
                <div class="col-sm-8">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="alert alert-danger font-weight-bold">
                            Jika ada tanda merah wajib diisi <br>
                            Upload dengan type pdf. Jika scan data gunakan aplikasi simplescanner pada hp<br>
                            Ukuran file max 5mb
                        </div>
                        <form action="{{ route("storeDokumen") }}" method="post" enctype="multipart/form-data">@csrf
                            <div class="form-group">
                                <label>Akta Kelahiran <span class="text-danger">*</span></label>
                                <input type="file" name="akta_lahir" class="form-control">
                                @error('akta_lahir')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Surat Keterangan Lulus (SKL)<span class="text-danger">*</span></label>
                                <input type="file" name="skl" class="form-control">
                                @error('skl')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kartu Keluarga <span class="text-danger">*</span></label>
                                <input type="file" name="kk" class="form-control">
                                @error('kk')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Raport Semester 4-6 <span class="text-danger">*</span></label>
                                <input type="file" name="raport" class="form-control">
                                @error('raport')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dokumen penunjang lainnya</label>
                                <input type="file" name="lainnya" class="form-control">
                                
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
                            <button class="btn btn-block btn-primary">Simpan Data</button>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@include('layouts.footer')