<?php

namespace App\Http\Controllers;
use \App\Beasiswa;
use Auth;
use \App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeasiswaController extends Controller
{
    public function index()
    {
    	return view('beasiswa.index');
    }
    public function listBeasiswa()
    {
    	$beasiswanya = Beasiswa::select('beasiswa.id as besisid','beasiswa.*','users.id as userid','users.*')
    		->join('users','users.id','=','beasiswa.perusahaan_id')
    		->orderBy('beasiswa.created_at','desc')
    		->get();
    	return view('beasiswa.indexmahasiswa',compact('beasiswanya'));
    }
    public function createLink()
    {    	
    	return view('beasiswa.form-create');
    }
    public function create(Request $request)
    {
    	$userid = auth()->user()->id;
    	// $perusahaanid = \App\Perusahaan::select('id')->where('user_id','=',$userid)->first();
    	// dd($perusahaanid);

    	$bea = new \App\Beasiswa;
    	$bea->id = mt_rand(1000,9999);
    	$bea->perusahaan_id = $userid;
    	$bea->nama_beasiswa = $request->nama_beasiswa;
    	$bea->slug_beasiswa = Str::slug($request->nama_beasiswa, '-');
        $bea->ipk = $request->ipk;            	
        $bea->point_ipk = $request->point_ipk;              
        $bea->gaji = $request->gaji;              
        $bea->point_gaji = $request->point_gaji;              
        $bea->usia = $request->usia;
        $bea->point_usia = $request->point_usia;              
              
        $bea->save();

    	return redirect()->back()->with('sukses','Berhasil Membuat Beasissssswaaa . . . !');
    }
    public function detail($slug)
    {
        $userid = auth()->user()->id;
        $data_mahasiswa = \App\Mahasiswa::where('user_id','=',$userid)->first();
    	
        // dd($data_mahasiswa);   

        $bea = \App\Beasiswa::where('slug','=',$slug)->get();
        return view('beasiswa.detail',['bea' => $bea,'data_mahasiswa' => $data_mahasiswa]);
    }
}
