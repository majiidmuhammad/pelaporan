<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';

    protected function tanggapan(){
        return $this->hasOne(tanggapan::class);
    }
}
