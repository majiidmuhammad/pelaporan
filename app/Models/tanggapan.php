<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $table = 'tanggapans';
    protected function pengaduan(){
        return $this->belongsTo(pengaduan::class, 'pengaduan_id', 'id');
    }
    protected function petugas(){
        return $this->belongsTo(petugas::class, 'petugas_id', 'id');
    }
}
