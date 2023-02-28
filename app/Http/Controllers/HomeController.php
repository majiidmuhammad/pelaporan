<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $jumlahpengaduan = pengaduan::count();
        $jumlahtanggapan = tanggapan::count();
        $jumlahmasyarakat = pengaduan::count();
        return view('pages/dashboard', compact('jumlahpengaduan', 'jumlahtanggapan', 'jumlahmasyarakat'));
    }
}
