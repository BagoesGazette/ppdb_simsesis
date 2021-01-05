@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Tambah Proker</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Halaman Tambah Proker</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <div class="alert alert-info font-weight-bold">
                        Upload file bertype word,excel dan pdf
                    </div>
                    <form action="{{ route("storeProker") }}" method="POST" autocomplete="off" enctype="multipart/form-data">@csrf
                        <div class="form-group">
                            <label>Upload File</label>
                            <input type="file" class="form-control" name="proker">
                            @error('proker')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <a href="{{ route("proker") }}" class="btn btn-info">Kembali</a>
                        <button type="submit" class="btn btn-warning float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@include('admin.layouts.footer')