<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrangTua;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataOrangTuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("siswa.orangTua.index");
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
            "nama_ayah"             => 'required',
            "status_ayah"           => 'required',
            "pendidikan_ayah"       => 'required',
            "pekerjaan_ayah"        => 'required',
            "penghasilan_ayah"      => 'required',
            "nama_ibu"              => 'required',
            "status_ibu"            => 'required',
            "pendidikan_ibu"        => 'required',
            "pekerjaan_ibu"         => 'required',
            "penghasilan_ibu"       => 'required',
            "nohp_ortu"             => 'required',
            'check'                 => 'required'
        ],[
            "nama_ayah.required"            => "Nama ayah tidak boleh kosong",
            "status_ayah.required"          => "Status ayah tidak boleh kosong",
            "pendidikan_ayah.required"      => "Pendidikan ayah tidak boleh kosong",
            "pekerjaan_ayah.required"       => "Pekerjaan ayah tidak boleh kosong",
            "penghasilan_ayah.required"     => "Penghasilan ayah tidak boleh kosong",
            "nama_ibu.required"             => "Nama ibu tidak boleh kosong",
            "status_ibu.required"           => "Status ibu tidak boleh kosong",
            "pendidikan_ibu.required"       => "Pendidikan ibu tidak boleh kosong",
            "pekerjaan_ibu.required"        => "Pekerjaan ibu tidak boleh kosong",
            "penghasilan_ibu.required"      => "Penghasilan ibu tidak boleh kosong",
            "nohp_ortu.required"            => "No Hp Orang tua tidak boleh kosong",
            'check.required'                => 'Check data tidak boleh kosong'
        ]);

        $orangtua                   = new OrangTua();
        $orangtua->nama_siswa       = Auth::user()->nama_lengkap;
        $orangtua->nama_ayah        = $request->nama_ayah;
        $orangtua->status_ayah      = $request->status_ayah;
        $orangtua->pendidikan_ayah  = $request->pendidikan_ayah;
        $orangtua->pekerjaan_ayah   = $request->pekerjaan_ayah;
        $orangtua->penghasilan_ayah = $request->penghasilan_ayah;
        $orangtua->nama_ibu         = $request->nama_ibu;
        $orangtua->status_ibu       = $request->status_ibu;
        $orangtua->pendidikan_ibu   = $request->pendidikan_ibu;
        $orangtua->pekerjaan_ibu    = $request->pekerjaan_ibu;
        $orangtua->penghasilan_ibu  = $request->penghasilan_ibu;
        $orangtua->no_hp            = $request->nohp_ortu;
        $orangtua->nama_wali        = $request->nama_wali;
        $orangtua->pendidikan_wali  = $request->pendidikan_wali;
        $orangtua->pekerjaan_wali   = $request->pekerjaan_wali;
        $orangtua->penghasilan_wali = $request->penghasilan_wali;
        $orangtua->hp_wali          = $request->nohp_wali;
        $orangtua->save();

        return redirect('/')->with('success','Data Orang Tua berhasil dilengkapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orangtua = DB::table('tb_orangtua')->where('nama_siswa', Auth::user()->nama_lengkap)->first();
        if ($orangtua) {
            return view("siswa.orangTua.lihatData",["orangtua" => $orangtua]);
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
