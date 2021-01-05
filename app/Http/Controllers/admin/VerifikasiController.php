<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Status;
use App\Models\Excel;
use App\Models\DataPribadi;
use App\Models\OrangTua;
use App\Models\DataSekolah;

class VerifikasiController extends Controller
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
                                                ->where("status","proses")->get(),                                      
        ];
        return view("admin.verifikasi.index",$data);
    }

    /**
     * Show the form for verifikasi1 a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataVerifikasi1(Request $request){
        $semester1 = DB::table('tb_nilai')->where("nama_siswa",$request->nama_lengkap)->where("semester","Semester 1")->first();
        echo json_encode($semester1);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dataVerifikasi2(Request $request){
        $semester2 = DB::table('tb_nilai')->where("nama_siswa",$request->nama_lengkap)->where("semester","Semester 2")->first();
        echo json_encode($semester2);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataVerifikasi3(Request $request){
        $semester3 = DB::table('tb_nilai')->where("nama_siswa",$request->nama_lengkap)->where("semester","Semester 3")->first();
        echo json_encode($semester3);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dataVerifikasi4(Request $request){
        $dokumen = DB::table('tb_dokumen')->where("nama_siswa",$request->nama_lengkap)->first();
        echo json_encode($dokumen);
    }

    /**
     * Diterima the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function diterima($nama_lengkap)
    {
        $status             = Status::where('nama_siswa', $nama_lengkap)->first();
        $status->status     = "diterima";
        $status->save();

        $dataPribadi        = DataPribadi::where('nama_lengkap',$nama_lengkap)->first();
        $orangTua           = OrangTua::where('nama_siswa',$nama_lengkap)->first();
        $sekolah            = DataSekolah::where('nama_siswa',$nama_lengkap)->first();

        $excel                    = new Excel();
        $excel->nik               = $dataPribadi->nik;
        $excel->nisn              = $dataPribadi->nisn;
        $excel->nama_lengkap      = $nama_lengkap;
        $excel->jenis_kelamin     = $dataPribadi->jenis_kelamin;
        $excel->tempat_lahir      = $dataPribadi->tempat_lahir;
        $excel->tanggal_lahir     = $dataPribadi->tanggal_lahir;
        $excel->agama             = $dataPribadi->agama;
        $excel->golongan_darah    = $dataPribadi->golongan_darah;
        $excel->tinggi_badan      = $dataPribadi->tinggi_badan;
        $excel->berat_badan       = $dataPribadi->berat_badan;
        $excel->status            = $dataPribadi->status;
        $excel->penyakit          = $dataPribadi->penyakit;
        $excel->hobi              = $dataPribadi->hobi;
        $excel->prestasi          = $dataPribadi->prestasi;
        $excel->desa              = $dataPribadi->desa;
        $excel->kecamatan         = $dataPribadi->kecamatan;
        $excel->kabupaten         = $dataPribadi->kabupaten;
        $excel->provinsi          = $dataPribadi->provinsi;
        $excel->alamat            = $dataPribadi->alamat;
        $excel->nomor_hp          = $dataPribadi->no_hp;
        $excel->jurusan           = $dataPribadi->jurusan;
        $excel->nama_ayah         = $orangTua->nama_ayah;
        $excel->status_ayah       = $orangTua->status_ayah;
        $excel->pendidikan_ayah   = $orangTua->pendidikan_ayah;
        $excel->pekerjaan_ayah    = $orangTua->pekerjaan_ayah;
        $excel->penghasilan_ayah  = $orangTua->penghasilan_ayah;
        $excel->nama_ibu          = $orangTua->nama_ibu;
        $excel->status_ibu        = $orangTua->status_ibu;
        $excel->pendidikan_ibu    = $orangTua->pendidikan_ibu;
        $excel->pekerjaan_ibu     = $orangTua->pekerjaan_ibu;
        $excel->penghasilan_ibu   = $orangTua->penghasilan_ibu;
        $excel->no_hp             = $orangTua->no_hp;
        $excel->nama_wali         = $orangTua->nama_wali;
        $excel->pendidikan_wali   = $orangTua->pendidikan_wali;
        $excel->pekerjaan_wali    = $orangTua->pekerjaan_wali;
        $excel->penghasilan_wali  = $orangTua->penghasilan_wali;
        $excel->hp_wali           = $orangTua->nohp_wali;
        $excel->asal_sekolah      = $sekolah->asal_sekolah;
        $excel->nama_sekolah      = $sekolah->nama_sekolah;
        $excel->status_sekolah    = $sekolah->status_sekolah;
        $excel->alamat_sekolah    = $sekolah->alamat_sekolah;
        $excel->save();

        return redirect('/admin/verifikasi')->with('success','Anda telah menerima siswa bernama '.$nama_lengkap);
    }

    /**
     * Ditolak the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ditolak($nama_lengkap)
    {
        $status             = Status::where('nama_siswa', $nama_lengkap)->first();
        $status->status     = "ditolak";
        $status->save();
        return redirect('/admin/verifikasi')->with('error','Anda telah menolak siswa bernama '.$nama_lengkap);
    }










}
