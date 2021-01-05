<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $data = [
                "dataPribadi"   => $dataPribadi     = DB::table('tb_dataPribadi')->where('nama_lengkap', Auth::user()->nama_lengkap)->first(),
                "dataOrangTua"  => $dataOrangTua    = DB::table('tb_orangtua')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "dataSekolah"   => $dataSekolah     = DB::table('tb_sekolah')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "semester3"     => $semester3       = DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 3")->first(),
                "dokumen"       => $dokumen         = DB::table('tb_dokumen')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "status"        => $status          = DB::table('tb_status')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
            ];
            return view("home.index",$data);
        }else{
            return view("home.index");
        }
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
    public function show($id)
    {
        //
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
