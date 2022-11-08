<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher2 extends Model
{
    use HasFactory;
    protected $table = 'teachers2';
    protected $fillable = ['id', 'nama', 'jenis_kelamin', 'mapel', 'alamat', 'foto'];
}
