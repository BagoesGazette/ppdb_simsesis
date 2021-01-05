<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ekstrakulikuler;

class EkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrakulikuler = Ekstrakulikuler::all();
        return view("admin.ekstrakulikuler.ekstra.index",["ekstrakulikuler" => $ekstrakulikuler]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.ekstrakulikuler.ekstra.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ekstrakulikuler = new Ekstrakulikuler();
        $ekstrakulikuler->nama_ekstrakulikuler = $request->ekstrakulikuler;
        $ekstrakulikuler->nama_guru            = $request->nama_guru;
        $ekstrakulikuler->save();
        return redirect('/ekstrakulikuler')->with('success','Data ekstrakulikuler berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ekstrakulikuler = Ekstrakulikuler::where("id",$id)->first();
        return view("admin.ekstrakulikuler.ekstra.show",["ekstrakulikuler" => $ekstrakulikuler]);
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
    public function update(Request $request)
    {
        $ekstrakulikuler = Ekstrakulikuler::where("id",$request->id)->first();
        $ekstrakulikuler->nama_ekstrakulikuler = $request->ekstrakulikuler;
        $ekstrakulikuler->nama_guru            = $request->nama_guru;
        $ekstrakulikuler->save();
        return redirect('/ekstrakulikuler')->with('success','Data ekstrakulikuler berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ekstrakulikuler::where("id",$id)->delete();
        return redirect('/ekstrakulikuler')->with('success','Data ekstrakulikuler berhasil dihapus');
    }
}
