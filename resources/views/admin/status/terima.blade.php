@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Diterima</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Selamat Datang dihalaman diterima</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Lengkap</td>
                            <td>Jurusan</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody> 
                        @php
                            $no=1
                        @endphp
                        @foreach ($diterima as $s)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $s->nama_siswa }}</td>
                            <td>{{ $s->jurusan }}</td>
                            <td>
                                <a href="{{ url("/admin/showPendaftar/".$s->nama_siswa) }}" class="btn btn-warning"><i class="fa fa-eye"></i> Lihat Data</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
     
@include('admin.layouts.footer')