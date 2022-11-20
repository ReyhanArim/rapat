<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$peserta = DB::table('peserta_rapat')->get();
 
    	// mengirim data pegawai ke view index
    	return view('Rapat.Peserta.index',['peserta' => $peserta]);
 
    }
}
