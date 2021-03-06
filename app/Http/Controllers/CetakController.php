<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;

class CetakController extends Controller
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
                "orangtua"      => $orangtua        = DB::table('tb_orangtua')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "sekolah"       => $sekolah         = DB::table('tb_sekolah')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "semester1"     => $semester1       = DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 1")->first(),
                "semester2"     => $semester2       = DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 2")->first(),
                "semester3"     => $semester3       = DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 3")->first(),
                "dokumen"       => $dokumen         = DB::table('tb_dokumen')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
                "status"        => $status          = DB::table('tb_status')->where('nama_siswa', Auth::user()->nama_lengkap)->first(),
            ];
            if($status){
                $contxt = stream_context_create([
                    'ssl' => [
                    'verify_peer' => FALSE,
                    'verify_peer_name' => FALSE,
                    'allow_self_signed'=> TRUE
                    ]
                    ]);
                    $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
                    $pdf->getDomPDF()->setHttpContext($contxt);
                $pdf = PDF::loadview('siswa.pdf.index',$data)->setPaper('A4', 'potrait');
                return $pdf->stream();
            }else{
                return redirect("/");
            }
            
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
