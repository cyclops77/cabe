<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \App\Fakultas;
use \App\Prodi;


class RegisterController extends Controller
{
    public function index()
    {
        $fak = Fakultas::All();
    	return view('public.mahasiswa.register', ['fak' => $fak]);
    }

    public function prodi(Request $request)
    {
        $id_fakultas = $request->fakultas_id;
        // $id_fakultas = Input::get('fakultas_id');
        $prodi = Prodi::where('fakultas_id','=', $id_fakultas)->get();
        return response()->json($prodi);
    }
    public function create(Request $request)
    {
    	$user = new \App\User;
    	$user->role = 'mahasiswa';
    	$user->id = mt_rand(10000,19999);
    	$mhs = \App\Mahasiswa::create([
    		'user_id' => $user->id,
    		'nama_lengkap' => $request->nama_lengkap,
    		'nohp' => $request->nohp,
    		'semester' => $request->semester,
    		'ipk' => $request->ipk,
    		'jenis_jurusan' => $request->jenis_jurusan
    	]);
    	$user->name = $request->nama_lengkap;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);

    	$user->save();

    	return redirect('/login');
    }
}
