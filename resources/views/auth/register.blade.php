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
                            <h4 class="font-size-18">Register</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active">Halaman untuk membuat akun baru</li>
                            </ol>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-7 offset-sm-3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <form action="{{ url("postRegister") }}" autocomplete="off" method="POST">@csrf
                                <h3 class="text-center">Form Register</h3>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control" value="{{ old("nama_lengkap") }}" placeholder="Masukkan nama lengkap anda">
                                    @error('nama_lengkap')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ old("email") }}" placeholder="Masukkan email anda">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" value="{{ old("username") }}" placeholder="Masukkan username anda">
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password anda">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" placeholder="Konfirmasi password harus sesuai dengan password" class="form-control">
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" name="check" type="checkbox" value="1">
                                    <label class="form-check-label" for="defaultCheck1">
                                      Data yang saya isi sudah benar tidak saya ubah lagi dan saya bertanggung jawab
                                    </label>
                                    @error('check')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Buat Akun</button>
                            </form>
                        </div>
                    </div>
                </div>


        </div> <!-- container-fluid -->
    </div>
<!-- End Page-content -->


</div>  

@include('layouts.footer')

