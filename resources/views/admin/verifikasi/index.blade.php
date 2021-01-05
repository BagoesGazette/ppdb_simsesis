@include('admin.layouts.header')
@include('admin.layouts.topbar')
@include('admin.layouts.sidebar')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="page-title-box">
                    <h4 class="font-size-18">Verifikasi</h4>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active">Halaman verifikasi data pendaftar</li>
                    </ol>
                </div>
            </div>

        </div>
        <!-- end page title -->

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

        <div class="shadow-sm p-3 mb-5 bg-white rounded">
            <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Lengkap</td>
                            <td>Email</td>
                            <td>Jurusan</td>
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
                            <td>{{ $s->nama_siswa }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->jurusan }}</td>
                            <td>
                                <a href="{{ url("/admin/showPendaftar/".$s->nama_lengkap) }}" class="btn btn-warning"><i class="fa fa-eye"></i> Lihat Data</a>
                                <button type="button" data-nama_lengkap="{{ $s->nama_lengkap }}" class="btn btn-primary tombolVerifikasi" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-check"></i> Verifikasi
                                </button>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Semester</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4 class="text-center">Semester 1</h4>
            <table>
                <tr>
                    <td>Ipa</td>
                    <td>: <span id="ipa_1"></span></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>: <span id="mtk_1"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>: <span id="bing_1"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>: <span id="bin_1"></span></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <span id="jumlah_1"></span></td>
                </tr>
                <tr>
                    <td>Rata-rata</td>
                    <td>: <span id="rata_1"></span></td>
                </tr>
            </table>
            <h4 class="text-center">Semester 2</h4>
            <table>
                <tr>
                    <td>Ipa</td>
                    <td>: <span id="ipa_2"></span></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>: <span id="mtk_2"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>: <span id="bing_2"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>: <span id="bin_2"></span></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <span id="jumlah_2"></span></td>
                </tr>
                <tr>
                    <td>Rata-rata</td>
                    <td>: <span id="rata_2"></span></td>
                </tr>
            </table>
            <h4 class="text-center">Semester 3</h4>
            <table>
                <tr>
                    <td>Ipa</td>
                    <td>: <span id="ipa_3"></span></td>
                </tr>
                <tr>
                    <td>Matematika</td>
                    <td>: <span id="mtk_3"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Inggris</td>
                    <td>: <span id="bing_3"></span></td>
                </tr>
                <tr>
                    <td>Bahasa Indonesia</td>
                    <td>: <span id="bin_3"></span></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>: <span id="jumlah_3"></span></td>
                </tr>
                <tr>
                    <td>Rata-rata</td>
                    <td>: <span id="rata_3"></span></td>
                </tr>
            </table>
            <span id="raport"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <span id="check"></span>
          <span id="times"></span>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(function() {
        $('.tombolVerifikasi').on('click', function() {
            const nama_lengkap = $(this).data('nama_lengkap')

            $.ajax({
                url: "{{ route("dataVerifikasi1") }}",
                data: {
                    nama_lengkap: nama_lengkap
                },
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    $("#ipa_1").html(data.ipa)
                    $("#mtk_1").html(data.matematika)
                    $("#bing_1").html(data.bahasa_inggris)
                    $("#bin_1").html(data.bahasa_indonesia)
                    $("#jumlah_1").html(data.jumlah)
                    $("#rata_1").html(data.rata_rata)
                }
            });

            $.ajax({
                url: "{{ route("dataVerifikasi2") }}",
                data: {
                    nama_lengkap: nama_lengkap
                },
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    $("#ipa_2").html(data.ipa)
                    $("#mtk_2").html(data.matematika)
                    $("#bing_2").html(data.bahasa_inggris)
                    $("#bin_2").html(data.bahasa_indonesia)
                    $("#jumlah_2").html(data.jumlah)
                    $("#rata_2").html(data.rata_rata)
                }
            });

            $.ajax({
                url: "{{ route("dataVerifikasi3") }}",
                data: {
                    nama_lengkap: nama_lengkap
                },
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    $("#ipa_3").html(data.ipa)
                    $("#mtk_3").html(data.matematika)
                    $("#bing_3").html(data.bahasa_inggris)
                    $("#bin_3").html(data.bahasa_indonesia)
                    $("#jumlah_3").html(data.jumlah)
                    $("#rata_3").html(data.rata_rata)
                }
            });

            $.ajax({
                url: "{{ route("dataVerifikasi4") }}",
                data: {
                    nama_lengkap: nama_lengkap
                },
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    $("#raport").html('<a target="_blank" href="../assets/images/raport/'+data.raport+'" >Lihat Data</a>')
                    $("#check").html('<a href="diterima/'+nama_lengkap+'" class="btn btn-success">Terima <i class="fa fa-check"></i></a>')
                    $("#times").html('<a href="ditolak/'+nama_lengkap+'" class="btn btn-danger">Tolak <i class="fa fa-times"></i></a>')
                }
            });

        })
    })
  </script>