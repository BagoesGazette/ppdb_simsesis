@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Ekstrakulikuler</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Halaman ekstrakulikuler</li>
                    </ol>
                </div>
            </div>
        </div>

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

        <a href="{{ route("createEkstrakulikuler") }}" class="btn btn-success mb-2">Tambah Data</a>
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Ekstrakulikuler</td>
                            <td>Guru Ekstrakulikuler</td>
                            <td>Pilihan</td>
                        </tr>
                    </thead>
                    <tbody> 
                        @php
                            $no=1
                        @endphp
                        @foreach ($ekstrakulikuler as $e)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $e->nama_ekstrakulikuler }}</td>
                            <td>{{ $e->nama_guru }}</td>
                            <td>
                                <a href="{{ url("showEkstrakulikuler/".$e->id) }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                <a href="{{ url("destroyEkstrakulikuler/".$e->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@include('admin.layouts.footer')