<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "semester1" => DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 1")->first(),
            "semester2" => DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 2")->first(),
            "semester3" => DB::table('tb_nilai')->where("nama_siswa",Auth::user()->nama_lengkap)->where("semester","Semester 3")->first(),
        ];
        
        return view("siswa.nilai.index",$data);
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

    public function semester1(Request $request){
        $request->validate([
            "ipa_1"             => "required|max:5|min:2",
            "matematika_1"      => "required|max:5|min:2",
            "bing_1"            => "required|max:5|min:2",
            "bin_1"             => "required|max:5|min:2",
            "check"             => "required"
        ],[
            "ipa_1.required"            => "Nilai ipa semester 1 tidak boleh kosong",
            "matematika_1.required"     => "Nilai matematika semester 1 tidak boleh kosong",
            "bing_1.required"           => "Nilai bahasa inggris semester 1 tidak boleh kosong",
            "bin_1.required"            => "Nilai bahasa indonesia semester 1 tidak boleh kosong",
            'check.required'            => 'Check data tidak boleh kosong'
        ]);
        $nilai                      = new Nilai();
        $jumlah1                    = $request->ipa_1 + $request->matematika_1 + $request->bing_1 + $request->bin_1;
        $nilai->nama_siswa          = Auth::user()->nama_lengkap;
        $nilai->ipa                 = $request->ipa_1;
        $nilai->matematika          = $request->matematika_1;
        $nilai->bahasa_inggris      = $request->bing_1;
        $nilai->bahasa_indonesia    = $request->bin_1;
        $nilai->semester            = "Semester 1";
        $nilai->jumlah              = $jumlah1;
        $nilai->rata_rata           = $jumlah1/4;
        $nilai->save();
        return redirect('/dataNilai')->with('success','Data Nilai Semester 1 berhasil dilengkapi');
    }

    public function semester2(Request $request){
        $request->validate([
            "ipa_2"             => "required|max:5|min:2",
            "matematika_2"      => "required|max:5|min:2",
            "bing_2"            => "required|max:5|min:2",
            "bin_2"             => "required|max:5|min:2",
            "check"             => "required"
        ],[
            "ipa_2.required"            => "Nilai ipa semester 2 tidak boleh kosong",
            "matematika_2.required"     => "Nilai matematika semester 2 tidak boleh kosong",
            "bing_2.required"           => "Nilai bahasa inggris semester 2 tidak boleh kosong",
            "bin_2.required"            => "Nilai bahasa indonesia semester 2 tidak boleh kosong",
            'check.required'            => 'Check data tidak boleh kosong'
        ]);
        $nilai                      = new Nilai();
        $jumlah2                    = $request->ipa_2 + $request->matematika_2 + $request->bing_2 + $request->bin_2;
        $nilai->nama_siswa          = Auth::user()->nama_lengkap;
        $nilai->ipa                 = $request->ipa_2;
        $nilai->matematika          = $request->matematika_2;
        $nilai->bahasa_inggris      = $request->bing_2;
        $nilai->bahasa_indonesia    = $request->bin_2;
        $nilai->semester            = "Semester 2";
        $nilai->jumlah              = $jumlah2;
        $nilai->rata_rata           = $jumlah2/4;
        $nilai->save();
        return redirect('/dataNilai')->with('success','Data Nilai Semester 2 berhasil dilengkapi');
    }

    public function semester3(Request $request){
        $request->validate([
            "ipa_3"             => "required|max:5|min:2",
            "matematika_3"      => "required|max:5|min:2",
            "bing_3"            => "required|max:5|min:2",
            "bin_3"             => "required|max:5|min:2",
            "check"             => "required"
        ],[
            "ipa_3.required"            => "Nilai ipa semester 3 tidak boleh kosong",
            "matematika_3.required"     => "Nilai matematika semester 3 tidak boleh kosong",
            "bing_3.required"           => "Nilai bahasa inggris semester 3 tidak boleh kosong",
            "bin_3.required"            => "Nilai bahasa indonesia semester 3 tidak boleh kosong",
            'check.required'            => 'Check data tidak boleh kosong'
        ]);
        $nilai                      = new Nilai();
        $jumlah3                    = $request->ipa_3 + $request->matematika_3 + $request->bing_3 + $request->bin_3;
        $nilai->nama_siswa          = Auth::user()->nama_lengkap;
        $nilai->ipa                 = $request->ipa_3;
        $nilai->matematika          = $request->matematika_3;
        $nilai->bahasa_inggris      = $request->bing_3;
        $nilai->bahasa_indonesia    = $request->bin_3;
        $nilai->semester            = "Semester 3";
        $nilai->jumlah              = $jumlah3;
        $nilai->rata_rata           = $jumlah3/4;
        $nilai->save();
        return redirect('/dataNilai')->with('success','Data Nilai Semester 3 berhasil dilengkapi');
    }

}
