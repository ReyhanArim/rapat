<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Rapat.Pegawai.index',['pegawai' => $pegawai]);
 
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('Rapat.Pegawai.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'noTelp' => $request->noTelp,
            'jabatan' => $request->jabatan,
            'Dept' => $request->Dept,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('IDpegawai',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }
}
