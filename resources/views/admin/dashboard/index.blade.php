@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Dashboard</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Selamat Datang dihalaman administrator</li>
                    </ol>
                </div>
            </div>

        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/01.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Proses</h5>
                            <h4 class="font-weight-medium font-size-24">{{ $jumlahProses }} 
                            </h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right mt-2">
                                <a href="{{ route("verifikasi") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                            </div>
                            <p class="text-white-50 mb-0 mt-1">Jumlah pendaftar diproses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/02.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Pendaftar</h5>
                            <h4 class="font-weight-medium font-size-24">{{ $jumlahPendaftar }} 
                                <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right mt-2">
                                <a href="{{ route("pendaftar") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                            </div>
                            <p class="text-white-50 mb-0 mt-1">Jumlah pendaftar siswa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/08.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Diterima</h5>
                            <h4 class="font-weight-medium font-size-24"> {{ $jumlahDiterima }}
                            </h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right mt-2">
                                <a href="{{ route("statusTerima") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                            </div>
                            <p class="text-white-50 mb-0 mt-1">Jumlah pendaftar diterima</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat bg-primary text-white">
                    <div class="card-body">
                        <div class="mb-4">
                            <div class="float-left mini-stat-img mr-4">
                                <img src="assets/images/services-icon/09.png" alt="">
                            </div>
                            <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Ditolak</h5>
                            <h4 class="font-weight-medium font-size-24">{{ $jumlahDitolak }} 
                                <i class="ti-arrow-up text-success ml-2"></i></h4>
                        </div>
                        <div class="pt-2">
                            <div class="float-right mt-2">
                                <a href="{{ route("statusTolak") }}" class="text-white-50"><i class="ti-arrow-right h5"></i></a>
                            </div>
                            <p class="text-white-50 mb-0 mt-1">Jumlah pendaftar ditolak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
     
@include('admin.layouts.footer')