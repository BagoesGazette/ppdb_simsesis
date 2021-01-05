<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPribadi;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("siswa.dataPribadi.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'               => 'required|unique:tb_dataPribadi,nik',
            'nisn'              => 'required|unique:tb_dataPribadi,nisn',
            'nama_lengkap'      => 'required|unique:tb_dataPribadi,nama_lengkap',
            'jenis_kelamin'     => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required',
            'agama'             => 'required',
            'status'            => 'required',
            'desa'              => 'required',
            'kecamatan'         => 'required',
            'kabupaten'         => 'required',
            'provinsi'          => 'required',
            'alamat'            => 'required',
            'no_hp'             => 'required',
            'jurusan'           => 'required',
            'image'             => 'required',
            'check'             => 'required'
        ],[
            'nik.required'              => 'NIK tidak boleh kosong',
            'nisn.required'             => 'NIK tidak boleh kosong',
            'nama_lengkap.required'     => 'Nama lengkap tidak boleh kosong',
            'jenis_kelamin.required'    => 'Jenis kelamin tidak boleh kosong',
            'tempat_lahir.required'     => 'Tempat lahir tidak boleh kosong',
            'tanggal_lahir.required'    => 'Tanggal lahir tidak boleh kosong',
            'agama.required'            => 'Agama tidak boleh kosong',
            'status.required'           => 'Status keluarga tidak boleh kosong',
            'desa.required'             => 'Desa tidak boleh kosong',
            'kecamatan.required'        => 'Kecamatan tidak boleh kosong',
            'kabupaten.required'        => 'Kabupaten tidak boleh kosong',
            'provinsi.required'         => 'Provinsi tidak boleh kosong',
            'alamat.required'           => 'Alamat tidak boleh kosong',
            'no_hp.required'            => 'No Hp tidak boleh kosong',
            'jurusan.required'          => 'Jurusan tidak boleh kosong',
            'image.required'            => 'Image tidak boleh kosong',
            'check.required'            => 'Check data tidak boleh kosong'
        ]);
        $dataPribadi                    = new DataPribadi();
        $dataPribadi->nik               = $request->nik;
        $dataPribadi->nisn              = $request->nisn;
        $dataPribadi->nama_lengkap      = $request->nama_lengkap;
        $dataPribadi->jenis_kelamin     = $request->jenis_kelamin;
        $dataPribadi->tempat_lahir      = $request->tempat_lahir;
        $dataPribadi->tanggal_lahir     = $request->tanggal_lahir;
        $dataPribadi->agama             = $request->agama;
        $dataPribadi->golongan_darah    = $request->golongan_darah;
        $dataPribadi->tinggi_badan      = $request->tinggi_badan;
        $dataPribadi->berat_badan       = $request->berat_badan;
        $dataPribadi->status            = $request->status;
        $dataPribadi->penyakit          = $request->penyakit;
        $dataPribadi->hobi              = $request->hobi;
        $dataPribadi->prestasi          = $request->prestasi;
        $dataPribadi->desa              = $request->desa;
        $dataPribadi->kecamatan         = $request->kecamatan;
        $dataPribadi->kabupaten         = $request->kabupaten;
        $dataPribadi->provinsi          = $request->provinsi;
        $dataPribadi->alamat            = $request->alamat;
        $dataPribadi->no_hp             = $request->no_hp;
        $dataPribadi->jurusan           = $request->jurusan;

        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('assets/images/siswa/'), $imageName);
        $dataPribadi->image = $imageName;
        $dataPribadi->save();

        $status             = Status::where('nama_siswa', Auth::user()->nama_lengkap)->first();
        $status->jurusan    = $request->jurusan;
        $status->save();

        return redirect('/')->with('success','Data Pribadi berhasil dilengkapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dataPribadi = DB::table('tb_dataPribadi')->where('nama_lengkap', Auth::user()->nama_lengkap)->first();
        if ($dataPribadi) {
            return view("siswa.dataPribadi.lihatData",["dataPribadi" => $dataPribadi]);
        }
        return redirect("/");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
