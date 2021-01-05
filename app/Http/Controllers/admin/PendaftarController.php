<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "siswa"        => $siswa          = DB::table('tb_auth')
                                                ->join('tb_status', 'tb_auth.nama_lengkap', '=', 'tb_status.nama_siswa')
                                                ->where("role","siswa")->get(),
        ];
        return view("admin.pendaftar.index",$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama_lengkap)
    {
        $data = [
            "dataPribadi"   => $dataPribadi     = DB::table('tb_dataPribadi')->where('nama_lengkap', $nama_lengkap)->first(),
            "orangtua"      => $orangtua        = DB::table('tb_orangtua')->where('nama_siswa', $nama_lengkap)->first(),
            "sekolah"       => $sekolah         = DB::table('tb_sekolah')->where('nama_siswa', $nama_lengkap)->first(),
            "semester1"     => $semester1       = DB::table('tb_nilai')->where("nama_siswa",$nama_lengkap)->where("semester","Semester 1")->first(),
            "semester2"     => $semester2       = DB::table('tb_nilai')->where("nama_siswa",$nama_lengkap)->where("semester","Semester 2")->first(),
            "semester3"     => $semester3       = DB::table('tb_nilai')->where("nama_siswa",$nama_lengkap)->where("semester","Semester 3")->first(),
            "dokumen"       => $dokumen         = DB::table('tb_dokumen')->where('nama_siswa', $nama_lengkap)->first(),
            "status"        => $status          = DB::table('tb_status')->where('nama_siswa', $nama_lengkap)->first(),
        ];
        return view("admin.pendaftar.show",$data);
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
