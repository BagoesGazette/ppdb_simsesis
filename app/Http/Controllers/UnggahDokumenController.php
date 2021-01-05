<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnggahDokumen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Status;

class UnggahDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("siswa.dokumen.index");
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
            "akta_lahir"            => "required|mimes:pdf|max:5000",
            "skl"                   => "required|mimes:pdf|max:5000",
            "kk"                    => "required|mimes:pdf|max:5000",
            "raport"                => "required|mimes:pdf|max:5000",
            "check"                 => "required"
        ],[
            "akta_lahir.required"   => "Data akta lahir tidak boleh kosong",
            "skl.required"          => "Data surat keterangan lulus tidak boleh kosong",
            "kk.required"           => "Data kartu keluarga tidak boleh kosong",
            "raport.required"       => "Data raport semester 4-6 tidak boleh kosong",
            'check.required'            => 'Check data tidak boleh kosong'
        ]);

        $dokumen                =  new UnggahDokumen();
        $dokumen->nama_siswa    = Auth::user()->nama_lengkap;
        $akta_lahir             = Auth::user()->nama_lengkap.'.'.$request->akta_lahir->extension();  
        $request->akta_lahir->move(public_path('assets/images/akta_lahir/'), $akta_lahir);
        $dokumen->akta_lahir    = $akta_lahir;

        $skl                    = Auth::user()->nama_lengkap.'.'.$request->skl->extension();  
        $request->skl->move(public_path('assets/images/skl/'), $skl);
        $dokumen->skl           = $skl;

        $kk                     = Auth::user()->nama_lengkap.'.'.$request->kk->extension();  
        $request->kk->move(public_path('assets/images/kk/'), $kk);
        $dokumen->kk            = $kk;

        $raport                 = Auth::user()->nama_lengkap.'.'.$request->raport->extension();  
        $request->raport->move(public_path('assets/images/raport/'), $raport);
        $dokumen->raport        = $raport;
        
        if($request->lainnya){
            $lainnya            = Auth::user()->nama_lengkap.'.'.$request->lainnya->extension();  
            $request->lainnya->move(public_path('assets/images/lainnya/'), $lainnya);
            $dokumen->lainnya   = $lainnya;
        }else{
            $dokumen->lainnya = null;
        }

        $dokumen->save();

        $status             = Status::where('nama_siswa', Auth::user()->nama_lengkap)->first();
        $status->status     = "proses";
        $status->save();
        return redirect('/')->with('success','Data Dokumen berhasil dilengkapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dokumen = DB::table('tb_dokumen')->where('nama_siswa', Auth::user()->nama_lengkap)->first();
        if ($dokumen) {
            return view("siswa.dokumen.lihatData",["dokumen" => $dokumen]);
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
