<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $fillable = ['nip_dosen', 'kode_mk', 'nama_mk', 'sks', 'semester', 'jurusan'];

    public function dosen() {
        return $this->hasMany(Dosen::class);
    }
}
