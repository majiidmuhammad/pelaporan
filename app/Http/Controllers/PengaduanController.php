<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(){

        $pengaduan = pengaduan::all();
        return view('pages/petugas/pengaduan', compact('pengaduan'));
    }
}
