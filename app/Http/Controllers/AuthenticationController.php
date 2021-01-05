<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Status;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return redirect('/');
        }else{
            return view("auth.login");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return redirect('/');
        }else{
            return view("auth.register");
        }
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
            'nama_lengkap'      => 'required|min:7|unique:tb_auth,nama_lengkap',
            'username'          => 'required|unique:tb_auth,username',
            'email'             => 'required|email|unique:tb_auth,email',
            'password'          => 'required|min:6|confirmed',
            'check'             => 'required'
        ],[
            'nama_lengkap.required'                     => 'Nama Lengkap tidak boleh kosong',
            'nama_lengkap.unique:tb_auth,nama_lengkap'  => 'Nama Lengkap sudah terdaftar',
            'username.required'                         => 'Username tidak boleh kosong',
            'email.required'                            => 'Email tidak boleh kosong',
            'password.required'                         => 'Password tidak boleh kosong',
            'password.confirmed'                        => 'Konfirmasi Password tidak sama dengan password',
            'check.required'                            => 'Check data tidak boleh kosong'
        ]);
        
        $user                   = new User();
        $user->nama_lengkap     = $request->nama_lengkap;
        $user->email            = $request->email;
        $user->username         = $request->username;
        $user->password         = bcrypt($request->password);
        $user->remember_token   = Str::random(60);
        $user->role             = "siswa";
        $user->save();

        $status                 = new Status();
        $status->nama_siswa     = $request->nama_lengkap;
        $status->status         = "belum-lengkap";
        $status->save();
        return redirect('/login')->with('message','Pendaftaran akun berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  login
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(auth()->user()->role === "siswa"){
                return redirect('/');
            }else{
                Auth::logout();
                return redirect('/login')->with('error','Maaf anda bukan siswa');
            }
        }
        return redirect('/login')->with('error','Email dan password tidak sesuai');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('message','Logout berhasil');
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
    public function postAdmin(Request $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(auth()->user()->role === "admin"){
                return redirect('/admin');
            }elseif (auth()->user()->role === "adminKesiswaan") {
                return redirect('/kesiswaan');
            }elseif (auth()->user()->role === "adminEkstra") {
                return redirect('/ekstrakulikuler');
            }else{
                Auth::logout();
                return redirect('/adminLogin')->with('error','Maaf anda bukan admin');
            }
        }
        return redirect('/adminLogin')->with('error','Email dan password tidak sesuai');
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminLogin()
    {
        if(Auth::check()){
            return redirect('/');
        }else{
            return view("auth.index");
        }
    }
}
