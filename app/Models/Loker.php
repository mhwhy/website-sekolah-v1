<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    use HasFactory;
    protected $table = 'lokers';
    protected $fillable = ['id', 'nama_pekerjaan', 'nama_perusahaan', 'lokasi', 'gaji', 'gambar'];
}
