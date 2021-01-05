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
                        <h4 class="font-size-18">Data Nilai</h4>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item active">Lengkapi Data Nilai anda <span class="font-weight-bold">{{ Auth::user()->nama_lengkap }}</span></li>  
                        </ol>
                    </div>
                </div>
            </div>     
            <!-- end page title -->

            @if ($semester3)
                <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                    <span>x</span>
                    </button>
                    Selamat data nilai semester sudah lengkap
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
        
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#semester1">Semester 1</a>
                </li>
                @if ($semester1)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#semester2">Semester 2</a>
                </li>
                @endif
                @if ($semester2)
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#semester3">Semester 3</a>
                </li>
                @endif
            </ul>

            <div class="tab-content">
                <div id="semester1" class="container tab-pane active"><br>
                  <h3>Semester 1</h3>
                  @if ($semester1)
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester1->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester1->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester1->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester1->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester1->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester1->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester1->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester1->rata_rata }}</td>
                        </tr>
                    </table>
                  @else
                  <form action="{{ route("semester1") }}" method="POST">@csrf
                    <div class="form-group">
                        <label class="control-label">IPA</label>
                        <input  type="text"  onkeypress="isInputNumber(event)" name="ipa_1" class="form-control" min="0"  value="{{ old("ipa_1") }}" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('ipa_1')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Matematika</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("matematika_1") }}" name="matematika_1" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('matematika_1')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Inggris</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("bing_1") }}" name="bing_1" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bing_1')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Indonesia</label>
                        <input  type="text" name="bin_1" onkeypress="isInputNumber(event)" value="{{ old("bin_1") }}" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bin_1')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" name="check" type="checkbox" value="1">
                        <label class="form-check-label" for="defaultCheck1">
                          Data yang saya isi sudah benar tidak saya ubah lagi dan saya bertanggung jawab atas data ini<span class="text-danger">*</span>
                        </label>
                        @error('check')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Lengkapi Data</button>
                  </form> 
                  @endif
                </div>
                <div id="semester2" class="container tab-pane fade"><br>
                  <h3>Semester 2</h3>
                  @if (!$semester2)
                  <form action="{{ route("semester2") }}" method="POST">@csrf
                    <div class="form-group">
                        <label class="control-label">IPA</label>
                        <input  type="text"  onkeypress="isInputNumber(event)" name="ipa_2" class="form-control" min="0"  value="{{ old("ipa_2") }}" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('ipa_2')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Matematika</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("matematika_2") }}" name="matematika_2" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('matematika_2')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Inggris</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("bing_2") }}" name="bing_2" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bing_2')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Indonesia</label>
                        <input  type="text" name="bin_2" onkeypress="isInputNumber(event)" value="{{ old("bin_2") }}" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bin_2')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" name="check" type="checkbox" value="1">
                        <label class="form-check-label" for="defaultCheck1">
                          Data yang saya isi sudah benar tidak saya ubah lagi dan saya bertanggung jawab atas data ini<span class="text-danger">*</span>
                        </label>
                        @error('check')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Lengkapi Data</button>
                  </form>
                  @else
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester2->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester2->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester2->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester2->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester2->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester2->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester2->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester2->rata_rata }}</td>
                        </tr>
                    </table>
                  @endif
                </div>
                <div id="semester3" class="container tab-pane fade"><br>
                  <h3>Semester 3</h3>
                  @if (!$semester3)
                  <form action="{{ route("semester3") }}" method="POST">@csrf
                    <div class="form-group">
                        <label class="control-label">IPA</label>
                        <input  type="text"  onkeypress="isInputNumber(event)" name="ipa_3" class="form-control" min="0"  value="{{ old("ipa_3") }}" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('ipa_3')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Matematika</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("matematika_3") }}" name="matematika_3" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('matematika_3')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Inggris</label>
                        <input  type="text" onkeypress="isInputNumber(event)" value="{{ old("bing_3") }}" name="bing_3" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bing_3')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label">Bahasa Indonesia</label>
                        <input  type="text" name="bin_3" onkeypress="isInputNumber(event)" value="{{ old("bin_3") }}" class="form-control" placeholder="Gunakan tanda titik. Misal nilai 80.50 atau bisa 80" />
                        @error('bin_3')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" name="check" type="checkbox" value="1">
                        <label class="form-check-label" for="defaultCheck1">
                          Data yang saya isi sudah benar tidak saya ubah lagi dan saya bertanggung jawab atas data ini<span class="text-danger">*</span>
                        </label>
                        @error('check')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Lengkapi Data</button>
                  </form>
                  @else
                    <table>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>: {{ $semester3->nama_siswa }}</td>
                        </tr>
                        <tr>
                            <td>IPA</td>
                            <td>: {{ $semester3->ipa }}</td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td>: {{ $semester3->matematika }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td>: {{ $semester3->bahasa_inggris }}</td>
                        </tr>
                        <tr>
                            <td>Bahasa Indonesia</td>
                            <td>: {{ $semester3->bahasa_indonesia }}</td>
                        </tr>
                        <tr>
                            <td>Semester</td>
                            <td>: {{ $semester3->semester }}</td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>: {{ $semester3->jumlah }}</td>
                        </tr>
                        <tr>
                            <td>Rata-rata</td>
                            <td>: {{ $semester3->rata_rata }}</td>
                        </tr>
                    </table>
                  @endif
                </div>
            </div>

            

        </div>
    </div>
</div>
@include('layouts.footer')
<script>

    function isInputNumber(evt){
        var ch = String.fromCharCode(evt.which);

        if(!(/[0-9.]/.test(ch))){
            evt.preventDefault();
        }
    }

</script>