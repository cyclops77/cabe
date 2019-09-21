<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
    	return view('public.perusahaan.register');
    }
    public function register(Request $request)
    {
        $p = new \App\Perusahaan;

        $p->nama_perusahaan = $request->nama_perusahaan;

        $p->jenis_perusahaan = $request->jenis_perusahaan;

        $p->email_perusahaan = $request->email_perusahaan;

        $p->nama_penanggung = $request->nama_penanggung;

        $p->status = 'Belum Terverifikasi';

        $p->save();

        return redirect('/login')->with('sukses','berhasil mendaftarkan akun perusahaan, silahlkan tunggu konfirmasi melalui email ');

    }

    public function listPendaftar()
    {

        $pendaftar = \App\Perusahaan::where('status','=','Belum Terverifikasi')->get();
        
        return view('admin.index',['pendaftar' => $pendaftar]);
    }

    public function accRegisterPerusahaan(Request $request)
    {

        foreach ($request->reg as $sw) {
        
        $perusahaan =  \App\Perusahaan::where('id','=',$sw)->first();
            
    	$user = new \App\User;
    	$user->id = mt_rand(50000,99999);
    	$user->role = 'perusahaan';
        \App\Perusahaan::where('id','=',$sw)
            ->update([
                'user_id' => $user->id,
                'status' => 'terverifikasi',
            ]);
    	$user->name = $perusahaan->nama_perusahaan;
    	$user->email = $perusahaan->email_perusahaan;
    	$user->password = bcrypt('secret');

    	$user->save();

        }

    	return redirect('/login')->with('sukses','berhasil mendaftarkan perusahaan');
    }
}
