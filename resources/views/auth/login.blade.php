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
                            <h4 class="font-size-18">Login</h4>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item active">Halaman untuk login</li>
                            </ol>
                        </div>
                    </div>
                </div>     
                <!-- end page title -->

                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="shadow-sm p-3 mb-5 bg-white rounded">
                            <form action="{{ url("postLogin") }}" autocomplete="off" method="POST">{{ csrf_field() }}
                                <h3 class="text-center">Form Login</h3>
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                        <span>x</span>
                                        </button>
                                        {{ session('error') }}
                                    </div>
                                    </div>
                                @endif
                                @if (session('message'))
                                    <div class="alert alert-success alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                        <span>x</span>
                                        </button>
                                        {{ session('message') }}
                                    </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Masukkan email" class="form-control">
                                    @error('email')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan password">
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>


        </div> <!-- container-fluid -->
    </div>
<!-- End Page-content -->


</div>  

@include('layouts.footer')

