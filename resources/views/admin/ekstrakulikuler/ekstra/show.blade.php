@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Update Ekstrakulikuler</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Halaman update ekstrakulikuler</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="shadow-sm p-3 mb-5 bg-white rounded">
                    <form action="{{ route("updateEkstrakulikuler") }}" method="POST" autocomplete="off">@csrf
                        <input type="hidden" name="id" value="{{ $ekstrakulikuler->id }}">
                        <div class="form-group">
                            <label>Nama Ekstrakulikuler</label>
                            <input type="text" value="{{ $ekstrakulikuler->nama_ekstrakulikuler }}" class="form-control" name="ekstrakulikuler" placeholder="Masukkan Nama Ekstrakulikuler">
                        </div>
                        <div class="form-group">
                            <label>Guru Ekstrakulikuler</label>
                            <input type="text" value="{{ $ekstrakulikuler->nama_guru }}" class="form-control" name="nama_guru" placeholder="Masukkan Guru Ekstrakulikuler">
                        </div>
                        <a href="{{ route("ekstrakulikuler") }}" class="btn btn-info">Kembali</a>
                        <button type="submit" class="btn btn-warning float-right">Update Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@include('admin.layouts.footer')