<?php

namespace App\Http\Controllers;

use Session;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('mahasiswa.main');
    }
    
    public function form1()
    {
        return view('mahasiswa.form1');
    }
    
    public function saveform(Request $request)
    {
        // insert data ke table data
        DB::table('data')->insert([
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
            'jurusan' => $request->jurusan,
            'status' => 0,
            'tanggal' => date("Y-m-d")
        ]); 

        return redirect('mahasiswa')->with('sukses','sukses');
    }
    
}
