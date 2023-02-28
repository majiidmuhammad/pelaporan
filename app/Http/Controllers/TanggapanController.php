<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use App\Models\pengaduan;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    public function index(){

        $tanggap = tanggapan::all();
        $pengaduan = pengaduan::all();
        $petugas = petugas::all();
        // dd($pengaduan);
        return view('pages/petugas/tanggapan', compact('tanggap', 'pengaduan', 'petugas'));
    }

    public function formtanggapan($id){
        $pengaduan = pengaduan::find($id);
        return view('pages/petugas/formtanggapan', compact('pengaduan'));
    }

    public function store(Request $request){
        $request->validate([
            'pengaduan_id' => 'required',
            'tanggapan' => 'required',
            'petugas_id' => 'required',
        ]);

        $data = new tanggapan;
        $data->pengaduan_id = $request->pengaduan_id;
        $data->tanggapan = $request->tanggapan;
        $data->petugas_id = $request->petugas_id;
        $data->save();
        return redirect()->route('tanggapan.index');
    }

}
