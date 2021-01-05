<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataSekolah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DataSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("siswa.sekolah.index");
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
            "asal_sekolah"          => "required",
            "nama_sekolah"          => "required",
            "status_sekolah"        => "required",
            "alamat_sekolah"        => "required",
            "check"                 => "required",
        ],[
            "asal_sekolah.required"     => "Asal sekolah tidak boleh kosong",
            "nama_sekolah.required"     => "Nama sekolah tidak boleh kosong",
            "status_sekolah.required"   => "Status sekolah tidak boleh kosong",
            "alamat_sekolah.required"   => "Alamat sekolah tidak boleh kosong",
            "check.required"            => "Check Data tidak boleh kosong",
        ]);
        $sekolah = new DataSekolah();
        $sekolah->nama_siswa        = Auth::user()->nama_lengkap;
        $sekolah->asal_sekolah      = $request->asal_sekolah;
        $sekolah->nama_sekolah      = $request->nama_sekolah;
        $sekolah->status_sekolah    = $request->status_sekolah;
        $sekolah->alamat_sekolah    = $request->alamat_sekolah;
        $sekolah->save();
        
        return redirect('/')->with('success','Data Sekolah berhasil dilengkapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $sekolah = DB::table('tb_sekolah')->where('nama_siswa', Auth::user()->nama_lengkap)->first();
        if ($sekolah) {
            return view("siswa.sekolah.lihatData",["sekolah" => $sekolah]);
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
