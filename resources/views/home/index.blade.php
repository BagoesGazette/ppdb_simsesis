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
                            <h4 class="font-size-18">Dashboard</h4>
                            <ol class="breadcrumb mb-0">
                                @if (Auth::check())
                                    @if ($status->status === "belum-lengkap")
                                    <li class="breadcrumb-item active">Selamat Datang <span class="font-weight-bold">{{ auth()->user()->nama_lengkap }}!</span> Silahkan selesaikan pendaftaran Anda</li>  
                                    @else
                                    <li class="breadcrumb-item active">Selamat Datang <span class="font-weight-bold">{{ auth()->user()->nama_lengkap }}!</span> Data anda kami terima</li>  
                                    @endif
                                @else
                                <li class="breadcrumb-item active">Selamat Datang di PPDB SMKN 2 TRENGGALEK</li>
                                @endif
                            </ol>
                            @if (Auth::check())
                                @if ($status)
                                    @if ($status->status === "proses")
                                    <div class="alert alert-info font-weight-bold">
                                        Data anda sedang dalam proses verifikasi <div class="spinner-border text-primary spinner-border-sm" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                    @elseif($status->status === "ditolak")
                                    <div class="alert alert-danger font-weight-bold">
                                        Mohon maaf anda telah ditolak di SMKN 2 TRENGGALEK
                                    </div>
                                    @elseif($status->status === "diterima")
                                    <div class="alert alert-success font-weight-bold">
                                        Selamat anda telah diterima di SMKN 2 TRENGGALEK
                                    </div>
                                    @endif
                                @endif
                            @endif
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                        <span>x</span>
                        </button>
                        {{ session('success') }}
                    </div>
                    </div>
                @endif

                @if (Auth::check())
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/03.png" alt="">
                                    </div>
                                    <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Data Pribadi</h5>
                                </div>
                                <div class="pt-2">
                                    @if ($dataPribadi)
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/lihatData") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                    @else
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataPribadi") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lengkapi data anda</p>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($dataPribadi)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/02.png" alt="" >
                                    </div>
                                    <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Data Orang Tua</h5>
                                </div>
                                <div class="pt-2">
                                    @if ($dataOrangTua)
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/lihatDataOrangTua") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                    @else
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataOrangTua") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lengkapi data anda</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>   
                    @endif

                    @if ($dataOrangTua)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/05.png" alt="" >
                                    </div>
                                    <h6 class="font-size-16 text-uppercase mt-0 text-white-50">Data Asal Sekolah</h6>
                                </div>
                                <div class="pt-2">
                                    @if ($dataSekolah)
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/lihatDataSekolah") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                    @else
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataSekolah") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lengkapi data anda</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>    
                    @endif

                    @if ($dataSekolah)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/06.png" alt="" >
                                    </div>
                                    <h6 class="font-size-16 text-uppercase mt-0 text-white-50">Data Nilai</h6>
                                </div>
                                <div class="pt-2">
                                    @if ($semester3)
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataNilai") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                    @else
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataNilai") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lengkapi data anda</p>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($semester3)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/01.png" alt="" >
                                    </div>
                                    <h6 class="font-size-16 text-uppercase mt-0 text-white-50">Unggah Dokumen</h6>
                                </div>
                                <div class="pt-2">
                                    @if ($dokumen)
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/lihatDokumen") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                    @else
                                    <div class="float-right mt-2">
                                        <a href="{{ url("/dataDokumen") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>
                                    <p class="text-white-50 mb-0 mt-1">Lengkapi data anda</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if ($dokumen)
                    <div class="col-xl-4 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/07.png" alt="" >
                                    </div>
                                    <h6 class="font-size-16 text-uppercase mt-0 text-white-50">Cetak</h6>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right mt-2">
                                        <a href="{{ route("cetakPDF") }}" target="_blank" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                                    </div>

                                    <p class="text-white-50 mb-0 mt-1">Lihat data anda</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- end row -->
                @else
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h5 class="display-4">Hai Calon Siswa Baru SMKN 2 TRENGGALEK</h5>
                        <p class="lead">Selamat Datang di halaman resmi pendaftaran peserta didik baru SMKN 2 TRENGGALEK tahun <?= date("Y") ?>. Halaman ini merupakan halaman resmi untuk melakukan pendaftaran ke sekolah kami. Untuk melakukan pendaftaran, kamu perlu buat akun baru terlebih, kemudian login untuk meLihat pendaftaran. Terima Kasih</p>
                    </div>
                </div>
                @endif

        </div> <!-- container-fluid -->
    </div>
<!-- End Page-content -->


</div>  

@include('layouts.footer')

