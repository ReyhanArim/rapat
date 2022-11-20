<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$meeting = DB::table('meeting')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Rapat.Meeting.index',['meeting' => $meeting]);
    }

	// method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('Rapat.Meeting.tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('meeting')->insert([
            'IDruang' => $request->IDruang,
            'judulM' => $request->judulM,
            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            'waktu_mulai' => $request->waktu_mulai,
			'waktu_berakhir' => $request->waktu_berakhir
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/meeting');
    }
}
