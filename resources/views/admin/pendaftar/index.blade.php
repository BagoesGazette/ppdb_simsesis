@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Pendaftar</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Selamat Datang dihalaman pendaftar</li>
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
                        <td>Status Dokumen</td>
                        <td>Options</td>
                    </tr>
                </thead>
                <tbody> 
                    @php
                        $no=1
                    @endphp
                    @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $s->nama_lengkap }}</td>
                        <td>{{ $s->jurusan }}</td>
                        <td>
                            @if ($s->status === "belum-lengkap")
                            <span class="badge badge-danger">belum lengkap</span>    
                            @else
                            <span class="badge badge-success">lengkap</span>
                            @endif
                            
                        </td>
                        <td>
                            @if ($s->status === "belum-lengkap")
                            <button class="btn btn-danger"><i class="fas fa-eye-slash"></i></button>    
                            @else
                            <a href="{{ url("/admin/showPendaftar/".$s->nama_lengkap) }}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                            @endif
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
